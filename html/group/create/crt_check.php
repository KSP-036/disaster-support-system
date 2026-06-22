<?php
  require_once("../../db.php");
?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/group.css">
        <title>グループ作成</title>

    </head>

    <body>
        <header id="header">
            <div class="main_visual">
                <div class="acount">
                    <a href="../../account.php"><img src="../../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
                </div>
            </div>
        
            <nav>
                <ul>
                    <li class="current"><a href="../../home.php"><i class="fas fa-home"></i> HOME</a></li>
                    <li><a href="../../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                    <li><a href="../../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                    <li><a href="../../group.php"><i class="fas fa-users"></i> グループ</a></li>
                </ul>
            </nav>
        </header>

        <!--メイン-->
        <main>
            <?php
               $name = $_POST['name'];

                $i = 1;
                $j = 1;
                while(!empty($_POST[$i])) {
                    $menber[$j] = $_POST[$i];
                    
                    
                    $i++;
                    $j++;
                }
            ?>
            <div class="heading"><!-- 見出し -->
                <h1>グループ作成確認</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ部分 -->
                
                <h3>
                    <spam>この情報でグループを作成します。よろしいですか？</spam>
                </h3>

                <div id="ip_form">
                    <form id="ip_form" method='POST' action="make_gp.php">
                        <table id="ip_table">
                            <tr id="ip_gpname">
                                <th>グループ名</th>

                                <td>
                                    <span><?php echo $name ?></span><!-- gp_create.htmlで入力したグループ名をここに挿入する -->
                                    <input type='hidden' name="name" value=<?php echo $name ?>>
                                </td>
                            </tr>

                            <tr id="ip_gpmen">
                                <th>グループメンバー</th>

                                <td>
                                        
                                    <ul id="men_list"><!-- create.htmlで入力されたemailに対応したアカウント名を表示させる(希望) -->
                                        <?php 
                                           $i = 1;
                                           while(!empty($menber[$i])) {
                                               $kobayasi = $menber[$i];
                                               try {
                                                    $pdo = new PDO($dsn, $user, $password);
                                                    // プリペアドステートメントのエミュレーションを無効にする
                                                    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                                                    // 例外がスローされる設定にする
                                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                   $sql = "SELECT name FROM アカウント WHERE mail = :kobayasi";
                                                   $stm = $pdo->prepare($sql);
                                       
                                                   $stm->bindValue(':kobayasi',$kobayasi,PDO::PARAM_STR);
                                                   $stm->execute();
                                       
                                                   $result = $stm->fetch(PDO::FETCH_ASSOC);
                                                   if($result == false) {
                                                       echo $kobayasi,"は存在しませんでした。","<br>"; 
                                                       
                                                   } else {
                                                       echo $result['name'],"<br>";
                                                    }
                                                } catch (Exception $e) {
                                                   echo '<span class="error">エラーがありました。</span><br>';
                                                   echo $e->getMessage();
                                                   exit();
                                               }
                                               $i++;
                                               $j++;
                                            }
                                        ?>
                                        <li><input class="mail" type="hidden" name="1" value="<?php if(!empty($_POST[1])) {echo $_POST[1];} ?>" maxlength="200" required></li>
                                        <li><input class="mail" type="hidden" name="2" value="<?php if(!empty($_POST[2])) {echo $_POST[2];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="3" value="<?php if(!empty($_POST[3])) {echo $_POST[3];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="4" value="<?php if(!empty($_POST[4])) {echo $_POST[4];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="5" value="<?php if(!empty($_POST[5])) {echo $_POST[5];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="6" value="<?php if(!empty($_POST[6])) {echo $_POST[6];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="7" value="<?php if(!empty($_POST[7])) {echo $_POST[7];} ?>" maxlength="200"></li>
                                        <li><input class="mail" type="hidden" name="8" value="<?php if(!empty($_POST[8])) {echo $_POST[8];} ?>" maxlength="200"></li>
                                    </ul>

                                </td>
                            </tr>
                        </table>

                        <div class="gp_conb">
                            <button class="back_btn btn_t" type="button" onclick="history.back()" autocomplete="off">戻る</button>
                            <button class="crt_btn btn_t" type="submit" onclick="location.href='crt_comp.php'">作成する</button>
                        </div>
                    </form>
                </div>

            </div>
            
        </main>
        <!--/メイン-->

        <!-- フッター -->
        <footer id="footer">
            <div id="footer_nav">
                <ul>
                <li><a href="../../home.php">HOME</a></li>
                <li><a href="../../report.html">災害</a></li>
                <li><a href="../../map.php">避難所</a></li>
                <li><a href="../../group.php">グループ</a></li>
                </ul>
            </div>
            <small>
                2021 災害
            </small>
        </footer>
        <!-- /フッター -->

    </body>
</html>
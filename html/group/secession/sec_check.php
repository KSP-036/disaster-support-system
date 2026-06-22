<?php
  require_once("../../db.php");
?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/group.css">
        <title>グループ脱退</title>

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
                <li><a href="../../map.html"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

        <!--メイン-->
        <main>
            <?php 
                $group = $_GET['group'];
            ?>
            <div class="heading"><!-- 見出し -->
                <h1>グループ脱退確認</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ部分 -->
                
                <h3>
                    <spam>本当に脱退します。後悔しませんね？</spam>
                </h3>

                <div id="ip_form">
                    <table id="ip_table">
                        <tr id="ip_gpname">
                            <th>グループ名</th>

                            <td>
                                <span><?php echo $group; ?></span><!-- グループ名をここに表示する -->
                            </td>
                        </tr>

                        <tr id="ip_gpmen">
                            <th>グループメンバー</th>

                            <td>
                                        
                                <ul id="men_list"><!-- 脱退するグループのメンバー情報をここに表示する -->
                                <?php
                                    try {
                                        $pdo = new PDO($dsn, $user, $password);
                                        // プリペアドステートメントのエミュレーションを無効にする
                                        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                                        // 例外がスローされる設定にする
                                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    } catch (Exception $e) {
                                        echo '<span class="error">エラーがありました。</span><br>';
                                        echo $e->getMessage();
                                        exit();
                                    }
                                    $i = 1;
                                    while($i <= 10) {
                                        try {
                                            $sql =  "SELECT グループメンバー$i FROM グループ WHERE グループ名 = :group";
                                            $stm = $pdo-> prepare($sql);
                                            $stm->bindValue(':group',$group,PDO::PARAM_STR);
                                            $stm->execute();
                                            $result = $stm->fetch(PDO::FETCH_ASSOC);
                                            if(!empty($result)) {
                                                foreach($result as $row) {
                                                    try {
                                                        $sql = "SELECT name FROM アカウント WHERE mail = :row";
                                                        $stm = $pdo-> prepare($sql);
                                                        $stm->bindValue(':row',$row,PDO::PARAM_STR);
                                                        $stm->execute();
                                                        $bb = $stm->fetch(PDO::FETCH_ASSOC);
                                                        if(!empty($bb['name'])) {
                                                            echo $bb['name'],"<br>";
                                                        }
                                                    } catch (Exception $e) {
                                                        echo '<span class="error">エラーがありました。</span><br>';
                                                        echo $e->getMessage();
                                                        exit();
                                                    }
                                                }
                                            }else {
                                                break;
                                            }
                                        } catch (Exception $e) {
                                            echo '<span class="error">エラーがありました。</span><br>';
                                            echo $e->getMessage();
                                            exit();
                                        }
                                        $i++;
                                    }
                                ?>
                                </ul>

                            </td>
                        </tr>
                    </table>

                    <div class="gp_conb">
                        <button class="back_btn btn_t" type="button" onclick="history.go( -2 )" autocomplete="off">戻る</button>
                        <?php 
                            echo "<button class=sec_btn btn_t type=submit onclick=location.href='sec_comp.php?group=$group'>";
                                echo "脱退する";
                            echo "</button>";
                        ?>
                    </div>
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
                <li><a href="../../map.html">避難所</a></li>
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

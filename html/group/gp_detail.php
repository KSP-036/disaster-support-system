<?php
  require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/group.css">
        <title>グループ詳細</title>

    </head>

    <body>
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="../account.php"><img src="../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>
        
        <nav>
            <ul>
                <li class="current"><a href="../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

        <!--メイン-->
        <main>
            <?php
                $group = $_GET['group'];
            ?>
            <div class="heading"><!-- 見出し -->
                <h1>グループ詳細</h1>
            </div>
            
            <div id="gp_content" class="cont_det">


                <div id="gp_info">

                    <h3>
                        <spam>グループ名:<?php echo $group;?></spam><!-- グループ名情報をここに挿入する -->
                    </h3>

                    <div id="gp_menber">
                        
                        <h4>グループ加入者</h4>
                        
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
                            $group = $_GET['group'];
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
                                                $sql = "SELECT name,id,状態名,避難所名 FROM 
                                                    (    (     
                                                            アカウント JOIN 健康状態 ON アカウント.健康id = 健康状態.健康id
                                                        )RIGHT JOIN 避難所 ON アカウント.避難所id = 避難所.避難所id
                                                    ) 
                                                    WHERE mail = :row";
                                                $stm = $pdo-> prepare($sql);
                                                $stm->bindValue(':row',$row,PDO::PARAM_STR);
                                                $stm->execute();
                                                $bb = $stm->fetch(PDO::FETCH_ASSOC);
                                                if(!empty($bb['name'])) {
                                                    echo "<table id=det_table>";
                                                        echo "<tr>";
                                                            echo "<th class=det_name>";
                                                                echo "<span>";
                                                                    echo $bb['name'];
                                                                echo "</span>";
                                                            echo "</th>";
                                                            echo "<td class=det_hth>";
                                                            echo "<span>";
                                                                if($bb['状態名'] == '健康') {
                                                                    $filePath = '../images/kenkou.jpg';
                                                                    echo "<img src=\"$filePath\"style=position:relative;heigth:50px;width:50px;left:10px>";
                                                                    echo '　',' ', $bb['状態名'];
                                                                }else if($bb['状態名'] == '軽傷') {
                                                                    $filePath = '../images/keisyou.jpg';
                                                                    echo "<img src=\"$filePath\"style=position:relative;heigth:50px;width:50px;left:10px>";
                                                                    echo '　',' ', $bb['状態名'];
                                                                } else if($bb['状態名'] == '重傷') {
                                                                    $filePath = '../images/juusyou.jpg';
                                                                    echo "<img src=\"$filePath\"style=position:relative;heigth:50px;width:50px;left:10px>";
                                                                    echo '　',' ', $bb['状態名'],"<br>";
                                                                } else {
                                                                    echo $bb['状態名'];
                                                                }
                                                            echo "</span>";
                                                            echo "</td>";
                                                            echo "<td class=det_shel>";
                                                                echo "<span>";
                                                                    echo $bb['避難所名'];
                                                                echo "</span>";
                                                            echo "</td>";
                                                        echo "</tr>";
                                                    echo "</table>";
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
                            try {
                                $sql =  "SELECT グループid FROM グループ WHERE グループ名 = :group";
                                $stm = $pdo-> prepare($sql);
                                $stm->bindValue(':group',$group,PDO::PARAM_STR);

                                $stm->execute();
                                $rt = $stm->fetch(PDO::FETCH_ASSOC);

                            } catch (Exception $e) {
                                echo '<span class="error">エラーがありました。</span><br>';
                                echo $e->getMessage();
                                exit();
                            }
                        ?>
                    </div>

                    <div class="gp_conb">
                            <?php
                                echo "<button class=sec_btn btn_t type=submit onclick=location.href='secession/gp_secession.php?group=$group'>";
                                    echo "脱退";
                                echo "</button>"
                            ?>
                            <?php 
                                echo "<button class=del_btn btn_t type=submit onclick=location.href='delete/gp_delete.php?group=$group'>";
                                    echo "削除";
                                echo "</button>";
                            ?>
                            <?php 
                                echo "<button class=edi_btn btn_t type=submit onclick=location.href='../chat/index.php'>";
                                    $_SESSION['group_id'] = $rt['グループid'];
                                    echo "チャット";
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
                    <li><a href="../home.php">HOME</a></li>
                    <li><a href="../report.html">災害</a></li>
                    <li><a href="../map.php">避難所</a></li>
                    <li><a href="../group.php">グループ</a></li>
                </ul>
            </div>
            
            <small>
                2021 災害
            </small>
        </footer>
        <!-- /フッター -->

    </body>
</html>
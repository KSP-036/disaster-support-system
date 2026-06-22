<?php 
  require_once("db.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta chareset="utf-8">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">
<title>グループ</title>
</head>

<body>
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="account.php"><img src="images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>

        <nav>
            <ul>
                <li class="current"><a href="home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

    <main id="home_cont">

        <div class="heading"><!-- 佐々木追加:見出し -->
            <h1>グループ</h1>
        </div>

        <div id="gpi_li"><!-- 佐々木追加 --><!-- グループに所属していなければグループ作成ボタンのみ表示する グループに所属していれば所属している分のgp_iconを表示する -->
            <?php 
                if (!empty($_SESSION['mail'])) {
                    //MySQLデータベースに接続する
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
        
                    $mail = $_SESSION["mail"];
                    $i =1;
                    while($i <= 10) {
                        try {
                            $sql = "SELECT グループ名 FROM グループ WHERE グループメンバー$i = :mail";
                            $stm = $pdo->prepare($sql);

                            $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                            $stm->execute();

                            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                            foreach($result as $row) {
                                echo "<div class = gp_icon>";
                                    echo "<div class=gpi_name>";
                                        echo "<span>";
                                            echo $row['グループ名'];
                                        echo "</span>";
                                    echo "</div>";
                                    echo "<div class=gpi_men>";
                                        echo "<img src=images/icon_act.png>";
                                        echo "<p>";
                                            echo "<span>";
                                                echo "太郎";
                                            echo "</span>";
                                        echo "</p>";
                                        echo "<p>";
                                            echo "<span class=icon_hlt>";
                                                echo "健康";
                                            echo "</span>";
                                        echo "</p>";
                                    echo "</div>";
                                    echo "<div class=gpi_det>";
                                        echo "<div class=gpi_detbr>";
                                        echo "</div>";
                                        echo "<a href=group/gp_detail.php?group=$row[グループ名]>";
                                            echo "<span>";
                                                echo "グループ詳細へ";
                                            echo "</span>";
                                        echo "</a>";
                                    echo "</div>";
                                echo "</div>";
                            }
    
                        } catch (Exception $e) {
                            echo '<span class="error">エラーがありました。</span><br>';
                            echo $e->getMessage();
                            exit();
                        }
                        $i++;
                    }

                    echo "<a class=gp_crtbtn href=group/create/gp_create.php>"; //<!-- グループ作成アイコン -->
                        echo "<div class=triangle>"; echo "</div>";
                        echo "<div class=icon_plus>";
                            echo "<div class='ipl tol'>"; echo "</div>";
                            echo "<div class='ipl tor'>"; echo "</div>";
                            echo "<div class='ipl bol'>"; echo "</div>";
                            echo "<div class='ipl bor'>"; echo "</div>";
                        echo "</div>";
                        echo "<div class=gp_cbtext>";
                            echo "<span>"; echo "グループ作成"; echo "</span>";
                        echo "</div>";
                    echo "</a>";

                } else {
                    echo "アカウントを作成しログインしてください！";
                }
            ?>
            
        </div>

    </main>

    <footer>
        <div id="footer_nav">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="report.html">災害</a></li>
                <li><a href="map.php">避難所</a></li>
                <li><a href="group.php">グループ</a></li>
            </ul>
        </div>

        <small>
            2021 災害
        </small>
    </footer>  
</body>

</html>
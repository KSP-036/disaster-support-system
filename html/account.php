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
<title>アカウント</title>
</head>

<body>
    <!-- http://174.129.230.157/ -->
    
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

        <div class="heading">
            <h1 style="text-align: center;">アカウント</h1>
        </div>

        <div class="actbtn"><!-- 佐々木追加:アカウントボタン -->
            <?php
                if(!empty($_SESSION['name'])) {
                    echo "<button class=a_det type=button onclick=location.href='account/acc.php'>";
                        echo "マイアカウント";
                    echo "</button>";
                    echo "<button class=a_logout type=button onclick=location.href='account/log/logout.php'>";
                        echo "ログアウト";
                    echo "</button>";
                } else {
                    echo "<button class=a_crt type=button onclick=location.href='account/sign.php'>";
                        echo "アカウント作成";
                    echo "</button>";
                    echo "<button class=a_login type=button onclick=location.href='account/log/login.php'>";
                        echo "ログイン";
                    echo "</button>";
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

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>My Account</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/inside.css">
</head>

<body>

    <header id="header">
        <div class="main_visual"></div>
        
        <nav>
            <ul>
                <li class="current"><a href="../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

    <div class="heading">
        <h1>アカウント情報</h1>
    </div>

    <div class="content">
        <form action="" method="POST">
            <h1>My Account</h1>
            <hr>
            
            <?php
               if(isset($_SESSION['mail']) && isset($_SESSION['id']) && isset($_SESSION['name'])) {
                  $mail = $_SESSION['mail'];
                  $id = $_SESSION['id'];
                  $name = $_SESSION['name'];
                  $hinanjo = $_SESSION['避難所名'];
                  $kenkou = $_SESSION['状態名'];
                }
            ?>

            <div class="control">
                <i class="fas fa-user fa-1g"></i>アカウント名:
                <?php 
                   if(!empty($name)) {
                    echo $name;
                   } 
                ?>
            </div>

            <div class="control">
                <i class="far fa-envelope fa-1g"></i> メールアドレス:
                <?php 
                   if(!empty($mail)) {
                    echo $mail;
                   } 
                ?>
            </div>

            <div class="control">
                <i class="fas fa-key"></i> パスワード:
                <?php 
                   if(!empty($id)) {
                    echo $id;
                   } 
                ?>
            </div>
            <div class="control">
                <?php
                  if(!empty($mail)) {
                    echo "避難所名：       ", $hinanjo;
                  }
                ?>
            </div>
            <div class="control">
            <?php
                if(!empty($mail)) {
                    echo "健康状態：";
                    if($kenkou == '健康') {
                        $filePath = '../images/kenkou.jpg';
                        echo "<img src=\"$filePath\">","<br>";
                        echo '　','　','　','　','　',' ','　','　', $kenkou;
                    }else if($kenkou == '軽傷') {
                        $filePath = '../images/keisyou.jpg';
                        echo "<img src=\"$filePath\">","<br>";
                        echo '　','　','　','　','　',' ','　','　', $kenkou;
                    } else if($kenkou == '重傷') {
                        $filePath = '../images/juusyou.jpg';
                        echo "<img src=\"$filePath\">","<br>";
                        echo '　','　','　','　','　',' ','　','　', $kenkou;
                    }else {
                        echo $kenkou;
                    }
                }
                ?>
            </div>

            <div class="control-1">
                <button type="button" class="btnr" onclick="location.href='edi/edit.php'">編集</button>
                <button type="button" class="btnle" onclick="location.href='del/delete.php'">削除</button>
                <br><br><br><br>
                <button type="button" class="back" onclick="location.href='../account.php'">戻る</button>
            </div>
        </form>
    </div>

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
</body>

</html>
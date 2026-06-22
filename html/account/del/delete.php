<?php
  session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント削除画面</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/inside.css">
</head>

<body>
    <header id="header">
        <div class="main_visual"></div>
        
        <nav>
            <ul>
                <li class="current"><a href="../../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

    <div class="heading">
        <h1>アカウント削除</h1>
    </div>

    <?php
      $mail = $_SESSION['mail'];
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
      $hinanjo = $_SESSION['避難所名'];
      $kenkou = $_SESSION['状態名'];
      $group = $_SESSION['グループid'];
    ?>

    <div class="content">
        <form action="sakujo.php" method="POST">
            <input type="hidden" name="check" value="checked">
            <h1>アカウント情報削除の確認</h1>
            <p>アカウント情報を放棄する場合<br>削除を行ってください。</p>
            <hr>

            <div class="control">
                <i class="fas fa-user fa-1g"></i> アカウント名:
                <span class="fas fa-angle-double-right"></span> 
                <?php echo $name ?>
            </div>

            <div class="control">
                <i class="far fa-envelope fa-1g"></i> メールアドレス:
                <span class="fas fa-angle-double-right"></span> 
                <?php echo $mail ?>
            </div>

            <div class="control">
                <i class="fas fa-key"></i> パスワード:
                <span class="fas fa-angle-double-right"></span> 
                <?php echo $id ?>
            </div>
            
            <br>
            <div class="control-1">
                <button type="submit" class="next-btn btn">削除する</button>
                <a href="../acc.php" class="back-btn">戻る</a>
            </div>

            <div class="clear"></div>
        </form>
    </div>

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
</body>

</html>
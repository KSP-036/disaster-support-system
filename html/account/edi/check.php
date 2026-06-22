

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント変更確認画面</title>
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

    <div class="heading"><!-- 見出し -->
        <h1>アカウント編集確認</h1>
    </div>

    <div class="content">
        <form action="" method="POST">
            <input type="hidden" name="check" value="checked">
            <h1>入力情報の確認</h1>
            <p>※ご入力情報に変更が必要な場合<br>変更を行ってください。</p>
            <hr>

            <div class="control">
                <i class="fas fa-user fa-1g"></i>アカウント名:
                <p>
                    <span class="fas fa-angle-double-right"></span> 
                </p>
        
            </div>

            <div class="control">
                <i class="far fa-envelope fa-1g"></i> メールアドレス:
                <p>
                    <span class="fas fa-angle-double-right"></span> 
                    
                </p>
            </div>

            <div class="control">
                <i class="fas fa-key"></i> パスワード:
                <p>
                    <span class="fas fa-angle-double-right"></span> 
                    
                </p>
            </div>
            
            <div class="control-1">
                <button type="submit" class="next-btn btn">登録する</button>
                <a href="edit.php" class="back-btn">変更へ</a>
            </div>

            <div class="clear"></div>
        </form>
    </div>

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
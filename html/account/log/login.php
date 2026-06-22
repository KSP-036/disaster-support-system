

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>ログイン</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/entry.css">
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
        <h1>ログイン</h1>
    </div>

    <div class="content">
        <h1>ログイン</h1>
        <p>次のフォームに必要事項をご記入ください。</p>
        <br>

        <form method='POST' action='a.php'>
            <div class="control">
                <i class="far fa-envelope fa-1g"></i>
                <input id="email" type="email" placeholder="Email Address" name="mail" maxlength="30" required>

            </div>

            <div class="control">
                <i class="fas fa-unlock-alt fa-1g"></i>
                <input id="password" type="password" placeholder="Password" name="password" maxlength="15" required>
            
            </div>

            <div class="control-1">
                <button type="submit" class="btn">ログイン</button><br><br><br>
                <button type="button" class="btnl" onclick="location.href='../../home.php'">Homeへ</button>
            </div>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント作成</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/entry.css">
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
        <h1>アカウント作成</h1>
    </div>

    <div class="content">
        <h1>アカウント作成</h1>
        <p>次のフォームに必要事項をご記入ください。</p>
        <br>
        
        <form method = "POST" action="a.php">
         <div class="control">
             <i class="fas fa-user fa-1g"></i>
             <input id="name" type="text" name="name" placeholder="Account name" maxlength="20" required>
        
         </div>

         <div class="control">
             <i class="far fa-envelope fa-1g"></i>
             <input id="email" type="email" name="mail" placeholder="Email Address" maxlength="50" required>
        
         </div>

         <div class="control">
             <i class="fas fa-key"></i> 
             <input id="password" type="password" name="password" placeholder="Password" maxlength="20" required>
        
         </div>

         <div class="control-1">
             <button type="submit" class="btn">登録</button><br><br><br>
             <button type="button" class="btnl" onclick="location.href='../account.php'">戻る</button>
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

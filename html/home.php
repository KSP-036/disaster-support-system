<!DOCTYPE html>
<script src="https://unpkg.com/scrollreveal"></script>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta chareset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/base.css">
<title>ホームページ</title>
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

    <main>
        <section id="box1" class="box" data-section-name="災害">    
            <section class="page-section bg-primary" id="about">
                <h2 class="text-white mt-0">災害</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">災害について書いてあります<br>災害に対する知識を身につけましょう</p>
            </section>
        </section>

        <section id="box2" class="box"data-section-name="避難所">
            <section class="page-section bg-primary" id="about">
                <h2 class="text-white mt-0">避難所</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">避難所の場所を表示できます</p>
            </section>
        </section>

        <section id="box3" class="box" data-section-name="グループ">
            <section class="page-section bg-primary" id="about">
                <h2 class="text-white mt-0">グループ</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">グループに登録している人の状態を表示できます</p>
            </section>
        </section>
    </main>
    
    <footer id="footer">
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>

<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/6-1/js/6-1.js"></script>

</body>

</html>
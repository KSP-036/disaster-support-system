<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta chareset="utf-8">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/dropdown.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>避難所</title>
</head>
<body>
    <header>
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

    <!-- 22/01/31 変更 -->
    <div class="turnbackbut">
        <div class="panel">
            <button onclick="document.location='../map.php'">前画面へ</button>
        </div>
    </div>
    <!-- /変更 -->


<div>
<div  class="hi">
    <div><p>
        <img class="anh" src="../images/5.jpg"  >〒272-0034 千葉県市川市市川１丁目３-18
        <br><p>■<font size="5">市川グランドホテル</font></p>
        ■市川駅（北出口）徒歩3分 
        <br><button onclick="document.location='../test/ichi copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "市川グランドホテル";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
    </div>
</div>

<div  class="hi">
    <div><p>
        <img class="anh" src="../images/6.jpg" >〒272-0033 千葉県市川市市川南４丁目２−20 
        <br><p>■<font size="4">リトルガーデンインターナショナルスクール 市川校</font></p>
        ■　市川駅（南出口）　徒歩10分
        <br><button onclick="document.location='../test/ichi3 copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "リトル";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
    </div>
</div>

<div  class="hi">
    <div><p>
        <img class="anh" src="../images/7.jpg" >〒272-0034 千葉県市川市市川２丁目３２-5
        <br><p>■<font size="5">市川市立市川小学校</font></p>
        ■　市川駅（北出口）　徒歩7分
        <br><button onclick="document.location='../test/ichi1 copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "市川市立市川小学校";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
        
    </div>
</div>

<div  class="hi">
    <div><p>
        <img class="anh" src="../images/3.jpg">〒272-0032 千葉県市川市大洲４丁目２１−5
        <br><p>■<font size="5">市川市立大洲中学校</font></p>
        ■　市川駅（南出口）　徒歩11分
        <br><button onclick="document.location='../test/ichi2 copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "市川市立大洲中学校";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
    </div>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top" >Top</button>

<script src="../js/dropdown.js"></script>


<footer>
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
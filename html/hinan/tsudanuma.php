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

<div >
<div class="hi">
    <div><p>
        <img class="anh" src="../images/1.jpg" >〒275-0016 千葉県習志野市津田沼１丁目１
        <br><p>■<font size="5">大原学園津田沼校 本館</font></p>
        ■津田沼駅（南出口）徒歩2分 
        <br><button onclick="document.location='../tsudanumamap/t.map1copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "大原津田沼校";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
    </div>
</div>

<div class="hi">
    <div><p>
        <img class="anh" src="../images/2.jpg">〒275-0026 千葉県習志野市谷津１丁目９-17
        <br><p>■<font size="5">津田沼中央総合病院</font></p>
        ■津田沼駅（南出口）徒歩7分
        <br><button onclick="document.location='../tsudanumamap/t.map2copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "津田沼中央総合病院";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
    </div>
</div>

<div class="hi">
    <div><p>
        <img class="anh" src="../images/3.jpg" >〒274-0825 千葉県船橋市前原西２丁目７-7
        <br><p>■<font size="5">七田式 津田沼教室</font></p>
        ■津田沼駅（北口店）徒歩3分
        <br><button onclick="document.location='../tsudanumamap/t.map3copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "七田式津田沼教室";
            echo "<button class=cha_btn type=button onclick=location.href='../graph/gurahu.php?map=$map'>";
                echo "現在の状況";
            echo "</button>";
        ?>
        
    </div>
</div>

<div class="hi">
    <div><p>
        <img class="anh" src="../images/4.jpg" >〒274-0824 千葉県船橋市前原東１丁目６-4
        <br><p>■<font size="5">いけだ病院</font></p>
        ■津田沼駅（北口店）徒歩8分
        <br><button onclick="document.location='../tsudanumamap/t.map4copy.htm'">詳細とマップへ</button>
        <?php 
            $map = "いけだ病院";
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
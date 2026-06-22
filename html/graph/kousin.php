<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $hinanjo = $_GET['map']; 
        ?>
        <form method = "POST" action="kn.php">
            <p>男性<br>
                <input type="number" name="man" placeholder="男の人数">
            </p>
            <p>女性<br>
                <input type="number" name="women" placeholder="女の人数">
            </p>
            <p>健康<br>
                <input type="number" name="kenkou" placeholder="健康な人数">
            </p>
            <p>軽傷<br>
                <input type="number" name="keisyou" placeholder="軽傷の人数">
            </p>
            <p>重傷<br>
                <input type="number" name="juusyou" placeholder="重傷の人数">
            </p>
            <p>20代以下<br>
                <input type="number" name="a" placeholder="20代以下の人数">
            </p>
            <p>30代<br>
                <input type="number" name="b" placeholder="30代の人数">
            </p>
            <p>40代<br>
                <input type="number" name="c" placeholder="40代の人数">
            </p>
            <p>50代<br>
                <input type="number" name="d" placeholder="50代の人数">
            </p>
            <p>60代以上<br>
                <input type="number" name="e" placeholder="60代以上の人数">
            </p>
            <input type="hidden" name="map" value=<?php echo $hinanjo ?>>
            <input type="submit" style="width: 100px; height:50px;" value="更新">
        </form>
        <form action="../map.php">
            <input type="submit" style="width: 100px; height:50px;" value="戻る">
        </form>
    </div>
</body>
</html>
<?php
    require_once("../db.php");

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM 健康状態";
        $stm = $pdo->prepare($sql);
        $stm->execute();
 
        $kenkou = $stm->fetchALL(PDO::FETCH_ASSOC);

        $sql = "SELECT * FROM 避難所";
        $stm = $pdo->prepare($sql);
        $stm->execute();
 
        $hinanjo = $stm->fetchALL(PDO::FETCH_ASSOC);
    } catch (Exception $e){
        $err = '<span class= "error">エラーがありました。</span><br>';
        $err .= $e->getMessage();
        exit($err);
    }
 
    $mail = $_SESSION['mail'];
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $initial_mail = $mail;
    $initial_id = $id;
    $initial_name = $name;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント編集</title>
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
        <h1>アカウント編集</h1>
    </div>

    <div class="content">
        <form action="hensyu.php" method="POST">
            <h1>アカウント編集</h1>
            <p>変更する項目がある場合、変更を行ってください。</p>
            <hr>
            <br>
        
            <div class="control">
                <i class="fas fa-user fa-1g"></i>
                <input id="name" type="text" name="name" placeholder="Account name" maxlength="15" value=<?= $initial_name?> required>
            </div>

           <div class="control">
             <i class="fas fa-key"></i> 
             <input id="password" required = required type="password" name="id" placeholder="Password" maxlength="15" value=<?= $initial_id?>>
           </div>
            <div>
                <i class="far fa-envelope fa-1g"></i> 健康状態 & 避難所:  
                <p>
                    <select name = "kenkou">
                    <?php
                        foreach ($kenkou as $row) {
                            echo '<option value="', $row["健康id"],'">', $row["状態名"],"</option>";
                        }
                    ?>
                </p>
            </div>
            <div>
                <i class="far fa-envelope fa-1g"></i> 避難所:
                <p>
                    <input type="text" size="20" list="mylist1" name="hinanjo">
                    <datalist id="mylist1">
                        <?php
                            foreach($hinanjo as $row) {
                                echo '<option value="', $row["避難所名"],'">',$row["避難所名"],"</option>";
                            }
                        ?>
                    </datalist>
                </p>
            </div>

         <div class="control-1">
                <button type="submit" class="next-btn btn">変更</button>
                <a href="../acc.php" class="back-btn">戻る</a><br><br>
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

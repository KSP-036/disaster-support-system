<?php
 require_once("../db.php");

 if (!isset($_SESSION['name'])) {
     header("Location: ../log/login.php");
     exit();
    }
    $mail = $_SESSION['mail'];
    try {
        $pdo = new PDO($dsn, $user, $password);
        // プリペアドステートメントのエミュレーションを無効にする
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // 例外がスローされる設定にする
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM アカウント WHERE mail = :mail";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
        $stm->execute();
        $i =1;
        while($i <= 10) {
            try {
                $sql = "SELECT グループ名 FROM グループ WHERE グループメンバー$i = :mail";
                $stm = $pdo->prepare($sql);

                $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                $stm->execute();

                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row) {
                    $group = $row['グループ名'];
                    $t = 1;
                    while($t <= 10) {
                        try {
                            $sql =  "SELECT グループメンバー$t FROM グループ WHERE グループ名 = :group AND グループメンバー$t = :mail";
                            $stm = $pdo-> prepare($sql);
                            $stm->bindValue(':group',$group,PDO::PARAM_STR);
                            $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                            $stm->execute();
                            $result = $stm->fetch(PDO::FETCH_ASSOC);
                            if(!empty($result)) {
                                foreach($result as $row) {
                                    $j = $t;
                                    $z = $j + 1;
                                    while($z <= 10) {
                                        try {
                                            $sql = "SELECT グループメンバー$z FROM グループ WHERE グループ名 = :group ";
                                            $stm = $pdo-> prepare($sql);
                                            $stm->bindValue(':group',$group,PDO::PARAM_STR);
                                            $stm->execute();
                                            $bb = $stm->fetch(PDO::FETCH_ASSOC);
                                            if(!empty($bb)) {
                                                $sql = "UPDATE グループ SET グループメンバー$j = グループメンバー$z WHERE グループ名 = :group";
                                                $stm = $pdo-> prepare($sql);
                                                $stm->bindValue(':group',$group,PDO::PARAM_STR);
                                                $stm->execute();
                                            }
                                            $j++;
                                            $z++;
                                        } catch (Exception $e) {
                                            echo '<span class="error">エラー</span><br>';
                                            echo $e->getMessage();
                                            exit();
                                        }
                                    }  
                                }
                            }
                        } catch (Exception $e) {
                            echo '<span class="error">エラーだよ</span><br>';
                            echo $e->getMessage();
                            exit();
                        }
                        $t++;
                    }
                }
    
            } catch (Exception $e) {
                echo '<span class="error">エラーがありました。</span><br>';
                echo $e->getMessage();
                exit();
            }
            $i++;
        }


        $_SESSION = array();

        session_destroy();
        
    } catch (Exception $e) {
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
        exit();
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント削除完了</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/inside.css">
</head>

<body>

    <!-- ヘッダー -->
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="../../account.php"><img src="../../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>
        
        <nav>
            <ul>
                <li class="current"><a href="../../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>
    <!-- /ヘッダー -->

    <div class="heading"><!-- 見出し -->
        <h1>アカウント削除</h1>
    </div>

    <div class="content">
        <h1>アカウント削除が完了しました。</h1>
        <p>下のボタンよりHOMEに移動してください。</p>

        <br><br>
        <div class="control-1">
            <a href="../../home.php"><button type="button" class="btn">HOMEへ</button></a>
        </div>
    </div>

    <!-- フッター -->
    <footer id="footer">
        <div id="footer_nav">
            <ul>
                <li><a href="../../home.html">HOME</a></li>
                <li><a href="../../account.html">アカウント</a></li>
                <li><a href="../../map.php">マップ</a></li>
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


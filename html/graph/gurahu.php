<?php
   require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta chareset="utf-8">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/dropdown.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>避難所</title>
</head>
<body>
 <div>
     <?php
          $hinanjo = $_GET['map'];
          if(!empty($hinanjo)) {
              //MySQLデータベースに接続する
              try {
                 $pdo = new PDO($dsn, $user, $password);
                 // プリペアドステートメントのエミュレーションを無効にする
                 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                 // 例外がスローされる設定にする
                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo "データベースに接続しました。","<bt>";
                } 
                catch (Exception $e) {
                 echo '<span class="error">エラーがありました。</span><br>';
                 echo $e->getMessage();
                 exit();
                }
                
                $sql = "SELECT * FROM 避難所 WHERE 避難所名 = :hinanjo";
                $stm = $pdo->prepare($sql);

                $stm->bindValue(':hinanjo',$hinanjo,PDO::PARAM_STR);
                $stm->execute();

                $result = $stm->fetch(PDO::FETCH_ASSOC);

                if($result == false) {
                    echo 'メールアドレスかパスワードが間違っています。';
                    echo '<a href = "../home.php">戻る</a>';

                    
                } else {
                    $_SESSION['男性'] = $result['男性'];
                    $_SESSION['女性'] = $result['女性'];
                    $_SESSION['健康'] = $result['健康'];
                    $_SESSION['軽傷'] = $result['軽傷'];
                    $_SESSION['重傷'] = $result['重傷'];
                    $_SESSION['名前'] = $result['避難所名'];
                    $_SESSION['二十代'] = $result['二十代以下'];
                    $_SESSION['三十代'] = $result['三十代'];
                    $_SESSION['四十代'] = $result['四十代'];
                    $_SESSION['五十代'] = $result['五十代'];
                    $_SESSION['六十代'] = $result['六十代以上'];
                    header('Location:test.php');
                }
            } else {
                echo "ない";
            }
       ?>
   </div>
</body>
</html>
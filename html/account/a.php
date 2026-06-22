<?php
   require_once("db.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PDOでデータベースに接続する</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
 <div>
     <?php
         $errormessage = "";
         $signupmessage = "";
         $mail = $_POST["mail"];

         if (!empty($_POST["mail"]) && !empty($_POST["password"])) {
             //MySQLデータベースに接続する
             try {
                 $pdo = new PDO($dsn, $user, $password);
                 // プリペアドステートメントのエミュレーションを無効にする
                 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                 // 例外がスローされる設定にする
                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $mail = $_POST["mail"];
                 $password = $_POST["password"];
                 $name = $_POST["name"];

                 $sql = "SELECT * FROM アカウント WHERE mail = :mail";
                 $stm = $pdo->prepare($sql);
                 $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                 $stm->execute();
                 $result = $stm->fetch(PDO::FETCH_ASSOC);


                 if($result == TRUE) {
                     echo 'このメールアドレスは既に登録済みです。';
                  
                    } else {
                     $sql = "INSERT INTO アカウント(mail, id, name) VALUES (:mail,:password,:name)";
                     $stm = $pdo->prepare($sql);
                     $stm->bindValue(':mail', $mail, PDO::PARAM_STR);
                     $stm->bindValue(':password', $password, PDO::PARAM_STR);
                     $stm->bindValue(':name', $name, PDO::PARAM_STR);
                     $stm->execute();
       

                      $sql = "SELECT name,id,mail,状態名,避難所名 FROM 
                            (   (     
                                  アカウント JOIN 健康状態 ON アカウント.健康id = 健康状態.健康id
                                )RIGHT JOIN 避難所 ON アカウント.避難所id = 避難所.避難所id
                            ) 
                          WHERE mail = :mail AND id = :id";
                       $stm = $pdo->prepare($sql);

                       $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                       $stm->bindValue(':id',$password,PDO::PARAM_STR);
                       $stm->execute();

                        $result = $stm->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['mail'] = $result['mail'];
                        $_SESSION['id'] = $result['id'];
                        $_SESSION['name'] = $result['name'];
                        $_SESSION['避難所名'] = $result['避難所名'];
                        $_SESSION['状態名'] = $result['状態名'];
                     header("Location: ok.php");
                    }
                } catch (Exception $e) {
                  echo '<span class="error">エラーがありました。</span><br>';
                  echo $e->getMessage();
                  exit();
                }
            } else if(!empty($_POST["mail"])) {
              $errormessage = '登録できませんでした。';
            
            }
            echo "$errormessage";
      ?>
   </div>
   <form action = "../home.php">
       <?php echo $mail ?>
      <input type = "submit" value = "HOMEに戻る">
      <INPUT type="button" value="戻る" onClick="history.go(-1)">
   </form>
</body>
</html>
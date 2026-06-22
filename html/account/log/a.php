<?php
   
   require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>LOG IN</title>

</head>
<body>
 <div>
     <?php
          if(!empty($_POST)) {
              //MySQLデータベースに接続する
              try {
                 $pdo = new PDO($dsn, $user, $password);
                 // プリペアドステートメントのエミュレーションを無効にする
                 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                 // 例外がスローされる設定にする
                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } 
                catch (Exception $e) {
                 echo '<span class="error">エラーがありました。</span><br>';
                 echo $e->getMessage();
                 exit();
                }
                
                //フォーム入力値を取得
                $mail = $_POST["mail"];
                $id = $_POST["password"];
                
                $sql = "SELECT name,id,mail,状態名,避難所名 FROM 
                   (    (     
                            アカウント JOIN 健康状態 ON アカウント.健康id = 健康状態.健康id
                        )RIGHT JOIN 避難所 ON アカウント.避難所id = 避難所.避難所id
                    ) 
                    WHERE mail = :mail AND id = :id";
                $stm = $pdo->prepare($sql);

                $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
                $stm->bindValue(':id',$id,PDO::PARAM_STR);
                $stm->execute();

                $result = $stm->fetch(PDO::FETCH_ASSOC);

                //ユーザーが見つかればログインok
                if($result == false) {
                    echo 'メールアドレスかパスワードが間違っています。';
                    echo '<a href = "../../home.php">戻る</a>';

                    
                } else {
                    $_SESSION['mail'] = $result['mail'];
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['name'] = $result['name'];
                    $_SESSION['避難所名'] = $result['避難所名'];
                    $_SESSION['状態名'] = $result['状態名'];

                    header('Location:../../home.php');
                }
            } else {
                echo '何もない';
            }

       ?>
   </div>
</body>
</html>
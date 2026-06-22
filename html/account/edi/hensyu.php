<?php
   require_once("../db.php");
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
        $hinanjo = $_POST["hinanjo"];
        if(!isset($_POST['name'])) {
            echo "名前が未入力です。";
         } else if(!isset($_POST['id'])) {
             echo "パスワードが未入力です。";  
         } else {
            $mail = $_SESSION['mail'];
            $id = $_SESSION['id'];
            //MySQLデータベースに接続する
            try {
             $pdo = new PDO($dsn, $user, $password);
             // プリペアドステートメントのエミュレーションを無効にする
             $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
             // 例外がスローされる設定にする
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

             $pass = $_POST["id"];
             $name = $_POST["name"];
             $kenkou = $_POST["kenkou"];
             $hinanjo = $_POST["hinanjo"];

             $sql = "SELECT 避難所id FROM 避難所 WHERE 避難所名 = :hinanjo";
             $stm = $pdo->prepare($sql);
             $stm->bindValue(':hinanjo',$hinanjo,PDO::PARAM_STR);
             $stm->execute();
             $result = $stm->fetch(PDO::FETCH_ASSOC);
             $hinanjo = $result['避難所id'];
               
             //sql文
             $sql = "UPDATE アカウント SET id = :pass,name = :name,健康id = :kenkou,避難所id = :hinanjo WHERE mail = :mail AND id = :id";
             $stm = $pdo->prepare($sql);
             $stm->bindValue(':mail', $mail, PDO::PARAM_STR);
             $stm->bindValue(':id', $id, PDO::PARAM_STR);
             $stm->bindValue(':pass', $pass, PDO::PARAM_STR);
             $stm->bindValue(':name', $name, PDO::PARAM_STR);
             $stm->bindValue(':kenkou', $kenkou, PDO::PARAM_INT);
             $stm->bindValue(':hinanjo', $hinanjo, PDO::PARAM_INT);
             $stm->execute();

             $signupmessage = '更新完了しました。';

             $sql = "SELECT 状態名,避難所名 FROM 
                     ( (
                        アカウント JOIN 健康状態 ON アカウント.健康id = 健康状態.健康id
                        )RIGHT JOIN 避難所 ON アカウント.避難所id = 避難所.避難所id
                     ) 
                    WHERE mail = :mail AND id = :id";
               $stm = $pdo->prepare($sql);

             $stm->bindValue(':mail',$mail,PDO::PARAM_STR);
             $stm->bindValue(':id',$id,PDO::PARAM_STR);
             $stm->execute();

             $result = $stm->fetch(PDO::FETCH_ASSOC);

             $_SESSION["id"] = $pass;
             $_SESSION["name"] = $name;
             $_SESSION["状態名"] = $result["状態名"];
             $_SESSION["避難所名"] = $result["避難所名"];

             header("Location: ok.php");
            } catch (Exception $e) {
             echo '<span class="error">エラーがありました。</span><br>';
             echo $e->getMessage();
             exit();
            }
         }
      ?>
   </div>
   <form action = "index.php">
      <input type = "submit" value = "HOMEに戻る">
   </form>
</body>
</html>
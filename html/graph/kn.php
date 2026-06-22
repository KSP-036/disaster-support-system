<?php
   require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PDOでデータベースに接続する</title>
</head>
<body>
 <div>
     <?php
        $errormessage = "";
        $signupmessage = "";
        
        if(!isset($_POST['map'])) {
            echo "避難所が選択されていません。";
            
        } else {
            //MySQLデータベースに接続する
            try {
             $pdo = new PDO($dsn, $user, $password);
             // プリペアドステートメントのエミュレーションを無効にする
             $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
             // 例外がスローされる設定にする
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $hname = $_POST['map'];
             $man = $_POST["man"];
             $women = $_POST["women"];
             $kenkou = $_POST["kenkou"];
             $keisyou = $_POST["keisyou"];
             $juusyou = $_POST["juusyou"];
             $a = $_POST["a"];
             $b = $_POST["b"];
             $c = $_POST["c"];
             $d = $_POST["d"];
             $e = $_POST["e"];

             //sql文
             // 半角数字と全角文字の組み合わせが原因
             $sql = "UPDATE 避難所 SET 男性 = :man,女性 = :women,健康 = :kenkou,軽傷 = :keisyou,重傷 = :juusyou,二十代以下 = :a,三十代 = :b,四十代 = :c,五十代 = :d,六十代以上 = :e WHERE 避難所名 = :hname";
             $stm = $pdo->prepare($sql);
             $stm->bindValue(':man', $man, PDO::PARAM_INT);
             $stm->bindValue(':women', $women, PDO::PARAM_INT);
             $stm->bindValue(':kenkou', $kenkou, PDO::PARAM_INT);
             $stm->bindValue(':keisyou', $keisyou, PDO::PARAM_INT);
             $stm->bindValue(':juusyou', $juusyou, PDO::PARAM_INT);
             $stm->bindValue(':hname', $hname, PDO::PARAM_INT);
             $stm->bindValue(':a', $a, PDO::PARAM_INT);
             $stm->bindValue(':b', $b, PDO::PARAM_INT);
             $stm->bindValue(':c', $c, PDO::PARAM_INT);
             $stm->bindValue(':d', $d, PDO::PARAM_INT);
             $stm->bindValue(':e', $e, PDO::PARAM_INT);
             $stm->execute();

             $signupmessage = '更新完了しました。';

             echo "$signupmessage";
            } catch (Exception $e) {
             echo '<span class="error">エラーがありました。</span><br>';
             echo $e->getMessage();
             exit();
            }
        }
    ?>
   </div>
   <form action = "../home.php">
      <input type = "submit" value = "HOMEに戻る">
   </form>
</body>
</html>
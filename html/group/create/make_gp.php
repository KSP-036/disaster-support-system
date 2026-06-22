<?php
 require_once("../../db.php");
 $group_name = $_POST['name'];
 $a = $_POST[1];
 echo $group_name;
 try {
     $pdo = new PDO($dsn, $user, $password);
     // プリペアドステートメントのエミュレーションを無効にする
     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
     // 例外がスローされる設定にする
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT グループ(グループ名) VALUE(:group_name)";
     $stm = $pdo->prepare($sql);
     $stm->bindValue(':group_name',$group_name,PDO::PARAM_STR);
     $stm->execute();
    
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました。上</span><br>';
      echo $e->getMessage();
      exit();
    }
    $i = 1;
    $j = 1;
    while(!empty($_POST[$i])) {
        $menber[$j] = $_POST[$i];
        $kobayasi = $menber[$j];
        try {

            $sql = "SELECT mail FROM アカウント WHERE mail = :kobayasi";
            $stm = $pdo->prepare($sql);

            $stm->bindValue(':kobayasi',$kobayasi,PDO::PARAM_STR);
            $stm->execute();

            $result = $stm->fetch(PDO::FETCH_ASSOC);
            $sql = "UPDATE グループ SET グループメンバー$i = :kobayasi WHERE グループ名 = :group_name";
            $stm = $pdo->prepare($sql);
            $stm->bindValue(':kobayasi',$kobayasi,PDO::PARAM_STR);
            $stm->bindValue(':group_name',$group_name,PDO::PARAM_STR);
            $stm->execute();
            header('Location:crt_comp.php');
    

        } catch (Exception $e) {
            echo '<span class="error">エラーがありました。下</span><br>';
            echo $e->getMessage();
            exit();
        }
        $i++;
        $j++;
    }
    
?>

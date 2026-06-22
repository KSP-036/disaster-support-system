<?php
   
   session_start();
   $gobackURL = "log_inform.html";

   // データベースユーザ
   $user = 'testuser';
   $password = 'takuto0918';
   // 利用するデータベース
   $dbName = 'sotuken';
   // MySQLサーバ
   $host = 'localhost';
   // MySQLのDSN文字列
   $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
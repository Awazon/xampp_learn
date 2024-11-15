<?php
    $dsn      = 'mysql:dbname=mysql;host=localhost';
    $user     = 'root';
    $password = '';

    // DBへ接続
    try{
        $dbh = new PDO($dsn, $user, $password);
        print("接続成功");
        die();

    }catch(PDOException $e){
        print("接続失敗しました".$e->getMessage());
        die();
    }

    // 接続を閉じる
    $dbh = null;
?>
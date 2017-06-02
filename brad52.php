<?php
    if (!isset($_GET['a'])){
        echo 'F1';
        die();
    }

    include "sqlBrad.php";
    $pdo = new pdo($dsn, $user, $passwd, $opt);

    $account = $_GET['a'];
    $sql = "SELECT account FROM member WHERE account = ?";
    $stmt = $pdo->prepare($sql);    // statement SQL
    $stmt->execute([$account]);
    if ($stmt->rowCount()>0) {
        // account is exist
        echo 'F2';
    }else{
        // OK
        echo 'OK';
    }


<?php
    include "sqlBrad.php";
    session_start();

    $pdo = new pdo($dsn, $user, $passwd, $opt);
    if (!isset($_REQUEST['account']))
        header("Location: loginv2");

    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];

    $sql = "SELECT * FROM member WHERE account = ?";
    $stmt = $pdo->prepare($sql);    // statement SQL
    $stmt->execute([$account]);
    if ($stmt->rowCount()>0){
        $memberObj = $stmt->fetchObject();
        $dbPasswd = $memberObj->passwd;
        if (password_verify($passwd, $dbPasswd)){
            // OK
            $_SESSION['member'] = $memberObj;
            header("Location: mainv2.php");
        }else{
            // passwd not match
            header("Location: loginv2.php");
        }
    }else{
        // account not exist
        header("Location: loginv2.php");
    }






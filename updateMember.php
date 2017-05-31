<?php
    session_start();
    if (!isset($_SESSION['id'])) header("Location: brad38.php");

    $id = $_SESSION['id'];
    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql = "update member set account='{$account}',passwd='{$passwd}',realname='{$realname}' where id={$id}";

    $db = @new mysqli('127.0.0.1',
        'root','root','iii');
    $db->query($sql);
    header("Location: brad38.php");

<?php
include 'sqlBrad.php';
if (!isset($_REQUEST['account']))
    header("Location: addMemberV2.php");

$account = $_REQUEST['account'];
$passwd =
    password_hash(
        $_REQUEST['passwd'], PASSWORD_DEFAULT);
$sql = "INSERT INTO member (account,passwd,rname) VALUES (?,?,?)";


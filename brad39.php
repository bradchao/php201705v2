<?php
include 'sql.php';

$pdo = new pdo($dsn, $user, $passwd, $opt);

$account = "Peterv2;delete from member;";
$passwd = '123';
$realname = 'Andy Ho';

$sql = "insert into member (account,passwd,realname) values (?,?,?)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$account,$passwd,$realname]);

$pdo->prepare($sql)->execute([$account,$passwd,$realname]);
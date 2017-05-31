<?php
$host = '127.0.0.1';
$db = 'iii';
$user = 'root';
$passwd = 'root';
$driver = 'mysql';
$charset = 'utf8';

$dsn = "{$driver}:host={$host};dbname={$db};charset={$charset}";
$opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];
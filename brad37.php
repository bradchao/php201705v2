<?php
    // 1. Connect to MySQL Server
//    $db = @mysqli_connect(
//        "127.0.0.1", "root", "root",
//        "iii") or die("Server Busy");
//    if ($conn) echo 'OK';

    $link = mysql_connect('localhost', 'root', 'root');

    $db  = @new mysqli(
        '127.0.0.1',
        'root','root','iii');

    echo $db->error;
    // 3. query
    $sql = 'select * from member';
    $result = $db->query($sql);

    while ($row = $result->fetch_object()){
        echo "{$row->id} : {$row->account} : {$row->passwd}<br>";
    }


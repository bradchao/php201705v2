<?php
    $passwd1 = '123456';
    echo "{$passwd1}<br>";

    $hash1 = password_hash($passwd1, PASSWORD_DEFAULT);
    echo "{$hash1}<br>";

    $hash2 = password_hash($passwd1, PASSWORD_DEFAULT);
    echo "{$hash2}<br>";

    $passwd2 = '1234567';
    echo "{$passwd2}<br>";
    if (password_verify($passwd2, $hash1)){
        echo 'OK';
    }else{
        echo 'XX';
    }


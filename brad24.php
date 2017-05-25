<?php
    $fp = @fopen('./brad.txt','r');
    while ($line = fgets($fp)){
        $len = strlen($line);
        echo "{$len}:{$line}<br>";
    }
    fclose($fp);

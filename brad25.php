<?php
    $fp = fopen('./iii.txt', 'w+');
    fwrite($fp, "Hello, Brad");
    fclose($fp);
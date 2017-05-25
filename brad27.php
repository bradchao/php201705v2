<?php
    if (!isset($_GET['filename']))
        header("Location: brad26.php");

    $filename = $_GET['filename'];
    $cont = $_GET['cont'];

    $fp = fopen($filename, "w+");
    fwrite($fp, $cont);
    fclose($fp);

    header("Location: {$filename}");
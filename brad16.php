<?php
include 'bradapi.php';

$myLottery = createLottery();
foreach($myLottery as $lottery){
    echo "{$lottery}<br>";
}


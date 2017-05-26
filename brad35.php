<?php
    include 'bradapi.php';
    session_start();

    $memberObj = new Member('A123456789');
    $cartObj = new Cart($memberObj);

    $var1 = 10;
    $_SESSION['cart'] = $cartObj;
    $_SESSION['var1'] = $var1;

    $var1++;

    $cartObj->addItem('P001', rand(1,10));
    $cartObj->addItem('P002', rand(1,10));
    $list = $cartObj->getList();
    foreach($list as $pid => $qty){
        echo "{$pid} : {$qty}<br>";
    }
?>
<hr>
<a href="brad36.php">Next</a>

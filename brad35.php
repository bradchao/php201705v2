<?php
    include 'bradapi.php';

    $memberObj = new Member('A123456789');
    $cartObj = new Cart($memberObj);

    $cartObj->addItem('P001', 3);
    $cartObj->addItem('P002', 4);
    $list = $cartObj->getList();
    foreach($list as $pid => $qty){
        echo "{$pid} : {$qty}<br>";
    }


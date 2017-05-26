<?php
    include 'bradapi.php';

    if (isRightTWId('A123456789')==1){
//    if (TWID::checkId('A123456781')==1){
        $myId = new TWID('A123456789');
        echo $myId->getGender()?'Male':'Femal';
        $Id2 = new TWID('A123456789');
        $Id3 = new TWID('A123456789');
        $Id4 = new TWID('A123456789');
        echo TWID::$counter;
    }else{
        echo 'XX';
    }
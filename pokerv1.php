<?php
$poker = array();

for ($i=0; $i<10; $i++) $check[] = false;

for ($i=0; $i<10; $i++){
    // 檢查機制
    do{
        $isRepeat = false;
        $temp = rand(0,9);
        if (!$check[$temp]){
            $poker[] = $temp;
            $check[$temp] = true;
        }else{
            $isRepeat = true;
        }

    }while($isRepeat);

    echo $poker[$i] . '<br>';
}
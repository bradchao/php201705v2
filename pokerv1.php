<?php
$poker = array();
for ($i=0; $i<10; $i++){


    // 檢查機制
    do{
        $temp = rand(0,9);
        $isRepeat = false;
        for ($j=0; $j<$i; $j++){
            if ($poker[$j] == $temp){
                // 重複了
                $isRepeat = true;
                break;
            }
        }

    }while($isRepeat);

    $poker[] = $temp;
    echo $poker[$i] . '<br>';
}
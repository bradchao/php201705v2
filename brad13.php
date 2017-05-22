<?php
    $a = array(1,2,3,'value' => 4,5);
    foreach ($a as $key => $value){
        echo $key . ':' . $value . '<br>';
    }
    echo '<hr>';
    for ($i=0; $i<count($a); $i++){
        echo $i . ':' .$a[$i] . '<br>';
    }
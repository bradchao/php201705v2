<?php
$i=0;
for (test1();;test2()){
    echo $i++ . '<br>';
    if ($i>15) break;
}

function test1(){
    echo 'Brad<br>';
}
function test2(){
    echo '------<br>';
}
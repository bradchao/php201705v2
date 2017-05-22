<?php
$p = array(1 => 0,0,0,0,0,0);
for ($i=0; $i<1000000; $i++){
    $temp = rand(1,9);
    $p[$temp>=7?$temp-3:$temp]++;
}
for ($i=1; $i<=count($p); $i++){
    echo "point {$i} = {$p[$i]}<br>";
}

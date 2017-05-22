<?php
$sum = 0; $i=1; $n = 97;
while ($i<=$n){
    $sum += $i++;
}
echo "1 + 2 + ... + {$n} = {$sum}";
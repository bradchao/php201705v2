<?php
$a = array(1,2,3);
$b[] = $a;  // $b[0] ==> array(1,2,3);
$b[] = array(2,4,5,7);
echo count($b);
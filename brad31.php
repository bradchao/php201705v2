<?php
$img = imagecreatefromjpeg (
    "./upload/poke.jpg" );

$blue = imagecolorallocate(
    $img , 0 , 0 , 255 );
imagettftext (
    $img, 24 , 315 , 10 , 100 ,
    $blue , "./fonts/fireflysung.ttf" ,
    "資策會論壇專屬, 歡迎盜連" );

// 3
header('Content-Type: image/jpeg');
imagejpeg($img);

// 4
imagedestroy ( $img );
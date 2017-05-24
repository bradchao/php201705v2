<?php
    $upload = $_FILES['upload'];
    foreach ($upload['error'] as $index => $error){
        if ($error == 0){
            copy($upload['tmp_name'][$index],
                "./upload/{$upload['name'][$index]}");
        }
    }
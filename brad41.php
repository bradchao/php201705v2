<?php
    $json = file_get_contents(
        "http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
    $root = json_decode($json);
    foreach ($root as $row){
        echo "{$row->ID}:{$row->Name}<br>";
    }
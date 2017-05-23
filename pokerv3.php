<?php
    $poker = range(0,51);
    shuffle($poker);
//    foreach ($poker as $card){
//        echo $card . '<br>';
//    }
    echo '<hr>';
    // 發到四個玩家
    foreach ($poker as $i => $value){
        $player[$i%4][(int)($i/4)] = $value;
    }
    // show cards

?>
<table border="1" width="100%">
    <?php
        $suit = array("<font color='black' size='5'>&spades;</font>",
            "<font color='red' size='5'>&hearts;</font>",
            "<font color='red' size='5'>&diams;</font>",
            "<font color='black' size='5'>&clubs;</font>");
        $value = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach ($player as $sb){
            echo '<tr>';
            foreach ($sb as $card){
                echo "<td>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

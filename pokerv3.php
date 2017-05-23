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
        foreach ($player as $sb){
            echo '<tr>';
            foreach ($sb as $card){
                echo "<td>{$card}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

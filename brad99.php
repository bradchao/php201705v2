<table width="100%" border="1">
    <?php
        $start = 4; $col = 7; $line=5;
        for ($row=0; $row<$line; $row++){
            echo '<tr>';
            for ($j=$start; $j<$start+$col; $j++){
                $newj = $j + $row*$col;
                echo '<td>';
                for ($i=1; $i<=9; $i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>

</table>
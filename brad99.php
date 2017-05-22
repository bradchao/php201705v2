<table width="100%" border="1">
    <?php
        $start = 3; $col = 5; $line=4;
        for ($row=0; $row<$line; $row++){
            echo '<tr>';
            for ($j=$start; $j<$start+$col; $j++){
                $newj = $j + $row*$col;

                echo "<td bgcolor='" .
                    ((($j+$row)%2==0)?'yellow':'orange') . "'>";

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
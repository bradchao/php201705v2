<?php
    $data = file("Book1.csv");

?>
<table border="1" width="100%">
    <tr>
        <th>name</th>
        <th>f1</th>
        <th>f2</th>
        <th>f3</th>
    </tr>
    <?php
        foreach ($data as $line){
            $fileds = explode(',',$line);
            echo '<tr>';
            foreach ($fileds as $field){
                echo "<td>{$field}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

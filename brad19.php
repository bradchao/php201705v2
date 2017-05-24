<?php
    $dirname = ".";
    if (isset($_GET['dirname'])){
        $dirname = $_GET['dirname'];
    }
?>
<form>
    <input type="text" name="dirname" />
    <input type="submit" value="chdir" />
</form>
<hr>
<table border="1" width="100%">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
    </tr>
    <?php
        $fp = opendir($dirname);
        while ($file = readdir($fp)){
            echo '<tr>';
            echo "<td>{$file}</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo '</tr>';
        }
    ?>
</table>



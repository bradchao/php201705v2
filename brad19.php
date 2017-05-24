<?php
    date_default_timezone_set ("Asia/Taipei" );
    $dirname = ".";
    if (isset($_GET['dirname'])){
        $dirname = $_GET['dirname'];
        if (isset($_GET['filename'])){
            // delete
            $delfile = $_GET['filename'];
            unlink("{$dirname}/{$delfile}");
        }
    }
    $fp = @opendir($dirname) or exit('Server Down');
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
        while ($file = readdir($fp)){
            echo '<tr>';
            echo "<td>{$file}</td>";
            $type = '';
            if (is_dir("{$dirname}/{$file}")){
                $type = 'Dir';
            }else if (is_file("{$dirname}/{$file}")){
                $type = 'File';
            }
            echo "<td>{$type}</td>";
            echo "<td>" . filesize("{$dirname}/{$file}")."</td>";
            echo "<td>" . date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
            echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Del ?')\">Delete</a></td>";
            echo '</tr>';
        }
    ?>
</table>



<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $r = $x + $y;
    //echo "$x + $y = $r";
}
?>
<form>
    <input type="text" name="xx" id="x"/>
    +
    <input type="text" name="yy" id="y"/>
    <input type="submit" value="="/>
    <?php
        echo $r;
    ?>
</form>
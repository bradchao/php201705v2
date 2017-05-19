<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $r = $x + $y;
}
?>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>
    +
    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
        echo $r;
    ?>
</form>
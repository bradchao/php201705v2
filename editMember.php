<?php
    if (!isset($_GET['editid'])) header("Location: brad38.php");

    $editid = $_GET['editid'];
    $sql = "select * from member where id={$editid}";
    $db = @new mysqli('127.0.0.1',
        'root','root','iii');
    $rs = $db->query($sql);
    $editObj = $rs->fetch_object();

?>
<form>
<table>
    <tr>
        <th>Account</th>
        <td><input type="text" name="account"
                   value="<?php echo $editObj->account; ?>"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type="password" name="passwd"
                   value="<?php echo $editObj->passwd; ?>"></td>
    </tr>
    <tr>
        <th>Real Name</th>
        <td><input type="text" name="realname"
                   value="<?php echo $editObj->realname; ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="upddate"></td>
    </tr>
</table>
</form>
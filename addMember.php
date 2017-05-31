<?php
    if (isset($_GET['account'])){
        $account = $_GET['account'];
        $passwd = $_GET['passwd'];
        $realname = $_GET['realname'];
        $sql = "insert into member (account,passwd,realname) " .
            "values ('{$account}','{$passwd}','{$realname}')";
        $sql2 = "insert into member (account,passwd) values ('a1','b1');insert into member (account,passwd) values ('c1','d1');";
        $db = @new mysqli('127.0.0.1',
            'root','root','iii');
        $db->query($sql2);
        echo $db->error;
        //header("Location: brad38.php");
    }


?>
<form>
<table>
    <tr>
        <th>Account</th>
        <td><input type="text" name="account"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type="password" name="passwd"></td>
    </tr>
    <tr>
        <th>Real Name</th>
        <td><input type="text" name="realname"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="new"></td>
    </tr>
</table>
</form>
<?php
    include 'sql.php';


    if (isset($_POST['account'])){
        $pdo = new pdo($dsn, $user, $passwd, $opt);
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $sql = "select * from member where account=?";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$account]);
        if ($stmt->rowCount()>0){
            $memberObj = $stmt->fetchObject();
            echo $memberObj->id;
        }else {
            echo 'XX';
        }





    }




?>

<form method="post">
account: <input type="text" name="account"><br>
password: <input type="password" name="passwd"><br>
<input type="submit" value="login"><br>
</form>

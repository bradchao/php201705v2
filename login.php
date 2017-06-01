<?php
    include 'sql.php';
    session_start();

    if (isset($_POST['account'])){
        $pdo = new pdo($dsn, $user, $passwd, $opt);
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $sql = "select * from member where account=?";

        ($stmt = $pdo->prepare($sql))->execute([$account]);
        if ($stmt->rowCount()>0){
            $memberObj = $stmt->fetchObject();

            if (password_verify($passwd, $memberObj->passwd)){
                $_SESSION['member'] = $memberObj;
                header("Location: main.php");
            }else{
                echo 'X1';
            }

        }else {
            echo 'X0';
        }





    }




?>

<form method="post">
account: <input type="text" name="account"><br>
password: <input type="password" name="passwd"><br>
<input type="submit" value="login"><br>
</form>

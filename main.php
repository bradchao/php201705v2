<?php
include 'sql2.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: login.php");
$memberObj = $_SESSION['member'];

$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from food";
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Addr</th>
        <th>Memo</th>
    </tr>
    <?php
        while ($row = $stmt->fetchObject()){
            echo '<tr>';
            echo "<td>{$row->fid}</td>";
            echo "<td>{$row->fname}</td>";
            echo "<td>{$row->tel}</td>";
            echo "<td>{$row->addr}</td>";
            echo "<td>{$row->memo}</td>";
            echo '</tr>';
        }
    ?>
</table>
<hr>
<a href="logout.php">Logout</a>


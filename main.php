<?php
include 'sql.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: login.php");

$memberObj = $_SESSION['member'];



?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<a href="logout.php">Logout</a>


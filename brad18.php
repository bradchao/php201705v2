<?php
echo 'OK';
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$birthday = $_REQUEST['birthday'];
$area = $_REQUEST['area'];
$gender = $_REQUEST['gender'];
$like = $_REQUEST['like'];
echo $account . '<br>';
echo $passwd . '<br>';
echo $birthday . '<br>';
echo $area . '<br>';
echo $gender . '<br>';
foreach ($like as $v){
    echo "{$v}<br>";
}
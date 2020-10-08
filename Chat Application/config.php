<?php
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database="mychat";

$conn = mysqli_connect($db_host,$db_user,$db_pwd,$database);
if(!$conn)
die("can't Connect to Database");

?>
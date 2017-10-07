<?php 

$root     = "root";
$password = "";
$db_name  = "test";

$mysqli = mysqli_connect("localhost", $root, $password, $db_name);
print_r($mysqli);
?>


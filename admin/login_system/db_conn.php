<?php

$sname= "localhost:3307";
$unmae= "root";
$password = "";

$db_name = "events";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>
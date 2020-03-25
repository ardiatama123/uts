<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar_mamber";

$con = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
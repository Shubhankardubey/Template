<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ='mmdb';
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("connection refuse:". $conn->connect_error);
}
else
{
	//echo("connection sucesss");
}

?>

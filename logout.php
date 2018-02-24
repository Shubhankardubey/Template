<?php
// database interaction code
include('connection.php');  // this return $conn as the connection name
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];
// now we check this user exists or not ? if it exits then we login this user
session_destroy();
header ('location:index.php');
?>

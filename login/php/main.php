<?php
// database interaction code
include('connection.php');  // this return $conn as the connection name
session_start();
$username = $_POST['username'];
$password = $_POST['pass'];
// now we check this user exists or not ? if it exits then we login this user
$check_query = "SELECT * FROM users WHERE uname = '$username' AND pword = '$password' ";

// running the query in the database and store result in $result associative array
$result = $conn->query($check_query);

if($result->num_rows>0)
    {
        $row = $result->fetch_object();
        $_SESSION['username'] = $row->uname;
        // echo($_SESSION['username']);
        header ('location:../../index.php');
    }
else
{
   
    header ('location:../login.html');
}
?>

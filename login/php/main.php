<?php
// database interaction code
include('connection.php');  // this return $conn as the connection name
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];
// now we check this user exists or not ? if it exits then we login this user
$check_query = "SELECT * FROM users WHERE email = '$email' AND pword = '$password' ";

// running the query in the database and store result in $result associative array
$result = $conn->query($check_query);

if($result->num_rows>0)
    {
        $row = $result->fetch_object();
        $_SESSION['fullname'] = $row->fullname;
        $_SESSION['email'] = $row->email;
        // echo($_SESSION['username']);
        header ('location:../../index.php');
    }
else
{
   
    header ('location:../login.html');
}
?>

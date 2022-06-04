<?php
//creating connection with the database
    $conn = new mysqli('localhost:3307','root','','login');
//checking for errors
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();

// inputing log in details as variables
$names = $_POST['names'];
$password = $_POST['password'];
//sql statement
$sql=mysqli_query($conn, "SELECT * FROM sadmin WHERE names='$names' and password='$password'");

// Checks table row
$count=mysqli_num_rows($sql);
// If name=password we will have a count of one

if($count==1){
//taken to admin.html
$user = mysqli_fetch_assoc($sql);
$_SESSION['member_id'] = $user['member_id'];
header("location:admin.html");
}
//error statements.
else {
echo "Wrong Username or Password<br><br>Return to<b> <a href=\"adminlogin.html\">login</a></b>";
}

ob_end_flush();

?> 
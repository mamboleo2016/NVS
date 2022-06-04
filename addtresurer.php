<?php
    $conn = new mysqli('localhost:3307','root','','login');
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();

// stating login details as variables
$names = $_POST['names'];
$password = $_POST['password'];

$sql=mysqli_query($conn, "SELECT * FROM admins WHERE names='$names' and password='$password'");

// Checks table row
$count=mysqli_num_rows($sql);
// If names=password, count will be one

if($count==1){
// transfer to vote.html
$user = mysqli_fetch_assoc($sql);
$_SESSION['member_id'] = $user['member_id'];
header("location:emanager.html");
}
//error reporting
else {
echo "Wrong Username or Password<br><br>Return to<b> <a href=\"addsecgen.php\">login</a></b>";
}

ob_end_flush();

?> 

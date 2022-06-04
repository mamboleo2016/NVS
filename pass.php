<?php
$servername = "localhost:3307";
$username = "root";
$password = "password";
$dbname = "login";

// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $IDnumber= $_POST['IDnumber'];
    $check = $conn->query("SELECT IDnumber FROM admins WHERE IDnumber ='$IDnumber'");

if($check->num_rows==0) { echo 'id not valid <a href="emanager.html">back</a>'; }
else {
$IDnumber= $_POST['IDnumber'];
$password= $_POST['password'];
$sql = "UPDATE admins SET password='$password' WHERE IDnumber='$IDnumber'";

if ($conn->query($sql) === TRUE) {
  echo 'Record updated successfully<a href="addsecgen.php">log in </a> ';
} else {
  echo 'error updating records <a href="addsecgen.php">log in </a> ';
}
}
$conn->close();
?>

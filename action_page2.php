<?php
 $dt=$_POST['dt'];
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
 $voterID = $_POST['voterID'];
	$vchairman = $_POST['vchairman'];
$sql = "UPDATE western SET Vchairman='$vchairman' WHERE voterID='$voterID'";

if ($conn->query($sql) === TRUE) {
  echo 'your vice chairman vote has been cast <br><br><a href="home.php">log out</a> <br> <br><a href="vote sec general.php">next </a> ';
} else {
  echo 'your have already voted <br><br><a href="home.php">log out</a> <br> <br><a href="vote sec general.php">next </a> ';
}

$conn->close();
?>
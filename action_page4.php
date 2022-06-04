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
	$tresurers = $_POST['tresurers'];
$sql = "UPDATE western SET tresurer='$tresurers' WHERE voterID='$voterID'";

if ($conn->query($sql) === TRUE) {
  echo 'your tresurer vote has been cast <br><br>
  thank you for participating in this election to completion<br><br>
  <a href="home.php">log out </a> ';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
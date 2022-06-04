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
	$secgeneral = $_POST['secgeneral'];
$sql = "UPDATE western SET SecGeneral='$secgeneral' WHERE voterID='$voterID'";

if ($conn->query($sql) === TRUE) {
  echo 'your secretary general vote has been cast <br><br><a href="home.php">log out</a> <br> <br><a href="votetresurer.php">next </a> ';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
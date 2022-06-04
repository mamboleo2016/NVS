<?php

$tresurer = $_POST['tresurer'];


$conn = new mysqli('localhost:3307','root','','login');
$stmt = $conn->prepare("insert into chair(tresurer) values(?)");
$stmt->bind_param("s",$tresurer);
$execval = $stmt->execute();
echo $execval;
 header("location:vote.php");
echo 'you have voted for $value <br> <br> <a href="home.php">log out</a> <br>' ;
$stmt->close();
	

?>

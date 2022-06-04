<?php
//
    $voterID = $_POST['voterID'];
	$chairman = $_POST['chairman'];
    $dt=$_POST['dt'];
	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');
$check2 = $conn->query("SELECT date FROM registration WHERE date ='$dt'");

if ($check2->num_rows==0) {  echo 'come <a href="votechair.php"> back</a> on election day to vote'; }
else 
{
		$stmt = $conn->prepare("insert into western(voterID, chairman) values(?, ?)");
		$stmt->bind_param("ss",$voterID, $chairman);
		if ($execval = $stmt->execute()){
		echo $execval;
		echo 'Your chairman vote has been cast <br> <br> <a href="home.php">log out</a> <br> <br> <a href="votevchair.php">next</a> ' ;}
    else { echo 'already voted <br> <br> <a href="home.php">log out</a> <br> <br> <a href="votevchair.php">next</a> ' ;}
		$stmt->close();
		$conn->close();
}
    
?>
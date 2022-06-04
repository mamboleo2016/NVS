<?php
//
    
    $password = $_POST['password'];
	$date = $_POST['date'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');
$check = $conn->query("SELECT password FROM register WHERE password ='$password'");
if($check->num_rows==0) { echo "password not valid"; }
else{
    
		$stmt = $conn->prepare("insert into registration(password,date) values(?,?)");
		$stmt->bind_param("ds",$password, $date, );
		$execval = $stmt->execute();
		echo $execval;
		echo 'you have set a new date succesfully  <br><br> <a href="votedate.php">back<a>';
		$stmt->close();
		$conn->close();
	
}
?>
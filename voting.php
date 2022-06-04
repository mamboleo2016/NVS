<?php
//variables
	$names = $_POST['names'];
    $IDnumber = $_POST['IDnumber'];
	$county = $_POST['county'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
    $job = $_POST['job'];

	// creating a database connection
	$conn = new mysqli('localhost:3307','root','','login');
//checking the connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(names, IDnumber, county, gender, email, password, number, job) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissssis", $names, $IDnumber, $county, $gender, $email, $password, $number, $job);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        //closing statements
		$stmt->close();
		$conn->close();
	}
?>
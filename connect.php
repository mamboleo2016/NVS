<?php
//stating variables
	$names = $_POST['names'];
    $IDnumber = $_POST['IDnumber'];
	$region = $_POST['region'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
	$number = $_POST['number'];
    $job = $_POST['job'];

	// cheking database connetion
	$conn = new mysqli('localhost:3307','root','','login');
	$check = $conn->query("SELECT IDno FROM members WHERE IDno ='$IDnumber'");
if($check->num_rows==0) { echo 'id not valid <a href="test.html">back</a>'; }
	 else  
		($stmt = $conn->prepare("insert into register(names, IDnumber, region, gender, email, password, confirmpassword, number, job) values(?, ?, ?, ?, ?, ?, ?, ?, ?)"));
		$stmt->bind_param("sisssssis", $names, $IDnumber, $region, $gender, $email, $password, $confirmpassword, $number, $job);
		if ($execval = $stmt->execute())
{echo $execval;
		echo 'Registration successful...<br> <a href="login.html">log in</a>'; }
else { echo 'registration unsuccessful. already registered <br> <a href="test.php">back</a> ';
    
        //closing statement and connection
		$stmt->close();
		$conn->close();
	}
?>

 
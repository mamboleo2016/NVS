<?php
error_reporting(E_ALL ^ E_WARNING);
	// connecting to db
	$conn = new mysqli('localhost:3307','root','','login');
 $IDnumber= $_POST['IDnumber'];
    $check = $conn->query("SELECT IDnumber FROM members WHERE IDnumber ='$IDnumber'");

if($check->num_rows==0) { echo 'id not valid <a href="emanager.html">back</a>'; }
	 else 
      
    {
    $IDnumber= $_POST['IDnumber'];
	$names = $_POST['names'];
	$position = $_POST['position'];
		$stmt = $conn->prepare("insert into candidates (IDnumber, names, position) values(?, ?, ?)");
		$stmt->bind_param("iss",$IDnumber, $names, $position,);
		$execval = $stmt->execute();
		echo $execval;
		echo 'Registration successfully. <a href="emanager.html">back</a>';
		$stmt->close();
		$conn->close();
	}
?>



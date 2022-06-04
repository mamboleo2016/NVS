<?php
//variables
    $IDnumber = $_POST['IDnumber'];
	$names = $_POST['names'];
	

	// connecting to database
	$conn = new mysqli('localhost:3307','root','','login');
//checking connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //sql statements 
		$stmt = $conn->prepare("insert into admins(IDnumber, names ) values(?, ?)");
		$stmt->bind_param("is",$IDnumber, $names );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        header("location:admin.html");
        //closing statement and connection
		$stmt->close();
		$conn->close();
	}
?>
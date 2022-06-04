<?php
//
    $IDnumber = $_POST['IDnumber'];
	$names = $_POST['names'];
   
	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');

    
		$stmt = $conn->prepare("insert into members(IDnumber, names) values(?, ?)");
		$stmt->bind_param("is",$IDnumber, $names);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        header("location:member.html");
		$stmt->close();
		$conn->close();
	
?>
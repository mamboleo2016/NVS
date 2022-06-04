<?php
//
   
	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');

    
$conn->query("INSERT INTO votes SELECT * FROM western");
$result = $conn->query("INSERT INTO votes SELECT * FROM western");
echo ' reports generated <a href="home.php">HOME</a>';
		$conn->close();
	
  
?>
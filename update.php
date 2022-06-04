<?php
//
	$chairman = $_POST['chairman'];
    $Vchairman = $_POST['vchairman'];
	$SecGeneral = $_POST['SecGeneral'];
	$tresurer = $_POST['tresurer'];
	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');

 {
    
		$stmt = $conn->prepare("insert into casts( chairman, Vchairman, SecGeneral, tresurer) values( ?, ?, ?, ?)");
		$stmt->bind_param("ssss", $chairman, $Vchairman, $SecGeneral, $tresurer);
		$execval = $stmt->execute();
		echo $execval;
		echo 'update succsesfull <a href="updateballot.php">BACK</a>';
		$stmt->close();
		$conn->close();
	
    }
?>
<?php
//variables
$name = $_POST['name'];
$IDnumber = $_POST['IDnumber'];
$county= $_POST['county'];
$sex = $_POST['sex'];
$phonenumber = $_POST['phonenumber'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];
     //connecting to database
     $conn = new mysqli('localhost:3307','root','','login');
//checking connection
     if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
    }else{
         $stmt = $conn->prepare
             ("insert into registration (name,IDnumber,county,sex,phonenumber,occupation,email,psw,psw_repeat)values(?,?,?,?,?,?,?,?,?)");
         $stmt->bind_param("sississss",$name, $IDnumber, $county, $sex , $phonenumber, $occupation, $email, $psw, $psw_repeat);
         $execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
         //closing statement and connection
		$stmt->close();
		$conn->close();
     }

?>
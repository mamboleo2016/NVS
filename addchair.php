<?php

// php select option value from database

$hostname = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "login";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "INSERT INTO casts VALUES ('Steve Rodgers', 'Roney Odero', 'John Legend', 'Nick Canon'),
('Solja Boy', 'Bia Bia', 'Loki Laufeyson', 'Tony Stark'), ('Bruce Banner','Bruce Wayne','Ciara Ciara', 'Timothy Chalamet')";
;

if ($connect->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $connect->error;
}
 header("location:emanager.html");
$connect->close();
?>

?>


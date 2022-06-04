<?php

// php select option value from database

$hostname = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "login";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "DELETE FROM admin";

if ($connect->query($query) === TRUE) {
  echo "records deleted";
} else {
  echo "Error: " . $query . "<br>" . $connect->error;
}
header("location:admin.html");
$connect->close();
?>



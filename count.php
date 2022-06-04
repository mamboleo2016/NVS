<?php
//connecting to db
$user = 'root';
$password = '';
$database = 'login';
$servername='localhost:3307';
$mysqli = new mysqli('localhost:3307','root','','login');
	if($mysqli->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
//statements
$sql = "SELECT * FROM western ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
	<title>NVS SYSTEM</title>
    <link rel="stylesheet" href="login.css">
  <meta charset="utf-8">
  <meta name="viewport">
    <nav class="topnav">
        <img src="logos.jpg" alt="NVSLOGO" width="60" height="50" style="float: left">
      <ul>
           <a class="active" href="home.php"> Home</a>
        <a href="logIn.php">  LogIn</a>
      <a href="test.html"> Register</a>
        <a href="adminlogin.html">Login(ADMIN)</a>
          </ul>
        
</nav>
    <style>
		table {
			margin:  auto;
			font-size: large;
			border: 1px solid blueviolet;
            border-radius: 0px;
            width: 90%;
		}

		h1 {
			text-align: center;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans';
		}

		td {
			background-color: white;
			border: 1px solid blueviolet;
            
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid blueviolet;
            border-radius: 0px;
			padding: 10px;
			text-align: center;
            
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>vote count</h1>
		
		<table>
			<tr>
				<th>chairman</th>
				<th>vice chairman</th>
				<th>secretary general</th>
				<th>tresurer</th>
			</tr>
            
			<!-- fetching data from rows-->
			<?php // the while loops till the end
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--fetching data-->
				<td><?php echo $rows['chairman'];?></td>
				<td><?php echo $rows['Vchairman'];?></td>
				<td><?php echo $rows['SecGeneral'];?></td>
				<td><?php echo $rows['tresurer'];?></td>
               
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>


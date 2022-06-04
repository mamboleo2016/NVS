<?php
//creating a db connection
$user = 'root';
$password = '';
$database = 'login';
$servername='localhost:3307';
$mysqli = new mysqli('localhost:3307','root','','login');
//checking connnection
	if($mysqli->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
//statements
$sql = "SELECT * FROM admins ";
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
        <img src="logos.jpg" alt="NVSLOGO" width="50" height="50" style="float: left">
      <ul>
           <a class="active" href="home.php"> Home</a>
        <a href="logIn.html">  LogIn</a>
      <a href="test.html"> Register</a>
        <a href="adminlogin.html"> Login(ADMIN)</a>
          </ul>
        
</nav>
    <style>
		table {
			margin:  auto;
			font-size: large;
			border: 1px solid blueviolet;
            border-radius: 5px;
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
            border-radius: 5px;
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
		<h1>Admins</h1>
		<table>
			<tr>
				
				<th>names</th>
				<th>region</th>
				
          
			</tr>
            
			<!-- fetching data from rows-->
			<?php // looping till the end
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--fetching data-->
				<td><?php echo $rows['names'];?></td>
				<td><?php echo $rows['region'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

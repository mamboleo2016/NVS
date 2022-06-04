<?php
//conneccting to db
$user = 'root';
$password = '';
$database = 'login';
$servername='localhost:3307';
$mysqli = new mysqli($servername, $user,
				$password, $database);
//checking connection
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = "SELECT * FROM candidates ORDER By position ";
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
          
           <a class="active" href="home.php">Home</a>
     
          </ul>
       
        
</nav>
    <style>
		table {
            width: 100%;
			margin:  auto;
			font-size: large;
			border: 1px solid blueviolet;
            border-radius: 5px;
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
		<h1>candidates</h1>
      
		<table>
			<tr>
                
				<th>names</th>
				<th>Position</th>
			</tr>
            
			<!-- fetching data from rows-->
			<?php // loop statement
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--fetching data-->
				<td><?php echo $rows['names'];?></td>
				<td><?php echo $rows['position'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

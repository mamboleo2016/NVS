<?php
//variables and creating a db connection
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
//statements
$sql = "SELECT * FROM register ORDER by region";
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
        
          </ul>
        
</nav>
	<!-- style css -->
	<style>
		table {
			margin: 0 auto;
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
			background-color: silver;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid blueviolet;
			padding: 10px;
			text-align: center;
            border-radius: 5px;
		}

		td {
			font-weight: lighter;
		}
        .topnav ol {
            float: right;
        }
	</style>
</head>

<body>
	<section>
		<h1>Registered Voters</h1>
		<table>
			<tr>
               
				<th>NAMES</th>
				<th>REGION</th>
                <th>GENDER</th>
			</tr>
			<!-- fetching data from rows-->
			<?php // looping till end of data
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--fetching data-->
				<td><?php echo $rows['names'];?></td>
				<td><?php echo $rows['region'];?></td>
                <td><?php echo $rows['gender'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

<?php
$user = 'root';
$password = '';
$database = 'login';
$servername='localhost:3307';
$mysqli = new mysqli('localhost:3307','root','','login');
	if($mysqli->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
$list = "";
$list2 = "";
$num = 0;
$sql = "SELECT chairman,Vchairman, count(chairman) AS amount FROM votes GROUP BY chairman ORDER BY amount DESC LIMIT 12";
$query = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli) );
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
			border: 1px solid white;
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
    <div class="div8">
     <ul> <center>
       <a href="summary.php">chairman </a>
     <a href="vchairman.php">vice chairman </a>
     <a href="secgen.php">secretary general </a>
       <a href="tresurer.php">tresurer</a>
           </center> </ul>
    </div>
	<section>
		<h1>chairman preliminary results</h1>
		<table>
			<tr>
                <th>candidates</th>
				<th>Total votes cast</th>
			</tr>
			<!-- fetching data from rows-->
			<?php // looping till end of data
				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
				{
			?>
			<tr>
				<!--fetching data-->
                <td><?php echo $row['chairman'];?></td>
				<td><?php echo $row['amount'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

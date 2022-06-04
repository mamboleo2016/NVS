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
$sql = "SELECT   `president`
             COUNT(president) AS `value_occurrence` 
    FROM     `western`
    GROUP BY `president`
    ORDER BY `value_occurrence` DESC
    LIMIT    1"; 
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
	<title>NVS SYSTEM</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
  <meta charset="utf-8">
  <meta name="viewport">
    <nav class="topnav">
        <img src="logos.jpg" alt="NVSLOGO" width="50" height="50" style="float: left">
      <ul>
           <a class="active" href="home.php"><i class="fas fa-house-user"></i> Home</a>
        <a href="logIn.html"> <i class=' far fa-user-circle'></i> LogIn</a>
      <a href="test.html"><i class="far fa-list-alt"></i> Register</a>
        <a href="adminlogin.html"><i class="fas fa-sign-in-alt"></i> Login(ADMIN)</a>
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
		<h1>vote count</h1>
		<table>
			<tr>

				<th>president</th>
			</tr>
            
			<!-- fetching data-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--fetching dta from each row of every column-->
				<td><?php echo $rows['president'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

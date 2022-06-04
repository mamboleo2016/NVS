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
$sql = "SELECT chairman, count(chairman) AS amount FROM votes GROUP BY chairman ORDER BY amount DESC LIMIT 1 ";
$sql4 =  "SELECT tresurer, count(tresurer) AS amount FROM votes GROUP BY tresurer ORDER BY amount DESC LIMIT 1";
$sql2 = "SELECT vchairman, count(vchairman) AS amount FROM votes GROUP BY vchairman ORDER BY amount DESC LIMIT 1 ";
$sql3 = "SELECT SecGeneral, count(SecGeneral) AS amount FROM votes GROUP BY SecGeneral ORDER BY amount DESC LIMIT 1 ";
$query = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli) );
$query2 = mysqli_query($mysqli, $sql2) or die( mysqli_error($mysqli) );
$query3 = mysqli_query($mysqli, $sql3) or die( mysqli_error($mysqli) );
$query4 = mysqli_query($mysqli, $sql4) or die( mysqli_error($mysqli) );

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NCC SYSTEM</title>
    <link rel="stylesheet" href="login.css">
  <meta charset="utf-8">
  <meta name="viewport">
   
    <nav class="topnav">
  <img src="logos.jpg" alt="NVSLOGO" width="60" height="50" style="float: left">
      <ul>
           <a class="active" href="home.php"> Home</a>
        <a href="logIn.html"> LogIn</a>
      <a href="test.php"> Register</a>
         <a href="adminlogin.html"> Login(ADMIN)</a>
          <a href="votingprocedure.html"> E-RULES</a>
          </ul>
</nav>
    <style>
		table {
			margin: 0px auto;
			font-size: large;
			border: 1px solid blueviolet;
            background-color: white;
            float: inherit;
            width: 700px;
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
			padding: 5px;
			text-align: center;
            color: aqua:
            
		}

		td {
			font-weight: lighter;
		}
        
	</style>
</head>

    <div class="div3" >
        <body class="boddy">
  <h2 style="font-size:40px" style="color: white" ><center>THE NATIONAL CEREALS COOPERATIVE ELECTIONS</center></h2>
             <p><i><center>providing efficient means for registering and voting in the cooperative general election </center></i></p>
         <div class="div8">
     <ul> <center>
       <a href="summary.php">chairman </a>
     <a href="vchairman.php">vice chairman </a>
     <a href="secgen.php">secretary general </a>
       <a href="tresurer.php">tresurer</a>
           </center> </ul>
    </div>
        
         <section>
    <div class="div4">
      <h1>Important links</h1>
    <ul>
      <li><a href="aboutus.html">about</a></li>
      <li><a href="howtovote.html">how to vote</a></li>
      <li><a href="count.php">votes</a></li>
        <li><a href="voters.php">voters</a></li>
         <li><a href="Registration.php">candidates</a></li>
           <li><a href="addsecgen.php">emanager Login</a></li>
        
        
    </ul>
   </div>
  
      <div class="div5">
        
    <h1 style="color:white;"><center><?php echo date('Y') ?> Election Winners</center></h1>
        
 <center>  <table>
			<tr>
				<th>CHAIRMAN </th>
			
			</tr>
            <?php // loop statement
				while($rows = mysqli_fetch_array($query, MYSQLI_ASSOC))
				{
			?>
			<tr>
				<!--fetch data-->

                <td><?php echo $rows['chairman'];?></td>
                
			</tr>
			<?php
                }
			?>
		</table><br>
          
           <table>
			<tr>
			<th>VICE CHAIRMAN </th>
			</tr>
            <?php // loop to the end
				while($rows = mysqli_fetch_array($query2, MYSQLI_ASSOC))
				{
			?>
			<tr>
				<!--fetch data-->

                <td><?php echo $rows['vchairman'];?></td>
                
			</tr>
			<?php
				}
			?>
		</table> <br>
           <table>
			<tr>
				<th>SECRETARY GENERAL</th>
                
			</tr>
            <?php // loop to the end
				while($rows = mysqli_fetch_array($query3, MYSQLI_ASSOC))
				{
			?>
			<tr>
				<!--find data-->

                <td><?php echo $rows['SecGeneral'];?></td>
                
			</tr>
			<?php
				}
			?>
		</table><br>
           <table>
			<tr>
				<th>TRESURER</th>
        
			</tr>
            <?php // loop to the end
				while($rows = mysqli_fetch_array($query4, MYSQLI_ASSOC))
				{
			?>
			<tr>
				<!--find data-->

                <td><?php echo $rows['tresurer'];?></td>
                
			</tr>
			<?php
				}
			?>
		</table></center>
              
          </div>
      </section>
            
            
            </body>
        <footer>
                <p>PROVERBS 10:9 (NIV)
                    whoever walks in integrity walks securely, but whoever takes crooked paths will be found out
                   </p>
        </footer>
    </div>
 

   
</html>

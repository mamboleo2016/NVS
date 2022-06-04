<?php
session_start();
$hostname = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "login";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `casts`";

$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);
$result3 = mysqli_query($connect, $query);
$result4 = mysqli_query($connect, $query);

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


</head>
<body>
    
    
     
    <div>
        <h1><center><b> TRESURER BALLOT </b></center></h1>
            <form action="action_page4.php" method="post">
                <label for="dt">Date: </label>
        <input readonly="true" name="dt" id="dt" type="date" value ="<?php echo date('Y-m-d') ?>" min="2021-07-07" />
                <label for="voterID">voters Name:</label>
                <input readonly="true" type="text" id="voterID" name="voterID" value=" <?php echo $_SESSION['member_id'];?> " /><br>
               
                  <label for="tresurers">Tresurer:</label> <br><br>
    
                <?php while($row1 = mysqli_fetch_array($result4)):;?>
               <input type="radio"  id="tresurers" name="tresurers"  style="width:98%"     value="<?php echo $row1[7];?>"/> 
                <img src="<?php echo $row1[8];?>" width="40" height="40">  <?php echo $row1[7];?> 
            <?php endwhile;?>
                    <br>
                  
             <center> <button type="submit"  value="Log In"  id="submit">
      <i class="fas fa-vote-yea"> VOTE</i>
                  </button></center>
             <br>
            </form>
            


       </div>
      
    </body>
</html>
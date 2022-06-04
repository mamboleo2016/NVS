<?php
session_start();
$hostname = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "login";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `chair`";

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
       <p id="demo"></p>
        <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
    
        <h1><center><b> vote </b></center></h1>
            <form action="action_page.php" method="post">
                <label for="dt">Date: </label>
        <input readonly="true" name="dt" id="dt" type="date" value ="<?php echo date('Y-m-d') ?>" min="2021-07-07" />
                <label for="voterID">voters Name:</label>
                <input readonly="true" type="text" id="voterID" name="voterID" value=" <?php echo $_SESSION['member_id'];?> " /><br>
                <label for="chairman">Chairman:</label><br>
                <select  id="chairman" name="chairman"  required style="width:98%" size="4"  position:relative><br>
                     <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?><?php echo $row1[2];?></option>

            <?php endwhile;?>
                    </select><br>
                  <label for="Vchairman">Vice Chairman:</label>
    
                <?php while($row1 = mysqli_fetch_array($result2)):;?>
               <input type="radio"  id="Vchairman" name="Vchairman"  required style="width:98%" size="4"  position:relative  value="<?php echo $row1[2];?>"/> <img src="<?php echo $row1[1];?>" width="500" height="600"><?php echo $row1[1];?>
            <?php endwhile;?>
                    <br>
                  <label for="SecGeneral"> Secretary General:</label><br>
                  <select radio  id="SecGeneral" name="SecGeneral"  required style="width:98%" size="4"  position:relative><br>
                     <?php while($row1 = mysqli_fetch_array($result3)):;?>

            <option value="<?php echo $row1[1];?>"><img src="<?php echo $row1[1];?>" width="50" height="50"></option>

            <?php endwhile;?>
                    </select><br>
      
                 <label for="tresurer">Tresurer:</label><br>
                <select  id="tresurer" name="tresurer"  required style="width:98%" size="4"  position:relative><br>
                     <?php while($row1 = mysqli_fetch_array($result4)):;?>

            <option value="<?php echo $row1[4];?>"><?php echo $row1[4];?></option>

            <?php endwhile;?>
                    </select><br><br>
             <center> <button type="submit"  value="Log In"  id="submit">
      <i class="fas fa-vote-yea"> VOTE</i>
                  </button></center>
             <br>
            </form>
            


       </div>
      
    </body>
</html>
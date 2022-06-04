<?php
$user = 'root';
$password = '';
$database = 'login';
$servername='localhost:3307';
$mysqli = new mysqli('localhost:3307','root','','login');
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
          </ul>
        
</nav>
</head>
    <body> 
        <center><h1>Election Manager Tab </h1></center>
        <div class="div8">
           <ul> <center>
       <a href="votedate.php">dates</a>
     <a href="emanager.html">candidates</a>
               <a href="Registration.php">list</a>
               <a href="updateballot.php">ballot</a>
           </center> </ul> </div>
        <div>
<h1>set election day</h1>
        <form action="date.php" method="post">
            <label for="password">password: </label>
        <input name="password" id="password" type="text" size="50px" required/>
            <label for="date">Date: </label>
        <input name="date" id="date" type="date" size="50px" min="<?= date('Y-m-d'); ?>"  required/> <br><br>
            
         <center>   <button type="submit"  value="Log In" name="log In" id="submit">submit</button> </center>
        
        
        </form>  
            </div>
       
    </body>
</html>

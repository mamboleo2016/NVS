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
    <script>
     function checknull() {
            var x = document.forms["loginform2"]["names"].value;
            var z = document.forms["loginform2"]["password"].value;
            
  if (x == "" || x == null) {
    alert("names must be filled out");
    return false;
  } 
            else if (z == "" || z == null) {
                alert("password must be filled out");
      return false;
            }
           
}
    </script>
<body>
    
     <h1><center><b>Manager Login Form</b></center></h1>
    <div>
        <p><a href="setpass.html">setpassword</a></p>
          <form name="loginform2" action="addtresurer.php" method="post" onsubmit="return checknull()">
               <label for="names">Names:</label><br><br>
                <input type="text" id="names" name="names" size="153px"placeholder="enter your names"/><br><br>
                  <label for="password">Password:</label><br><br>
                <input type="password" id="password" name="password" size="153px"placeholder="enter your password" /> <br> <br>
               <label for="login">login</label>
        <button type="submit"  value="Log In" name="log In" id="submit">
       Log In
                  </button><br><br>
              
     <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
</form>
          </div>
    </body>
</html>
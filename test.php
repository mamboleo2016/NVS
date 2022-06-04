<?php
ob_start();
session_start();
error_reporting(E_ALL ^ E_WARNING);
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
  <img src="logos.jpg" alt="NVSLOGO" width="60" height="50" style="float: left">
      <ul>
           <a class="active" href="home.php"> Home</a>
     
          </ul>
        <ol>
        
        </ol>
</nav>
</head>
    <script> 
        function numbers(IDnumber) 
        {
            var regEx =/^-?[0-9]+$/;
            if(IDnumber.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("numbers only");
                return false;
            }
        }
        function emailcheck(email) 
        {
            var regEx =/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
            if(email.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("not valid email");
                return false;
            }
        }
function matchPassword() {  
  var pass = document.getElementById("password").value;  
  var cpass = document.getElementById("confirmpassword").value;  
  if(pass!= cpass)  
  {   
     alert("Pass does not match.");
            return false;
        }
        return true;
    }
        function checknull() {
            var x = document.forms["registration"]["gender"].value;
            var z = document.forms["registration"]["password"].value;
            var y = document.forms["registration"]["job"].value;
             var a = document.forms["registration"]["region"].value;
  if (x == "" || x == null) {
    alert("gender must be selected");
    return false;
  } else if (y == "" || y == null){
      alert("employment must be filled out");
      return false;
  }
           else if(z.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
            else if (a == "" || a == null) {
                alert("region must be selected");
      return false;
            }
}
</script> 
<body>
        <div>
            <h1><center>Registration Form</center> </h1>
            <form name="search" action="search.php"  method="post">
                 <label for="IDnumber">search IDnumber?:</label>
                <input type="int"  id="IDnumber" name="IDnumber"size="150px" placeholder="enter your IDnumber" title="numbers only and right length" onclick="numbers(document.search.IDnumber)" /> <br><br>
                <button type="submit"  value="submit" name="submit" id="submit">search</button> <br>
            </form> <br>
    </div>
    <div>
            <form name="registration" action="connect.php"  method="post" onsubmit="return checknull()">
                <label for="names">Names:</label>
                <input readonly="true" type="text"  id="names" name="names"size="150px" title="name space name format needed" value=" <?php echo $_SESSION['member_id'];?>" /><br>
                <label for="IDnumber">IDnumber:</label>
                 <input readonly="true" type="int"  id="IDnumber" name="IDnumber"size="150px" title="name space name format needed" value=" <?php echo $_SESSION['member_ids'];?> "/><br>
                <label for="region">Region:</label><br>
                
                <select  type="text"   id="region" name="region"  style="width:99%" size="4"  position:relative > <br><br>
                    <option>western</option>
                     <option>eastern</option>
                     <option>central</option>
                     <option>nyanza</option>
                     <option>coast</option>
                     <option>rift valley</option>
                     <option>north eastern</option>
                     <option>metropolitan</option>
                    </select><br> <br>
                  
                <label for="gender">Gender:</label>
                  <label for="male" >
                      <input type="radio" name="gender" value="m" id="gender"/>Male</label>
                  <label for="female" >
                      <input type="radio" name="gender" value="f" id="gender"/>Female</label>
                  <label for="others" >
                      <input  type="radio"  name="gender"  value="o" id="gender"/>Others</label><br><br>
                <label for="email">Email:</label>
                <input readonly="true" type="text"   id="email" name="email" size="150px"placeholder="enter your email address" value=" <?php echo $_SESSION['member_idss'];?> " onclick="emailcheck(document.registration.email)"/><br>
                <label for="password">Password:</label>
                <input type="password"  id="password" name="password" size="150px"placeholder="enter your password "  /><br>
                 <label for="confirmpassword"> confirm Password:</label>
                <input type="password"  id="confirmpassword" name="confirmpassword"size="150px"placeholder="enter your password " maxlength="10" onclick="matchPassword()" /><br>
                <label for="number">Phone Number:</label>
                <input readonly="true" type="int"  id="number" name="number" size="150px"placeholder="enter your phonenumber" title="numbers only and required length"value=" <?php echo $_SESSION['member_idsss'];?> " /><br>
                <label for="job">Employment:</label>
                <input type="text"   id="job"  name="job" size="150px"placeholder="enter your job name " /><br><br>
              <button type="submit"  value="Log In" name="log In" id="submit">
        Register
                  </button><br>
                <br>
                <input type="reset" value="Reset"><br>
            <p>Already registerd? <a href="logIn.html">Log in</a>.</p>
            </form>
            
        </div>

  </body>
</html>

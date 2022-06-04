
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
    <script> 
        function chair() 
        {
            var regEx =/[a-zA-Z]+[ ][a-zA-Z]+/;
            if(chairman.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("name space name format only");
                return false;
            } 
        }
         function vchair() 
        {
            var regEx =/[a-zA-Z]+[ ][a-zA-Z]+/;
            if(vchairman.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("name space name format only");
                return false;
            } 
        }
         function secgen() 
        {
            var regEx =/[a-zA-Z]+[ ][a-zA-Z]+/;
            if(SecGeneral.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("name space name format only");
                return false;
            } 
        }
         function tresurers() 
        {
            var regEx =/[a-zA-Z]+[ ][a-zA-Z]+/;
            if(tresurer.value.match(regEx))
                {
                    return true;
                }
            else {
                alert("name space name format only");
                return false;
            } 
        }
    </script>

<body>
    <center><h1>Election Manager Tab </h1></center>
         <div class="div8">
           <ul> <center>
       <a href="votedate.php">dates</a>
     <a href="emanager.html">candidates</a>
               <a href="Registration.php">list</a>
               <a href="updateballot.php">ballot</a>
           </center> </ul> </div>

    <h1>Update ballot paper</h1>
	 <form name="update" action="update.php" method="post">
                
                <label for="chairman"><B>CHAIRMAN</B></label><br>
                <input type="text" id="chairman" name="chairman"size="180" onclick="return chair()"  /><br><br>
                <label for="vchairman"><B>VICE CHAIRMAN</B></label><br>
                <input  type="text"  id="vchairman" name="vchairman"size="180"  onclick="return vchair()" /><br><br>
                <label for="SecGeneral"><B>SECRETARY GENERAL</B></label><br>
                <input  type="text"  id="SecGeneral" name="SecGeneral"size="180"onclick="return secgen()"   /><br><br>
                <label for="tresurer"><B>TRESURER</B></label><br>
                <input  type="text"  id="tresurer" name="tresurer"size="180" onclick="return tresurers()" /><br><br>
                 <button type="submit"  value="submit" name="log In" id="submit">
                     
        Register
                  </button><br>
            </form>
        
</body>

</html>

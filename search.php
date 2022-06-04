<?php
    $conn = new mysqli('localhost:3307','root','','login');
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();

// stating login details as variables
$IDnumber = $_POST['IDnumber'];


$sql=mysqli_query($conn, "SELECT * from members where IDno='$IDnumber'");

// Checks table row
$count=mysqli_num_rows($sql);
// If names=password, count will be one

if($count==1){
// transfer to vote.html
$user = mysqli_fetch_assoc($sql);
$_SESSION['member_id'] = $user['Names'];
    $_SESSION['member_ids'] = $user['IDno'];
     $_SESSION['member_idss'] = $user['email'];
     $_SESSION['member_idsss'] = $user['cell'];
header("location:test.php");
    
}
//error reporting
else {
echo "id number could not be found<br><br>Return to<b> <a href=\"test.php\">back
</a></b>";
}

ob_end_flush();

?> 

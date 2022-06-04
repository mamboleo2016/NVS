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
$sql = "SELECT chairman,Vchairman, count(chairman) AS amount FROM western GROUP BY chairman ORDER BY amount DESC LIMIT 12";
$query = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli) );
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
    $num++;
    $country = $row["chairman"];
    $amount = $row["amount"];
    $vchair = $row["Vchairman"];
    $list .= $num.') '.$country.' - <b>'.$amount.'</b> people<br>' ;
    $list2 .= $num.') '.$vchair.' - <b>'.$amount.'</b> people<br>' ;
}
mysqli_close($mysqli);
echo $list;
echo $list2;
?>
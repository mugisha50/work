<?php
session_start();
$message="";
if(count($_POST)>0) {
$con = mysql_connect("localhost","root","");
mysql_select_db("kev",$con);
$result = mysql_query("SELECT * FROM col WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row[user_name];
} else {
$message = "Your UserName and password are False!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:wpg.php");
}
?>




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





<html>
<head>


<style type="text/css">
.auto-style2 {
	color: #FFCC00;
}
.auto-style3 {
	color: #FFCC00;
	font-size: large;
}
.auto-style5 {
	color: #FFCC00;
	font-size: medium;
}
</style>



<body>

<h1 align="center" class="auto-style2">REGISTER FORM</h1>

<p>&nbsp;</p>
<p>&nbsp;</p>

<form id="" name="" method="post" action="connection.php">
<table width="380" border="1" align="center" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><h1 align="center" class="auto-style3">WELCOME USER</h1></td>
</tr>

<tr>
<td width="141" class="auto-style5">First Name</td>
<td colspan="2"> <label for="FirstName"></label>
<input type="text" width="200" size="33" name="FirstName" id="" required="required" >
</td>
</tr>


<tr>
<td width="141" class="auto-style5">Second Name</td>
<td colspan="2"> <label for="SecondName"></label>
<input type="text" width="200" size="33"name="SecondName" id="" required="required" >
</td>
</tr>




<tr>
<td>&nbsp;</td>
<td width="100">
<input type="submit" name="button" id="button" value="REGISTER" style="width: 98px"></td>
<td width="100">
<input type="reset" name="reset" id="reset" value="RESET" style="width: 90px"></td>


</td>
</tr>



</body>
</head>

</html>

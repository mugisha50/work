<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="../project-master/styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center"><?php echo $_SESSION["user_name"]; ?> You Have Successfully logged In</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["user_name"]) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body>

</html>
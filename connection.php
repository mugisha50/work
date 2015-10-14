<?php
$servername="localhost";
$username="root";
$password="";
$databasename="kev";
$connect=mysql_connect($servername,$username,$password)or die("Cannot connect to the Server");
$select_db=mysql_select_db($databasename)or die("Cannot connect to the Database");;

?>

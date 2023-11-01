<?php
$host = "localhost";
$user = "root";
$pass = "";
$con = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db("cakedb",$con);
?>
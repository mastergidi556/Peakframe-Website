<?php
$db_con = mysqli_connect("localhost","root","")or die("cant connect to database");

//$db_con = mysqli_connect("localhost","mastergidi","okiki556")or die("cant connect to database");

mysqli_select_db($db_con,"peakframe")or die("cant find database");
?>

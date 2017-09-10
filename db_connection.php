<?php
	$user="root";
	$server="localhost";
<<<<<<< HEAD
	$password="";
=======
	$password="gandako";
>>>>>>> 7c2a4c0313f3a26b2cc9ad7caad7e6fa2949006d
	$database="hackasight";
	$conn=new mysqli($server, $user, $password, $database);
	$sql="CREATE DATABASE IF NOT EXISTS hackasight";
	$conn->query($sql);
?>
<?php
	$user="root";
	$server="localhost";
	$password="gandako";
	$database="hackasight";
	$conn=new mysqli($server, $user, $password, $database);
	$sql="CREATE DATABASE IF NOT EXISTS hackasight";
	$conn->query($sql);
?>
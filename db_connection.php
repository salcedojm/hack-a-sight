<?php
	$user="root";
	$server="localhost";
	$password="jmsalcedo";
	$database="hackasight";
	$conn=new mysqli($server, $user, $password, $database);
	$sql="CREATE DATABASE IF NOT EXISTS hackasight";
	$conn->query($sql);
?>
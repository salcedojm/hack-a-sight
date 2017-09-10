<?php
	session_start();
	require "db_connection.php";
	if(isset($_POST['btnproceed']))
	{
		$email=$_POST['txtemail'];
		$password=md5($_POST['txtpass']);
		$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			$_SESSION['email']=$email;
			header('location: homepage.php');
		}
		else
		{
			echo "<script>alert('INVALID USERNAME OR PASSWORD');</script>";
		}
	}
?>
<html>
<head>
<title> Sign in </title>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
<style>
div.snr{
	font-family:Helvetica;
	font-size:25px;
	margin-top:-77px;
}
div.header1{
	font-family:Helvetica;
	font-size:48px;
}
div.spacing{
	margin-left:100px;
	font-family:Helvetica;
}
input.fontstyle{
	font-size:20px;
}
a{
	text-decoration:none;
	color:blue;
}
input[type=text] {
    padding: 10px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid;
    border-radius: 4px;
    box-sizing: border-box;
    width: 350px;
}
input[type=password] {
    padding: 10px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid;
    border-radius: 4px;
    box-sizing: border-box;
    width: 350px;
}
input[type=submit]{
	border-radius: 8px;
	background-color: #4D5656;
	height: 6%;
	width: 16%;
	color: white;
	font-size: 20px;
}
label{
	font-size: 18px;
	font-family:Helvetica;
}

#form_style{
	width: 50%;
    background-color: #F1C40F;
	margin-top: 50px;
	border-top-left-radius: 1em;
    border-top-right-radius: 1em;

}
ul {
    

    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;

}

li {
    float: left;

}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 25px 20px;
    text-decoration: none;
    font-weight: bolder;
    font-family: Helvetica;



}

li a:hover {
    background-color: #ACAE9E;
}

#log a:hover{
	color: #ACAE9E;
}

a{
	text-decoration: none;
    color: #48D0EC;
    text-decoration: none;
    font-weight: bolder;
}
</style>
</head>
<body>
<audio id="sound_guide" src="audio/sign_in.mp3" preload="auto"></audio>
<div style="width:100%; background-color:white; margin-top:-8px;">
	<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
	
<div class="snr">
<p align ="right">
<a href="signin.php" onfocus="play_guide('sign_in.mp3')">Sign in</a> | <a href="register.php"  onfocus="play_guide('register.mp3')">Register</a></font>

</div>
<hr>
</div>

<div id="nav">
<ul>
  <li><a class="active" href="bookaflight.php" onfocus="play_guide('book_flight.mp3')">Book A Flight</a></li>
  <li><a href="flightstatus.php" onfocus="play_guide('flight_status.mp3')">Flight Status</a></li>
  <li><a href="flightrecord.php" onfocus="play_guide('flig_record.mp3')">Flight Record</a></li>
  <li><a href="aboutus.php" onfocus="play_guide('about.mp3')">About Us</a></li>
  </ul>
</div>

<center>
<div id="form_style">
<br>
<center>
	<form method="POST">
	<center><span style="font-size: 26px; font-weight: bold; font-family: Helvetica; ">Sign in to an Account</span></center>
	<hr>
<br>
	<table>
	
	<tr>
		<td><label>Email: </label></td>
		<td><input type="text" name="txtemail"  onfocus="play_guide('eEmail.mp3')" placeholder="Email Address" class="fontstyle"><br></td>
		</tr>
		<tr>
		<td><label>Password:</label></td>
		<td><input type="password" name="txtpass" onfocus="play_guide('ePass.mp3')" placeholder="Password" class="fontstyle"><br></td>
	</tr>
	</table>
	
 <br>
<center><input type="submit" name="btnproceed"  onfocus="play_guide('sign_in.mp3')" value="Sign in"></center><br>
	</form>
</center>
</div>
</div>
</div>
<footer style="margin-top: 60px;">
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;">
</footer>
</body>
</html>
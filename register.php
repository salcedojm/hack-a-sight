<?php
	session_start();
	require "db_connection.php";
	if(isset($_POST['btnproceed']))
	{
		$firstname=$_POST['txtfname'];
		$lastname=$_POST['txtlname'];
		$contact=$_POST['txtnum'];
		$email=$_POST['txtemail'];
		$bday=$_POST['txtday'];
		$bmonth=$_POST['txtmonth'];
		$byear=$_POST['txtyear'];
		$password=md5($_POST['txtpass']);
		$sql="INSERT INTO users(firstname, lastname, email, contact, birthday,
		birthmonth,birthyear, password) values('$firstname', '$lastname', '$email',
		'$contact', $bday, '$bmonth', $byear, '$password')";
		$conn->query($sql);
		echo "<script>alert('SUCCESSFULLY REGISTERED');</script>";
	}
?>
<html>
<head>
<title> Registration </title>
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
    width: 330px;
}
input[type=password] {
    padding: 10px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid;
    border-radius: 4px;
    box-sizing: border-box;
    width: 330px;
}
input[type=submit]{
	border-radius: 8px;
    background-color: #4D5656  ;
    height: 8%;
    width: 14%;
    color: white;
    font-size: 20px;
}
label{
	font-size: 18px;
	font-family:Helvetica;
}

#form_style{
	width: 80%;
	background-color: #D0D3D4;
	margin-top: 50px;
	background-color: #F1C40F;
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
<body><audio id="sound_guide" src="audio/sign_in.mp3" preload="auto"></audio>
<div style="position:fixed;width:98.8%; background-color:white; margin-top:-8px;">
	<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="signin.php" onfocus="play_guide('sign_in.mp3')">Sign in</a> | <a href="register.php" onfocus="play_guide('register.mp3')">Register</a></font>
</div>
<hr>
</div>
<br>
<br>
<br>
<br>
<br>
<div id="nav">
<ul>
   <li><a class="active" href="bookaflight.php" onfocus="play_guide('book_flight.mp3')">Book A Flight</a></li>
  <li><a href="flightstatus.php" onfocus="play_guide('flight_status.mp3')">Flight Status</a></li>
  <li><a href="flightrecord.php" onfocus="play_guide('flig_record.mp3')">Flight Record</a></li>
  <li><a href="aboutus.php"onfocus="play_guide('about.mp3')">About Us</a></li>
   <li><a href="accessibility.php"onfocus="play_guide('about.mp3')">Accessibility</a></li>
  </ul>
</div>
<center>
<div id="form_style">
<center>
	<form method="POST">
	<br>
	<center><span style="font-size: 26px; font-weight: bold; font-family: Helvetica; ">Register to an Account</span></center>
	<hr>

	<table>
	<center><span style="font-size: 24px; font-family: Helvetica;">Login Information</span></center>
	<tr>
		<td><label>Email: </label></td>
		<td><input type="text" onfocus="play_guide('eEmail.mp3')" name="txtemail" placeholder="Email Address" class="fontstyle" required><br></td>
		<td><label>Password:</label></td>
		<td><input type="password" name="txtpass" onfocus="play_guide('ePass.mp3')" placeholder="Password" class="fontstyle"  required><br></td>
	</tr>
	</table>
	<br>	
	<br>
	<table>
	<center><span style="font-size: 24px; font-family: Helvetica;">Personal Information</span></center><br>
	<tr>
		<td><label>Name:</label></td>
		<td><input type="text" name="txtlname" onfocus="play_guide('eFamily.mp3')" placeholder="Family Name" size="14" class="fontstyle" required> <input size ="11" type="text" name="txtfname" onfocus="play_guide('eGiven.mp3')" placeholder="Given Name" class="fontstyle" required></td>
	</tr>
	<tr>
		<td><label>Date of Birth:</label> </td>
		<table></table><input type="text" name="txtday" onfocus="play_guide('eDay.mp3')" placeholder="Day" class="fontstyle" size="2" style="width: 130px;" required> <input type="text" name="txtmonth" placeholder="Month" onfocus="play_guide('eMonth.mp3')" class="fontstyle" size="4" style="width: 130px;" required> <input type="text" name="txtyear" placeholder="Year" class="fontstyle" onfocus="play_guide('eYear.mp3')" size="10" style="width: 130px;" required></td>
	</tr>
	<tr>
		<td><label>Contact Number: </label></td>
		<td><input type="text" onfocus="play_guide('mobile_number.mp3')" name="txtnum" placeholder="Mobile Number" class="fontstyle" size="34" required></td>
		</tr>
 </table>
 <br><br>
<center><input type="submit" name="btnproceed" onfocus="play_guide('submit.mp3')"></center><br>
	</form>
</center>
</div>
</div>
</div>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">	
</footer>
</body>
</html>
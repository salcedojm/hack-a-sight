<html>
<head>
<title> Cebu Pacific </title>
<style>
div.snr{
	font-family:Helvetica;
	font-size:25px;
	margin-top:-77px;
}
div.header1{
	font-family:Helvetica;
	font-size:60px;
}
a{
	text-decoration:none;
	color:blue;
}
#p{
	background-color: blue;
}

.button_back{
	height: 220px;
	width: 270px;
	box-shadow: 10px 10px 5px #CACFD2;
	display: flex;
	justify-content: center;
	align-items: center;
	color: white;
}
.styleText{
	font-size: 30px;
	font-weight: bold;

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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    font-family: Helvetica;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #F1C40F;
    color: white;
    font-size: 18px;
    font-family: Helvetica;
}

</style>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
<script>
$(document).ready(function(){
	$("#welcome_sound")[0].play()
});
</script>
</head>
<body>
<audio id="welcome_sound" src="audio/welcome.mp3" preload="auto"></audio>
<audio id="sound_guide" src="audio/sign_in.mp3" preload="auto"></audio>
<div style="width:100%; background-color:white; margin-top:-8px;">
<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
?>
<a href="signin.php" id="sign_in" onfocus="play_guide('sign_in.mp3')">Sign in</a> | <a href="register.php" onfocus="play_guide('register.mp3')">Register</a>
<?php
	}
	else
	{
?>
<a href="logout.php" onfocus="play_guide('register.mp3')">LOGOUT</a>
<?php
	}
?>
</font>
</div>
</div>

<hr>
<div id="nav">
<ul>
   <li><a class="active" href="bookaflight.php" onfocus="play_guide('book_flight.mp3')">Book A Flight</a></li>
  <li><a href="flightstatus.php" onfocus="play_guide('flight_status.mp3')">Flight Status</a></li>
  <li><a href="flightrecord.php" onfocus="play_guide('flig_record.mp3')">Flight Record</a></li>
  <li><a href="aboutus.php" onfocus="play_guide('about.mp3')">About Us</a></li>
   <li><a href="accessibility.php" onfocus="play_guide('accessbility.mp3')">Accessibility</a></li>
  </ul>
</div>
<table style="margin-top: 40px;">
	<tr>
		<td colspan="2" style="font-weight: bold; background-color: #F1C40F; ">ACCESSKEY FUNCTONS</td>
	</tr>
	<tr>
		<td>ALT + H</td>
		<td>HOMEPAGE</td>
	</tr>
	<tr>
		<td>ALT + F</td>
		<td>FLIGHT STATUS</td>
	</tr>
	<tr>
		<td>ALT + R</td>
		<td>FLIGHT RECORD</td>
	</tr>
	<tr>
		<td>ALT + B</td>
		<td>BOOK A FLIGHT</td>
	</tr>
	<tr>
		<td>ALT + A</td>
		<td>ABOUT US</td>
	</tr>
</table>
<footer style="margin-top: 130px;">
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
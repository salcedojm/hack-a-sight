<html>
<head>
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="cssofbook.css">
<style>
div.snr{
	font-family:Helvetica;
	font-size:25px;
	margin-top:-77px;
}
a{
	text-decoration:none;
	color:blue;
}
</style>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
</head>
<body>
<div style="width:100%; background-color:white; margin-top:-8px;">
<audio id="sound_guide" src="audio/sign_in.mp3" preload="auto"></audio>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
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
<style>
#desc{
	postition: absolute;
	font-size:20px;
	font-family:Helvetica;
	margin-right: 650px;
	text-align: justify;
}
#contact{
	
	font-size:20px;
	position: absolute;
	padding: 10px;
	left: 780px;
	top: 130px;
	border-style: solid;
}
#fb{
	
	height:30px;
	position:static;	
}
#twit{
	
	height:30px;
	position:static;
}
#env{
	
	height:30px;
	position:static;		
}
#tel{
	
	height:30px;
	position:static;	
	
	
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
<div id="nav">
<ul>
  <li><a class="active" href="bookaflight.php" onfocus="play_guide('book_flight.mp3')">Book A Flight</a></li>
  <li><a href="flightstatus.php"onfocus="play_guide('flight_status.mp3')">Flight Status</a></li>
  <li><a href="flightrecord.php"onfocus="play_guide('flig_record.mp3')">Flight Record</a></li>
  <li><a href="aboutus.php"onfocus="play_guide('about.mp3')">About Us</a></li>
  <li><a href="accessibility.php"onfocus="play_guide('accessbility.mp3')">Accessibility</a></li>
  </ul>
</div>
<div id="desc"><b>About Us:</b><br><br>	

Cebu Pacific Air (PSE: CEB) entered the aviation industry on March 1996 and pioneered the “low fare, great value” strategy. We have since then flown over 150 million passengers and counting.

 
CEB is the largest carrier in the Philippine air transportation industry, offering low-cost services to more destinations and routes with higher flight frequency within the Philippines than any other airline. CEB currently offers flights to 37 Philippine and 26 international destinations, spanning Asia, Australia, the Middle East, and USA.

 
CEB operates a 61​-strong fleet of 47​​ Airbus (3 A319, 36 A320 and 8 A330) and 14 ATR (8 ATR 72-500 and 6 ATR 72-600) aircraft,​ one of the most modern aircraft fleets in the world. Between 2017 and 2022, Cebu Pacific will take delivery of 7 Airbus A321ceo, 32 Airbus A321neo, and 10 ATR 72-600 aircraft orders. It began long-haul services in the 3rd quarter of 2013.

 
CEB is also the preferred and dominant air ​cargo carrier in the Philippines. We provide competitive, fast, flexible and straightforward air cargo services to an extensive network, for individual shippers and cargo agents.

 
Our guests have also learned to anticipate a uniquely upbeat flying experience with CEB, as we are the only carrier offering fun in the skies with our “Fun Games” on board.</div>


<div id="contact">

<table>
	<tr>
		<td colspan="2"><font style="font-size:25px;"><b>Contacts</b></td>
	</tr>
	<tr>
		<td><a href="www.facebook.com/cebupacificairphilippines"><img id="fb" alt="facebook logo" src="fb.png"></a></td>
		<td><a href="www.facebook.com/cebupacificairphilippines"><u>www.facebook.com/cebupacificairphilippines</u></a></td>
	</tr>
	<tr>
		<td><a href="www.twitter.com/cebupacificair"><img id="twit" alt="twitter logo" src="twit.png"></a></td>
		<td><a href="www.twitter.com/cebupacificair"><u>www.twitter.com/cebupacificair</u></a></td>
	</tr>
	<tr>
		<td><img id="env" alt="envelope icon" src="mail.png"></td>
		<td>Mail Us:</td>
	</tr>
	<tr>
		<td colspan="2">Cebu Pacific Customer Care Cebu Pacific Building</td>
	</tr>
	<tr>
		<td colspan="2">Domestic Airport Road Pasay City 1301 Philippines</td>
	</tr>
	<tr>
		<td><img id="tel" alt="telephone icon" src="tel.png"></td>
		<td>Contact Us:</td>
	</tr>
</table>
<table>
	<tr>
		<td>Manila</td>
		<td>+632-7020-888</td>
	</tr>
	<tr>
		<td>Hong Kong</td>
		<td>+852-397-33800</td>
	</tr>
	<tr>
		<td>Australia</td>
		<td>+61-2-9119-2956</td>
	</tr>
	<tr>
		<td>Cebu</td>
		<td>+6332-230-8888</td>
	</tr>
	<tr>
		<td>Singapore</td>
		<td>+65-315-80808</td>
	</tr>
	<tr>
		<td>U.S.A.</td>
		<td>+1-855-5-CEBPAC</td>
	</tr>
	<tr>
		<td>Korea</td>
		<td>+822-6971-7950 to 51</td>
	</tr>
</table>
</div>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</body>
</html>
<html>
<head>
<title> Flight Status </title>
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
#f_status{
	margin: auto;
    width: 66%;
    height: 60%;
    border: 3px white;
    padding: 10px;
	background-color: #F1C40F;
	border-top-left-radius: 1em;
    border-top-right-radius: 1em;
}
#f_status{
	margin: auto;
    width: 60%;
    height: 40%;
    border: 3px white;
    padding: 10px;
	background-color: #F1C40F;
}
input[type=submit]{
	border-radius: 8px;
	background-color: #4D5656;
	height: 14%;
	width: 20%;
	color: white;
	font-size: 20px;
}
</style>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
</head>
<body>
<audio id="sound_guide" src="audio/sign_in.mp3" preload="auto"></audio>
<div style="width:99%; background-color:white; margin-top:-8px;">
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
  <li><a href="aboutus.php"onfocus="play_guide('about.mp3')">About Us</a></li>
   <li><a href="accessibility.php"onfocus="play_guide('accessbility.mp3')">Accessibility</a></li>
  </ul>
</div>
<br>
<div id="f_status">
<center><b><font style="font-size:26px; font-family:Helvetica;">Flight Status</font></b></center>

<hr>
<br>
<br>

<font face="Helvetica">

<center>

<form>
	<tr>
		<td>
		<center>
		<table>
			<tr>
				<td>From:</td> 
				<td><select class="combo">
				<option value ="Philippines">Philippines</option>
				<option value ="Hong Kong">Hong Kong</option>
				<option value ="Japan">Japan</option>
				<option value ="South Korea">South Korea</option>
				</select>
				</td>

				<td><td<center>Flight Date</center></td</td>
				<td><input type="text" class="departure" name="txtdd" placeholder="Day" onfocus="play_guide('dd.mp3')"> <input type="text" class="departure" name="txtmm" placeholder="Month" onfocus="play_guide('dm.mp3')"> <input type="text" class="departure" name="txtyy" placeholder="Year" onfocus="play_guide('dy.mp3')"></td>
			</tr>
		
			<tr>
				<td>To:</td> 
				<td><select class="combo">
				<option value ="Philippines">Philippines</option>
				<option value ="Hong Kong">Hong Kong</option>
				<option value ="Japan">Japan</option>
				<option value ="South Korea">South Korea</option>
				</select>
				</td>

				<td><center>Flight found</center></td>
				<td><input type="text" name="flight_no" placeholder="Flight No."disabled></td>
				
			</tr>
		</table>
		</center>
		</td>
	</tr>
	
</form>
</center>
<br>
<center><input type="submit" name="btnsearch" id="" value="Check Status" onfocus="play_guide('cs.mp3')"></center>
</font>
</div>


<footer style="margin-top: 120px;">
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:320px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
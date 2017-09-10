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
<img src="logo.jpg" alt="Cebu pacific logo">
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
<br>
<center>
<font style="font-size:50px; font-weight: bold;">Welcome, What would you like to do?</font>
<br>
<br>
<br>

<br>
<table>

	<tr>
		<td>
			<button class="button_back" onfocus="play_guide('book_flight.mp3')" id="book_flight" style="background-color: #5DADE2;">
				<span class="styleText">BOOK A FLIGHT</span>
			</button>
		</td>
		<td>
			<button class="button_back" onfocus="play_guide('flight_status.mp3')" id="reserve" style="background-color: #117864">
				<span class="styleText">FLIGHT STATUS</span>
			</button>
		</td>
		<td>
			<button class="button_back" onfocus="play_guide('view_flight.mp3')" id="view_flight"  style="background-color: #D4AC0D">
				<span class="styleText">FLIGHT RECORD</span>
			</button>
		</td>
		<td>
			<button class="button_back" id="nothing" style="background-color: #2471A3">
				<span class="styleText">ABOUT US</span>
			</button>
		</td>
	</tr>

</table>
</center>
<br>
<br>
<br>
<br>
<br>

<footer style="margin-top: 70px;">
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
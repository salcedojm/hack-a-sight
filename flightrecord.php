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
<center>
Flight Record History
<table border="1">
<tr align="center">
	<td>FROM</td>
	<td>TO</td>
	<td>DEPARTURE</td>
	<td>RETURN</td>
	<td>ADULT</td>
	<td>CHILD</td>
	<td>INFANT</td>
</tr>
<tr align="center">
	<td>Philippines</td>
	<td>Hong Kong</td>
	<td>13/09/2017</td>
	<td>17/09/2017</td>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr align="center">
	<td>Philippines</td>
	<td>Japan</td>
	<td>18/09/2017</td>
	<td>22/09/2017</td>
	<td>2</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr align="center">
	<td>Japan</td>
	<td>Hong Kong</td>
	<td>30/09/2017</td>
	<td>6/10/2017</td>
	<td>2</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr align="center">
	<td>South Korea</td>
	<td>Japan</td>
	<td>10/10/2017</td>
	<td>16/10/2017</td>
	<td>2</td>
	<td>2</td>
	<td>0</td>
</tr>
<tr align="center">
	<td>Philippines</td>
	<td>South Korea</td>
	<td>22/10/2017</td>
	<td>28/10/2017</td>
	<td>4</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr align="center">
	<td>Hong Kong</td>
	<td>Japan</td>
	<td>4/11/2017</td>
	<td>7/11/2017</td>
	<td>4</td>
	<td>2</td>
	<td>0</td>
</tr>
<tr align="center">
	<td>Japan</td>
	<td>Philippines</td>
	<td>13/11/2017</td>
	<td>17/11/2017</td>
	<td>2</td>
	<td>0</td>
	<td>1</td>
</tr>
</table>
<footer style="margin-top: 70px;">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
<html>
<head>
<title> Cebu Pacific </title>
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
  </ul>
</div>

<div id="round_trip">

<center><div id="tabs">
	<table>
	<span style="font-family: helvetica; font-size: 26px; color: #1B2631; font-weight:bold;">Where would you like to go?</span>
	<hr>
		<tr>
			<td><button class="tab1">Round-trip</button></td>
			<td> </td>
			<td><button class="tab2">One-way</button></td>
			<td> </td>
			<td><button class="tab3">Multi-city</button></td>
		</tr>

	</table>

</div></center>
<div id="booking">

<br>
<br><br><br>
<center>


<div>
	<form>

		<table>
			<tr>
				<td><label>From: </label></td>	
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea
					</option>
					</select></td>
					<td><label>Departure:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd" value=""> <input type="text" class="departure" placeholder="Month" name="txtm" value=""> <input type="text" class="departure" placeholder="Year" name="txty" value=""></td>
			</tr>

			<tr>
				<td><label>To: </label></td>
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea</option>
					</select></td>
					<td><label>Return:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd1" value=""> <input type="text" class="departure" placeholder="Month" name="txtm1" value=""> <input type="text" class="departure" placeholder="Year" name="txty1" value=""></td>
			</tr>
		</table>
<br>



		<table>
		<hr>
		<span style="font-family: Helvetica; font-size: 20px; color: #2C3E50; font-weight: bold;">AGE</span>
		<hr>
			<tr>
				<td><label>Adult</label></td>
				<td><label>Child</label></td>
				<td><label>Infant</label></td>
			</tr>
			<tr>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
			</tr>
		</table>
		<br>
		<center><input type="submit" value="Book now"></center>
	</form>
</div>
</div>
</form>
</div></div>
</center>
</div>
</div>


<div id="one_way" style="display: none;">

<center><div id="tabs">
	<table>
	<span style="font-family: helvetica; font-size: 26px; color: #1B2631">Where would you like to go?</span>
	<hr>
		<tr>
			<td><button class="tab1">Round-trip</button></td>
			<td> </td>
			<td><button class="tab2">One-way</button></td>
			<td> </td>
			<td><button class="tab3">Multi-city</button></td>
		</tr>

	</table>

</div></center>
<div id="booking">

<br>
<br><br><br>
<center>


<div>
	<form>

		<table>
			<tr>
				<td><label>From: </label></td>	
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea
					</option>
					</select></td>
					<td><label>Departure:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd" value=""> <input type="text" class="departure" placeholder="Month" name="txtm" value=""> <input type="text" class="departure" placeholder="Year" name="txty" value=""></td>
			</tr>

			<tr>
				<td><label>To: </label></td>
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea</option>
					</select></td>
					<td><label>Return:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd1" value=""> <input type="text" class="departure" placeholder="Month" name="txtm1" value=""> <input type="text" class="departure" placeholder="Year" name="txty1" value=""></td>
			</tr>
		</table>
<br>



		<table>
		<hr>
		<span style="font-family: Helvetica; font-size: 20px; color: #2C3E50; font-weight: bold;">AGE</span>
		<hr>
			<tr>
				<td><label>Adult</label></td>
				<td><label>Child</label></td>
				<td><label>Infant</label></td>
			</tr>
			<tr>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
			</tr>
		</table>
		<br>
		<center><input type="submit" value="Book now"></center>
	</form>
</div>
</div>
</form>
</div></div>
</center>
</div>
</div>

<div id="multi_city" style="display: none;">

<center><div id="tabs">
	<table>
	<span style="font-family: helvetica; font-size: 26px; color: #1B2631">Where would you like to go?</span>
	<hr>
		<tr>
			<td><button class="tab1">Round-trip</button></td>
			<td> </td>
			<td><button class="tab2">One-way</button></td>
			<td> </td>
			<td><button class="tab3">Multi-city</button></td>
		</tr>

	</table>

</div></center>
<div id="booking">

<br>
<br><br><br>
<center>


<div>
	<form>

		<table>
			<tr>
				<td><label>From: </label></td>	
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea
					</option>
					</select></td>
					<td><label>To: </label></td>
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea</option>
					</select></td>

			</tr>
					<td><label>From: </label></td>	
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea
					</option>
					</select></td>
					<td><label>To: </label></td>
				<td><select class="combo">
					<option value ="Philippines">Philippines</option>
					<option value ="Hong Kong">Hong Kong</option>
					<option value ="Japan">Japan</option>
					<option value ="South Korea">South Korea</option>
					</select></td>
			<tr>
				<td><label>Departure:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd" value=""> <input type="text" class="departure" placeholder="Month" name="txtm" value=""> <input type="text" class="departure" placeholder="Year" name="txty" value=""></td>


	<td><label>Return:</label></td>
				<td>
				<input type="text" class="departure" placeholder="Day" name="txtd1" value=""> <input type="text" class="departure" placeholder="Month" name="txtm1" value=""> <input type="text" class="departure" placeholder="Year" name="txty1" value=""></td>
					
			</tr>
		</table>
<br>



		<table>
		<hr>
		<span style="font-family: Helvetica; font-size: 20px; color: #2C3E50; font-weight: bold;">AGE</span>
		<hr>
			<tr>
				<td><label>Adult</label></td>
				<td><label>Child</label></td>
				<td><label>Infant</label></td>
			</tr>
			<tr>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
				<td><input type="text" value=""></div></td>
			</tr>
		</table>
		<br>
		<center><input type="submit" value="Book now"></center>
	</form>
</div>
</div>
</form>
</div></div>
</center>
</div>
</div>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
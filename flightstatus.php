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
</style>
</head>
<body>
<div style="width:100%; background-color:white; margin-top:-8px;">
<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="">Sign in</a> | <a href="">Register</a></font>
</div>
<hr>

<div id="nav">
<ul>
  <li><a class="active" href="#home">Book A Flight</a></li>
  <li><a href="#news">Flight Status</a></li>
  <li><a href="#contact">Flight Record</a></li>
  <li><a href="#contact">About Us</a></li>
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
				<td><input type="text" class="departure" name="txtdd" placeholder="Day"> <input type="text" class="departure" name="txtmm" placeholder="Month"> <input type="text" class="departure" name="txtyy" placeholder="Year"></td>
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
				<td><input type="text" name="flight_no" placeholder="Flight No."></td>
				
			</tr>
		</table>
		</center>
		</td>
	</tr>
	
</form>
</center>
<br>
<center><input type="submit" name="btnsearch" id="" value="Check Status"></center>
</font>
</div>


<footer style="margin-top: 120px;">
<hr>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:320px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard">
</footer>
</body>
</html>
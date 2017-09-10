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
</head>
<body>
<div style="width:100%; background-color:white; margin-top:-8px;">
<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="">Sign in</a> | <a href="">Register</a></font>
</div>
<hr>
<br>
<br>
<center><b><font style="font-size:40px; font-family:Helvetica;">Flight Status</font></b></center>
<br>
<br>
<font face="Helvetica">
<center>
<table>
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
			</tr>
		</table>
		</center>
		</td>
	</tr>
	<tr>
		<td>
		<table>
			<tr>
				<td colspan="3"><center>Flight Date</center></td> 
				<td><center>Flight found</center></td>
			</tr>
			<tr>
				<td><input type="text" class="departure" name="txtdd" placeholder="Day"></td>
				<td><input type="text" class="departure" name="txtmm" placeholder="Month"></td>
				<td><input type="text" class="departure" name="txtyy" placeholder="Year"></td>
				<td><input type="text" name="txtfno" placeholder="Flight No."></td>
			</tr>	
		</table>
		</td>
	</tr>
</table>
</center>
<center><input type="submit" name="btnsearch" value="Check Status"></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:320px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard"><img src="mastercard-secure.jpg" alt="credits visa"><img src="amex.jpg" alt="credits amex">
</footer>
</body>
</html>
<html>
<head>
<title> Cebu Pacific </title>
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
<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="">Sign in</a> | <a href="">Register</a></font>
</div>
<hr>
<center><b><font style="font-size:40px; font-family:Helvetica;">Flight Status</font></b></center>
<br>
<br>
<table>
<tr>
	<td>From:</td> 
	<td><select>
		<option value ="Philippines">Philippines</option>
		<option value ="Hong Kong">Hong Kong</option>
		<option value ="Japan">Japan</option>
		<option value ="South Korea">South Korea</option>
	</select>
	</td>
</tr>
<tr>
	<td>To:</td> 
	<td><select>
		<option value ="Philippines">Philippines</option>
		<option value ="Hong Kong">Hong Kong</option>
		<option value ="Japan">Japan</option>
		<option value ="South Korea">South Korea</option>
	</select>
	</td>
</tr>
</table>
<table>
	<tr>
		<td colspan="3"><center>Flight Date</center></td> 
		<td><center>Flight found</center></td>
	</tr>
	<tr>
		<td><input type="text" name="txtdd" placeholder="Day"></td>
		<td><input type="text" name="txtmm" placeholder="Month"></td>
		<td><input type="text" name="txtyy" placeholder="Year"></td>
		<td><input type="text" name="txtfno" placeholder="Flight No."></td>
	</tr>	
</table>
<br>
<input type="submit" name="btnsearch" value="Check Status">
</body>
</html>
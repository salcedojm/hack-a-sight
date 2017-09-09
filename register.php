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
    width: 350px;
}
input[type=password] {
    padding: 10px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid;
    border-radius: 4px;
    box-sizing: border-box;
    width: 350px;
}
input[type=submit]{
	border-radius: 8px;
	background-color: #D4AC0D;
	height: 8%;
	width: 12%;
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

}
</style>
</head>
<body>
<div style="position:fixed;width:99%; background-color:white; margin-top:-8px;">
	<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="">Sign in</a> | <a href="">Register</a></font>
</div>
<hr>
</div>
<br>
<br>
<br>
<br>


<center>
<div id="form_style">
<center>
	<form>
	<br>
	<center><span style="font-size: 26px; font-weight: bold; font-family: Helvetica; ">Register to an Account</span></center>
	<hr>

	<table>
	<center><span style="font-size: 26px; font-family: Helvetica;">Login Information</span></center>
	<tr>
		<td><label>Email: </label></td>
		<td><input type="text" name="txtemail" placeholder="Email Address" class="fontstyle"><br></td>
		<td><label>Password:</label></td>
		<td><input type="password" name="txtpass" placeholder="Password" class="fontstyle"><br></td>
	</tr>
	</table>
	<br>	
	<table>
	<center><span style="font-size: 28px; font-family: Helvetica;">Personal Information</span></center><br>
	<tr>
		<td><label>Name:</label></td>
		<td><input type="text" name="txtlname" placeholder="Family Name" size="14" class="fontstyle"> <input size ="11" type="text" name="txtfname" placeholder="Given Name" class="fontstyle"></td>
	</tr>
	<tr>
		<td><label>Date of Birth:</label> </td>
		<table></table>d><input type="text" name="txtday" placeholder="Day" class="fontstyle" size="2" style="width: 130px;"> <input type="text" name="txtmonth" placeholder="Month" class="fontstyle" size="4" style="width: 130px;"> <input type="text" name="txtyear" placeholder="Year" class="fontstyle" size="10" style="width: 130px;"></td>
	</tr>
	<tr>
		<td><label>Contact Number: </label></td>
		<td><input type="text" name="txtnum" placeholder="Mobile Number" class="fontstyle"size="34"></td>
		</tr>
 </table>
 <br>
<center><input type="checkbox" name="cbx" style="height: 20px; width: 20px;"> <span style="font-size: 20px;">I agree to the </span><a href="" style="color:black; text-decoration:underline; font-size: 20px;">Terms & Conditions</a> </center><br>
<center><input type="submit" name="btnproceed"></center><br>
	</form>
</center>
</div>
</div>



</div>

</body>
</html>
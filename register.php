<?php
	session_start();
	require "db_connection.php";
	if(isset($_POST['btnproceed']))
	{
		$firstname=$_POST['txtfname'];
		$lastname=$_POST['txtlname'];
		$contact=$_POST['txtnum'];
		$email=$_POST['txtemail'];
		$bday=$_POST['txtday'];
		$bmonth=$_POST['txtmonth'];
		$byear=$_POST['txtyear'];
		$password=md5($_POST['txtpass']);
		$sql="INSERT INTO users(firstname, lastname, email, contact, birthday,
		birthmonth,birthyear, password) values('$firstname', '$lastname', '$email',
		'$contact', $bday, '$bmonth', $byear, '$password')";
		$conn->query($sql);
		echo "<script>alert('SUCCESSFULLY REGISTERED');</script>";
	}
?>
<html>
<head>
<title> Registration </title>
	
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
	background-color: #F1C40F;
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
</head>
<body>
<div style="position:fixed;width:98.8%; background-color:white; margin-top:-8px;">
	<a href="homepage.php"><img src="logo.jpg" alt="Cebu pacific logo"></a>
<div class="snr">
<p align ="right">
<a href="signin.php">Sign in</a> | <a href="register.php">Register</a></font>
</div>
<hr>
</div>
<br>
<br>
<br>
<br>
<br>
<div id="nav">
<ul>
  <li><a class="active" href="#home">Book A Flight</a></li>
  <li><a href="#news">Flight Status</a></li>
  <li><a href="#contact">Flight Record</a></li>
  <li><a href="#contact">About Us</a></li>
  </ul>
</div>
<center>
<div id="form_style">
<center>
	<form method="POST">
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
<center><input type="checkbox" name="cbx" style="height: 20px; width: 20px;"> <span style="font-size: 20px;">I agree to the </span><a href="" style="color:black; text-decoration:underline; font-size: 20px;">Terms &amp; Conditions</a> </center><br>
<center><input type="submit" name="btnproceed"></center><br>
	</form>
</center>
</div>
</div>



</div>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard"><img src="mastercard-secure.jpg" alt="credits visa"><img src="amex.jpg" alt="credits amex">
</footer>
</body>
</html>
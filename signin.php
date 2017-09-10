<?php
	session_start();
	require "db_connection.php";
	if(isset($_POST['btnproceed']))
	{
		$email=$_POST['txtemail'];
		$password=md5($_POST['txtpass']);
		$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			$_SESSION['email']=$email;
			header('location: homepage.php');
		}
		else
		{
			echo "<script>alert('INVALID USERNAME OR PASSWORD');</script>";
		}
	}
?>
<html>
<head>
<title> Sign in </title>
	
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
	width: 50%;
    background-color: #F1C40F;
	margin-top: 50px;

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
<div style="width:100%; background-color:white; margin-top:-8px;">
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
<br>
<center>
	<form method="POST">
	<center><span style="font-size: 26px; font-weight: bold; font-family: Helvetica; ">Sign in to an Account</span></center>
	<hr>
<br>
	<table>
	
	<tr>
		<td><label>Email: </label></td>
		<td><input type="text" name="txtemail" placeholder="Email Address" class="fontstyle"><br></td>
		</tr>
		<tr>
		<td><label>Password:</label></td>
		<td><input type="password" name="txtpass" placeholder="Password" class="fontstyle"><br></td>
	</tr>
	</table>
	
 <br>
<center><input type="submit" name="btnproceed" value="Sign in"></center><br>
	</form>
</center>
</div>
</div>



</div>
<br>
<br>
<br>
<hr>
<footer>
<img src="logofoot.jpg" alt="credits cebu pacific" height="50" style="margin-right:340px;">© Copyright 2016 cebupacificair.com <img src="visa.jpg" alt="credits visa" style="margin-left:320px;"><img src="mastercard.jpg" alt="credits mastercard"><img src="mastercard-secure.jpg" alt="credits visa"><img src="amex.jpg" alt="credits amex">
</footer>
</body>
</html>
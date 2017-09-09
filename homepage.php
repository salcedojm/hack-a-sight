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
<script>
	$(document).ready(function(){
		$("#book_flight").click(function(){
			location.assign("webpagedito.php");
		});
		$("#reserve").click(function(){
		location.assign("webpagedito.php");
		});
		$("#view_flight").click(function(){
		location.assign("webpagedito.php");
		});
		$("#nothing").click(function(){
		location.assign("webpagedito.php");
		});
	});
</script>
</head>
<body>
<img src="logo.jpg" alt="Cebu pacific logo">
<div class="snr">
<p align ="right">
<a href="">Sign in</a> | <a href="">Register</a></font>
</div>
<hr>
<br>
<center>
<font style="font-size:60px;">Welcome, What would you like to do?</font>
<br>
<br>
<br>

<br>
<table>

	<tr>
		<td><div class="button_back" id="book_flight" style="background-color: #5DADE2;">
		
		<span class="styleText">BOOK A FLIGHT</span>
		</div></td>
		<td><div class="button_back" id="reserve" style="background-color: #117864">
			<span class="styleText">RESERVATION</span>
		</div></td>
	</tr>
	<tr>
		<td><div class="button_back" id="view_flight"  style="background-color: #D4AC0D">
			<span class="styleText">VIEW FLIGHT</span>
		</div></td>
		<td><div class="button_back" id="nothing" style="background-color: #2471A3">
			<span class="styleText">HOTEL</span>
		</div></td>
	</tr>
</table>




</center>

<br>
</body>
</html>
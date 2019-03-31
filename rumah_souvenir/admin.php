<?php
session_start();
if (!isset($_SESSION['level'])) {
	header("location:login.php");
} else {
	if ($_SESSION['level']!=1) {
		header("location:index.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
	<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body{
		text-align: center;
		margin:50px 0;
		font-family: calibri;
	}
	.box{
		display:inline-block;
		padding:50px 10px 10px 10px;
		background-color:#B90000;
		color:white;
		margin:0 4%;
		border-radius:10px;
		text-align:center
	}
	.box img{
		width: 100px
	}
	.logout input[type=submit]{
		text-align:center;
		margin-top:60px;
		padding: 10px 90px;
		border: 2px solid white;
		border-radius: 10px;
		background-color: transparent;
		color: white;
		font-weight: bold;
		font-size: 1rem;
		cursor:pointer;
		outline: none;
	}
	.logout input[type=submit]:hover{
		background-color: white;
		color: #E60000;

	}
</style>
</head>
<body bgcolor="#E60000">
<img src="img/brand.png" style="width:20%">
<font color="white"><h2>Admin</h2></font>
<div style="margin: 0 auto;text-align:center">
	<div class="box">
		<img src="img/prof.png" ><br>
		Marwa Khairunnisa<br>
		1605356118<br>
		S1 Teknik Informatika B<br>
		2016<br>
	</div>
	<div class="box">
		<img src="img/prof.png"><br>
		M.Rizqi Irfandiansyah<br>
		1605356118<br>
		S1 Teknik Informatika B<br>
		2016<br>
	</div>
	<div class="box">
		<img src="img/prof.png"><br>
		Pradipa Ababiel<br>
		1605356118<br>
		S1 Teknik Informatika B<br>
		2016<br>
	</div>
</div>
<div class="logout"><a href="logout.php"><input type="submit" value="Log out"></a></div>
<div class="logout"><a href="profile.php"><input type="submit" value="Profil"></button></a></div>
</body>
</html>
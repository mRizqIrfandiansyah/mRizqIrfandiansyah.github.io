<?php
session_start();
if (!isset($_SESSION['level'])) {
	header("location:login.php");
}
?>
<!DOCTYPE>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
	<title>Rumah souvenir</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css1/style1.css">
<link rel="stylesheet" type="text/css" href="FontAwesome/css/font-awesome.min.css">
</head>
<body>
<tr>
	<td></td>

</tr>
<?php include('header.php'); ?>
<table id="main" cellspacing="0" border="0">
	<tr>
		<td><font size="40" style="font-weight:bold">Profile</font></td>
	</tr>
	<tr>
		<td style="padding:50px 0px 100px 30px"><?php
			include_once("koneksi.php");
			$sql="select * from akun where username= '".$_SESSION['username']."'";
			$result=mysqli_query($cnn,$sql);
			$user_data=mysqli_fetch_array($result)?>
			<table style="font-size:20px" cellpadding="8">
				<tr>
					<td >Username <td>
					<td style="padding-left:30px">: <?php echo $user_data["username"]?></td> 
				</tr>
				<tr>
					<td>E-mail <td>
					<td style="padding-left:30px">: <?php echo $user_data["email"]?></td> 
				</tr>
				<tr>
					<td>No-Telp <td>
					<td style="padding-left:30px">: <?php echo $user_data["telp"]?> </td> 
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td id="footer" >
			<table width="200px" >
				<tr>
					<td>
						<img src="img/hp.png" height="120px">
					</td>
					<td valign="top">Download Aplikasinya di toko terdekat</td>
				</tr>
			</table></td>
		<td id="footer" valign="top">Follow Us<br><img src="img/sosmed.png" width="180px" height="50px"></td>
	</tr>
	<tr>
		<td id="copyright" colspan="2" align="center">Copyright &copy; 2017 Nama_Toko. All Rights Reserved</td>
	</tr>
</table>
</body>
</html>
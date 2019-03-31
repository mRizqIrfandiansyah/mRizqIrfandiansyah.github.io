<?php
if (!isset($_SESSION))session_start();
if (isset($_SESSION['level'])) {
	header("location:index.php");
}?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
<style>
	body{
		font-family:calibri;
		margin: 0;
	}
	#main{
		width:100%;
		margin:auto;
		background-color: white;
		margin: 0 auto;
		padding: 5px;
	}
	input{
		border:2px solid lightgrey;
		border-radius: 2px;
		font-size:15px;
		padding:5px;
		width:30%;
	}
	input[type="submit"]{
		border-radius: 2px;
		font-size:20px;
		padding:5px;
		border: none;
		color: white;
		font-weight: bold;
		background-color: red;
		width:32%;
		cursor: pointer;
	}
	.vl{
		height:110px;
		width:0px;
		border-left:solid;
		margin:10px;
	}
	a{
		color:black;
	}
	a:hover{
		color:gray;
	}
</style>
</head>
<body>
<form action="" method="post">
<table id="main" cellspacing="0" cellpadding="10px" >
	<tr>
		<td align="center" style="padding-top:100px">
			<a href="index.php"><img src="img/brand.png" width="200px"></a>
			<p>Masuk ke Rumah Souvenir
			<p>Belum punya akun? Daftar <a href="register.php">disini</a>
		</td>
	</tr>
	<tr>
		<td align="center">
		<form method="post">
			<p><input type="text" placeholder="Username" name="username" required>
			<p><input type="password" placeholder="Password" name="password" required>
			<p><input type="submit" value="Log In">
		</form>
		</td>
	</tr>
	<tr>
		<td id="copyright" colspan="3" align="center">Copyright &copy; 2017 Nama_Toko. All Rights Reserved</td>
	</tr>
</table>
</form>
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
	include 'koneksi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from akun where username='$username' and password='$password'";
	$query=mysqli_query($cnn,$sql);
	if(mysqli_num_rows($query)>0){
		$data=mysqli_fetch_array($query);
		$_SESSION['username']=$username;
		$_SESSION['level']=$data['akses'];
		if($_SESSION['level']==1){
			header("location:admin.php");
		} 
		elseif ($_SESSION['level']==0) {
			header("location:index.php");
		} 
	}
	else
	{
		echo "<script>alert('Maaf, anda gagal login')</script>";
	}
}
?>

</body>
</html>
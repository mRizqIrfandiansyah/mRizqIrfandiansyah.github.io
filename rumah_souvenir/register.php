<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
	<title>Rumah souvenir</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
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
		width:40%;
	}
	input[type="submit"]{
		border-radius: 2px;
		font-size:20px;
		padding:5px;
		border: none;
		color: white;
		font-weight: bold;
		background-color: red;
		width:42%;
		cursor: pointer;
	}
	input[type="submit"]:hover{
		background-color: darkred;
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
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table id="main" cellspacing="0" cellpadding="10px">
	<tr>
		<td id="header" colspan="3" align="center">
		<a href="index.php">
		<img src="img/brand.png" width="200px"></a>
		<p>Daftar ke Rumah Souvenir
		<p>Sudah punya akun? Masuk <a href="login.php">disini</a>
	</tr>

	<tr>
		<td width="350px" height="300px" align="center">
			<p><input type="text" name = 'username' placeholder="Username" required>
			<p><input type="number" name ='phone' placeholder="No Telepon" required>
			<p><input type="email" name = 'email' placeholder="Email" required>
			<p><input type="password" name = 'pass' placeholder="Password" required>
			<p><input type="submit" value="Daftar">
		</td>
	</tr>
	<tr>
		<td id="copyright" colspan="3" align="center">Copyright &copy; 2017 Nama_Toko. All Rights Reserved</td>
	</tr>
</table>
<?php
	require_once('koneksi.php');
if (isset($_POST['username'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['pass'])) {
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	 $sql = "INSERT INTO akun (username,email,telp,password)
	 VALUES ('" .$username. "', '" .$email. "', '" .$phone. "', '" .$pass. "' )";

	 $res=mysqli_query($cnn,$sql);
	 if ($res) {
	 	?><script type="text/javascript">alert('Anda sudah terdaftar')</script>
	 <?php
	 } else {
	 	?><script type="text/javascript">alert('Anda sudah pernah terdaftar')</script>
	 <?php
	 }
}

?>
</form>
</body>
</html>
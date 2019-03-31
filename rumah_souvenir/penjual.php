<!DOCTYPE>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
	<title>Rumah souvenir</title>
<link rel="stylesheet" type="text/css" href="css1/style1.css">
</head>
<body>
<?php include('header.php');?>
<table id="main" cellspacing="0" border="0">
	<tr>
		<td rowspan="2" align="center" width="25%" style="padding-bottom:15px;">
			<div style="width:200px;height:200px;border-radius:100px;overflow:hidden"><img src="img/penjual1.jpg" width="100%"></div>
			<h1>Nama Penjual</h1>
			<h3><b>Jakarta</b></h3>
			<hr>
			<a href="penjual.php"><button class="hubungi">&#9993; Kirim Pesan</button></a>
			<button class="hubungi" style="background-color:orange">Berlangganan</button>
			<hr>
			Produk Terjual <div style="width:100px;border:2px solid black;padding:5px;font-size:20px">102</div>
			
		</td>
		<td colspan="2" width="75%" valign="top" style="border-bottom:1px solid">
			<h3>Deskripsi Toko</h3>
			<p>
			Penjual itu menjual bukan membeli~
		</td>
	</tr>
	<tr>
		<td colspan="3" width="100%" valign="top"><h2>Semua Produk</h2>
			<table width="100%" height="100%" cellspacing="0" cellpadding="5">
				<tr>
					<td width="25%"><a href="patung1.php" style="cursor:pointer;text-decoration:none">
						<table id="thumbnail" cellspacing="0" cellpadding="5">
							<tr>
								<td colspan="2"><div class="gambar_barang"><img src="img/patung1_1.jpg" width="100%"></td>
							</tr>
							<tr>
								<td colspan="2"><div class="nama_barang">Patung Elang</div></td>
							</tr>
							<tr>
								<td >Jakarta</td>
								<td><b>Rp 2.300.000</b></td>
							</tr>
						</table></a>
					</td>
					<td width="25%"><a href="patung2.php" style="cursor:pointer;text-decoration:none">
						<table id="thumbnail" cellspacing="0" cellpadding="5">
							<tr>
								<td colspan="2"><div class="gambar_barang"><img src="img/patung2.jpg" width="100%"></td>
							</tr>
							<tr>
								<td colspan="2"><div class="nama_barang">Patung Naga Elang Kayu Jati</div></td>
							</tr>
							<tr>
								<td >Jakarta</td>
								<td><b>Rp 4.000.000</b></td>
							</tr>
						</table></a>
					</td>
					<td width="25%"></td>
					<td width="25%"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td id="footer" colspan="2" width="80%">
			<table width="200px">
				<tr>
					<td>
						<img src="img/hp.png" height="120px">
					</td>
					<td valign="top">Download Aplikasinya di toko terdekat</td>
				</tr>
			</table></td>
		<td id="footer" valign="top" width="20%">Follow Us<br><img src="img/sosmed.png" width="180px" height="50px" usemap="sosmed_map">
		<map name="sosmed_map">
			<area shape="rect" coords="6,5,45,44" alt="instagram" href="#instagram">
			<area shape="rect" coords="67,5,105,44" alt="facebook" href="#facebook">
			<area shape="rect" coords="127,5,166,45" alt="instagram" href="#twitter">
		</map>
		</td>
	</tr>
	<tr>
		<td id="copyright" colspan="3" align="center">Copyright &copy; 2017 Rumah Souvenir. All Rights Reserved</td>
	</tr>
</table>
</body>
</html>
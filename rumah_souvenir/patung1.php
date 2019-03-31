
<!DOCTYPE>
<html>
<head>
	<link rel="icon" href="/img/bird.ico" />
	<title>Rumah souvenir</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css1/style1.css">
<link rel="stylesheet" type="text/css" href="FontAwesome/css/font-awesome.min.css">
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  	var i;
  	var slides = document.getElementsByClassName("mySlides");
  	var dots = document.getElementsByClassName("demo");
  	var captionText = document.getElementById("caption");
  	if (n > slides.length) {slideIndex = 1}
  	if (n < 1) {slideIndex = slides.length}
  	for (i = 0; i < slides.length; i++) {
  	    slides[i].style.display = "none";
  	}
  	for (i = 0; i < dots.length; i++) {
  	    dots[i].className = dots[i].className.replace(" active", "");
  	}
  	slides[slideIndex-1].style.display = "block";
  	dots[slideIndex-1].className += " active";
  	captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</head>
<body>
<div id="header" >
	<table width="100%" height="100%" cellspacing="0" cellpadding="0" style="top:0;left:0" border="0">
		<tr>
			<td width="200px" align="center"  id="logo">
				<a href="index.php"><img src="img/brand.png" width="140px" ></a>
			</td>
			<td width="50%">
				<table id="search" cellpadding="0" cellspacing="0" border="0">
					<tr><form action="">
						<td><input type="search" placeholder="Cari Produk..." size="30"></td>
						<td><button type="submit" ><img src="img/search.png" height="20" style="padding:5px;"></button></td>
					</form></tr>
				</table>
			</td>
			<td width="100px">
				<div id="kategori_button">
					<button class="header_button">Kategori</button>
				<div id="kategori_content">
					<a href="kerajinan.php"style="text-decoration:none"><div style="margin-bottom:4px;80px">Pakaian</div></a>
					<a href="kerajinan.php"style="text-decoration:none"><div style="width:80px">Kerajinan</div></a>			
				</div>
				</div>
			</td>
						<td align="right"><button class="header_button" onclick="location.href='register.php'">Register</button></td>
			<td>
				<div id="login_button" style="margin-left:5%">
					<button class="header_button" onclick="location.href='login.php'">Log In</button>
				</div>
			</td>
			<td align="right"></td>
						<div id="home">
				<a href="index.php"><i class="fa fa-home"></i></a>
			</div>
		</tr>
	</table>
</div><table id="main" cellspacing="0" border="0">
	<tr>
		<td colspan="3" width="100%">
			<a href="index.php">Home</a> > <a href="kerajinan.php">Kerajinan</a> > <a href="">Patung Elang</a>
		</td>
	</tr>
	<tr>
		<td colspan="3" width="100%"><h2>Patung Elang</h2></td>
	</tr>
	<tr>
		<td width="25%" valign="top">
			<div class="image_preview1">
    			<img src="img/patung1_1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" width="100%">
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">
					    <div class="mySlides">
					      <div class="numbertext">1 / 4</div>
					      <img src="img/patung1_1.jpg" style="width:100%">
					    </div>
					    <div class="mySlides">
					      <div class="numbertext">2 / 4</div>
					      <img src="img/patung1_2.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					      <div class="numbertext">3 / 4</div>
					      <img src="img/patung1_3.jpg" style="width:100%">
					    </div>
					    
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>

					    <div class="caption-container">
					      <p id="caption"></p>
					    </div>

					    <div class="column">
					      <img class="demo cursor" src="img/patung1_1.jpg" style="width:100%" onclick="currentSlide(1)" >
					    </div>
					    <div class="column">
					      <img class="demo cursor" src="img/patung1_2.jpg" style="width:100%" onclick="currentSlide(2)" >
					    </div>
					    <div class="column">
					      <img class="demo cursor" src="img/patung1_3.jpg" style="width:100%" onclick="currentSlide(3)" >
					    </div>
					</div>
				</div>
			</div>
			<div id="image_slider">
				<img class="image_preview2" src="img/patung1_1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				<img class="image_preview2" src="img/patung1_2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
				<img class="image_preview2" src="img/patung1_3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
			</div>
		</td>
		<td id="content" width="50%">
			<table width="100%" cellspacing="0" cellpadding="10px">
				<tr>
					<td colspan="2" style="border-bottom:solid gray;">
						<p>Deskripsi Produk
<pre>
- Ukuran :410 x 220 x 480 mm
- Material :Resin
- Berat : 15 Kg include Packaging
</pre>
					</td>
				</tr>
				<tr>
					<td align="center" valign="top" >
						<h2 style="margin:0 auto">Informasi Penjual</h2>
					</td>
					<td rowspan="2" align="center">
						<div style="border:2px solid black;font-weight:bold;padding:10px">
							<h2 style="margin:0">Rating</h2><br><hr><font size="30" color="orange">3.5</font>
						</div>
					</td>
				</tr>
				<tr>
					<td align="center">
						<div style="width:70px;height:70px;border-radius:50px;overflow:hidden;background:url('img/penjual1.jpg');background-size:cover;">
						</div>
						<p>Toko Maju Mundur<br>
						Jakarta<br>
						<a href="penjual.php"><button class="hubungi">Selengkapnya</button></a>
						<button class="hubungi" style="background-color:orange">Berlangganan</button>
					</td>
					
				</tr>
			</table>
		</td>
		<td id="content" width="25%">
			<table cellspacing="0" cellpadding="10px" width="100%">
				<tr>
					<td align="center" valign="top">
						<h2>Harga</h2>
						<hr>
						<font size="30" color="red">Rp 2.300.000</font>
						<p align="center">Stok
					<div align="center" style="border:1px solid lightgrey;
					width:30%;margin:0 auto;font-size:50;border-radius:10px" id="stok">15</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="number-input" align="center">
  						<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
  						<input id="kurang" class="quantity" min="0" max="15"name="quantity" value="1" type="number">
  						<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
					</div>
					<input type="button" class="beli"value="Beli" name="submit" onclick="ubahharga()">
					</td>
				</tr>

			</table>
		</td>
	</tr>
	<tr>
		<td id="footer" colspan="2">
			<table width="200px">
				<tr>
					<td>
						<img src="img/hp.png" height="120px">
					</td>
					<td valign="top">Download Aplikasinya di toko terdekat</td>
				</tr>
			</table></td>
		<td id="footer" valign="top">Follow Us<br><img src="img/sosmed.png" width="180px" height="50px" usemap="sosmed_map">
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
<script type="text/javascript">
	function ubahharga(){
		var a= document.getElementById("stok");
		var b= document.getElementById("kurang");
		a.innerHTML=parseInt(a.innerHTML)-b.value;
	}

	</script>
</body>
</html>

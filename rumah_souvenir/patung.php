<!DOCTYPE>
<html>
<head>
<link rel="icon" href="/img/bird.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rumah souvenir</title>
<link rel="stylesheet" type="text/css" href="css1/style1.css">
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
<?php include('header.php'); ?>
<table id="main" cellspacing="0" border="0">
	<tr>
		<td colspan="3" width="100%">
			<a href="index.php">Home</a> > <a href="">Kerajinan</a> ><a href="">Patung Kayu</a>
		</td>
	</tr>
	<tr>
		<td width="30%">
			<h1>Batik</h1>
			<div class="image_preview1">
    			<img src="gambar/patung1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" width="100%">
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">
					    <div class="mySlides">
					      <div class="numbertext">1 / 4</div>
					      <img src="gambar/patung1.jpg" style="width:100%">
					    </div>
					    <div class="mySlides">
					      <div class="numbertext">2 / 4</div>
					      <img src="gambar/patung2.jpg" style="width:100%">
					    </div>

					    <div class="mySlides">
					      <div class="numbertext">3 / 4</div>
					      <img src="gambar/patung3.jpg" style="width:100%">
					    </div>
					    
					    <div class="mySlides">
					      <div class="numbertext">4 / 4</div>
					      <img src="gambar/patung4.jpg" style="width:100%">
					    </div>
					    
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>

					    <div class="caption-container">
					      <p id="caption"></p>
					    </div>

					    <div class="column">
					      <img class="demo cursor" src="gambar/patung1.jpg" style="width:100%" onclick="currentSlide(1)" >
					    </div>
					    <div class="column">
					      <img class="demo cursor" src="gambar/patung2.jpg" style="width:100%" onclick="currentSlide(2)" >
					    </div>
					    <div class="column">
					      <img class="demo cursor" src="gambar/patung3.jpg" style="width:100%" onclick="currentSlide(3)" >
					    </div>
					    <div class="column">
					      <img class="demo cursor" src="gambar/patung4.jpg" style="width:100%" onclick="currentSlide(4)" >
					    </div>
					</div>
				</div>
			</div>
			<div id="image_slider">
				<img class="image_preview2" src="gambar/patung2.jpg">
				<img class="image_preview2" src="gambar/patung3.jpg">
				<img class="image_preview2" src="gambar/patung4.jpg">
			</div>
		</td>
		<td id="content">
			<table cellspacing="0" cellpadding="10px">
				<tr>
					<td colspan="2" style="border-bottom:solid gray;">
						<p>Deskripsi Produk
						<br>
						<br>
						<p> Patung pahatan tangan asli (Semar, Bebek, Singa)
					</td>
				</tr>
				<tr>
					<td valign="top" >
						<h2 style="margin:0 auto">Informasi Penjual</h2>
					</td>
				</tr>
				<tr>
					<td>
						<div style="border-radius:50px">
							<img src="img/img1.jpg" width="30%"></div>
							<p>Nama Toko<br>
							Alamat Toko<br>
							<a href="penjual.php"><button class="hubungi">Selengkapnya</button></a>
							<button class="hubungi" style="background-color:orange">Berlangganan</button>
					</td>
					<td>
						<div style="border:2px solid black;font-weight:bold;padding:10px">
							<h2 style="margin:0">Rating</h2><br><hr><font size="30" color="orange">3.5</font>
						</div>
					</td>
				</tr>
			</table>
		</td>
		<td>
			
			<table cellspacing="0" cellpadding="10px">
				<tr>
					<td valign="top" >
						<h2>Harga</h2>
						<hr>
						<font size="30" color="red">Rp.7.500.000</font>
						<p align="center">Stok
					<div align="center" style="border:1px solid lightgrey;
					width:30%;margin:0 auto;font-size:50;border-radius:10px" id="stok">30</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="number-input" align="center">
  						<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
  						<input class="quantity" min="0" max="30" name="quantity" type="number" id="kurang">
  						<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
					</div>
					<input type="button" class="beli"value="Beli" name="submit" onclick="ubahharga()">
					</td>
				</tr>

			</table>
		</td>
	</tr>

	<tr>3
		<td id="footer" colspan="2">
			<table width="200px">
				<tr>
					<td>
						<img src="img/hp.png" width="80px" height="120px">
					</td>
					<td valign="top">Download Aplikasinya di toko terdekat</td>
				</tr>
			</table></td>
		<td id="footer" valign="top">Follow Us<br><img src="img/sosmed.png" width="180px" height="50px"></td>
	</tr>
	<tr>
		<td id="copyright" colspan="3" align="center">Copyright &copy; 2017 Nama_Toko. All Rights Reserved</td>
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

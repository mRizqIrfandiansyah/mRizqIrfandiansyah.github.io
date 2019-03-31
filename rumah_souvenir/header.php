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
					<a href="pakaian.php"style="text-decoration:none"><div style="margin-bottom:4px;80px">Pakaian</div></a>
					<a href="kerajinan.php"style="text-decoration:none"><div style="width:80px">Kerajinan</div></a>			
				</div>
				</div>
			</td>
			<?php 
			if (!isset($_SESSION))session_start()  ;
			if (!isset($_SESSION['username'])){ ?>
			<td align="right"><button class="header_button" onclick="location.href='register.php'">Register</button></td>
			<td>
				<div id="login_button" style="margin-left:5%">
					<button class="header_button" onclick="location.href='login.php'">Log In</button>
				</div>
			</td>
			<td align="right"></td>
			<?php } else { ?>
			<td align="right"><div id="logout_button"><button class="header_button" onclick="location.href='logout.php'" style="margin-right:5%" >logout</button></div></td>
			<td align="right"><div id="akun"><button class="header_button" onclick="location.href='profile.php'" style="margin-right:5%" >Akun</button></div></td>
			<?php } ?>
			<div id="home">
				<a href="index.php"><i class="fa fa-home"></i></a>
			</div>
		</tr>
	</table>
</div>
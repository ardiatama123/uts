<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAMBER</title>
	<link rel="stylesheet" type="text/css" href="daftar.css">
</head>
<body>
	<div class="main">
		<div class="menu-atas">
			<img src="logo.png" >
			<li><a href="kontak.php">Kontak Kami</a></li>
			<li><a href="kritik.php">Kritik & Saran</a></li>
			<li><a href="daftar.php">Daftar Mamber</a></li>
			<li><a href="layanan.php">Layanan Kami</a></li>
			<li><a href="daftarharga.php">Daftar harga</a></li>
			<li><a href="uts.php">Home</a></li>
		</div>
		<div class="menu-tengah">
		<div class="container">
			 	<CENTER><h1>FORM PENDAFTARAN MAMBER</h1></CENTER>
				  <form action="insert.php" method="POST">
				  <div class="row">
				    <div class="label">
				    <label for="nama1">Nama</label>
				    </div>
				    <div class="textbox">
				    <input type="text"  name="nama" placeholder="Nama Depan..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="label">
				    <label for="nik">Nomor Induk Kependudukan</label>
				    </div>
				    <div class="textbox">
				   <input type="text"  name="nomorinduk" placeholder="NIK..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="label">
				    <label for="alamat">Alamat</label>
				    </div>
				    <div class="textbox">
				    <textarea  name="alamat" placeholder="Alamat.." style="height:100px"></textarea>
				    </div>
				  </div>
				  <br>
				  <div class="row">
				    <input type="submit" value="Submit">
				  </div>
				  <br>
					<div class="row">
				    <input type="reset" value="Reset">
				    <img src="promo.png" width="15%">
				  </div>
				  </form>

				</div>
				</div>
			<div class="footer">
			<CENTER>@2019 LAKUNTI  RENTAL KAMERA <br>
			<?php
			date_default_timezone_set('Asia/jakarta');
			echo date("l-d-m-y, g:i:s a");
			?></CENTER>
		</div>
		<div class="clear"></div>			
	</div> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR HARGA</title>
	<link rel="stylesheet" type="text/css" href="menu.css">

</head>

<body>
	<div class="main">
		<div class="menu-atas">
			<img src="logo.png">
			<li><a href="kontak.php">Kontak Kami</a></li>
			<li><a href="kritik.php">Kritik & Saran</a></li>
			<li><a href="daftar.php">Daftar Mamber</a></li>
			<li><a href="layanan.php">Layanan Kami</a></li>
			<li><a href="daftarharga.php">Daftar harga</a></li>
			<li><a href="uts.php">Home</a></li>
		</div>
		<div class="menu-tengah" >
		<img src="harga.jpg" width="100%">
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
	<?php
	include "connec.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nomorinduk'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO tblmamber ( nama, alamat, nik)
	VALUES  ('$nama','$alamat','$nik')";

	if (mysqli_query($con, $sql)) {
		echo"<script>alert('Data Disimpan, Lakukan Verifikasi Dengan Menunjukkan NIK ke Toko atau Dengan Menghubungi Admin')</script>";
	} else {
		echo "Erorr : " . $sql . "<br>" .  mysqli_error($con);
	}

	mysqli_close($con);
	?>
	<meta http-equiv="refresh" content="0; url=http://localhost/uts/tugasweb/daftar.php">
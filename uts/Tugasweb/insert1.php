	<?php
	include "connec.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$kritik = $_POST['kritik'];

	$sql = "INSERT INTO tblkritik ( nama, email, kritik)
	VALUES  ('$nama','$email','$kritik')";

	if (mysqli_query($con, $sql)) {
		echo"<script>alert('Terima Kasih Atas Kritik dan Sarannya :) ')</script>";
	} else {
		echo "Erorr : " . $sql . "<br>" .  mysqli_error($con);
	}

	mysqli_close($con);
	?>
	<meta http-equiv="refresh" content="0; url=http://localhost/uts/tugasweb/kritik.php">
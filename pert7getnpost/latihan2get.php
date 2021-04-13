<?php 
// cek apakah tidak ada data di $_GET
// jika latihan.php diklik akan kembali ke latihan1.php
if (  !isset($_GET["judul"]) ||
      !isset($_GET["produser"]) ||
      !isset($_GET["sutradara"]) ||
      !isset($_GET["tahun"]) ||
      !isset($_GET["aktor"]) ||
      !isset($_GET["gambar"])) {
	// proses ini dinamakan Redirect

	header("Location: latihan1get.php");
    exit;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail Mahasiswa</title>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li>Judul : <?= $_GET["judul"]; ?></li>
		<li>Produser : <?= $_GET["produser"]; ?></li>
		<li>Sutradara : <?= $_GET["sutradara"]; ?></li>
		<li>Tahun : <?= $_GET["tahun"]; ?></li>
		<li>Aktor : <?= $_GET["aktor"]; ?></li>
	</ul>

	<a href="latihan1get.php">Kembali ke Daftar Film</a>

</body>
</html>
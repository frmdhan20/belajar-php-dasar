<?php 
require 'functions.php';
$film = query("SELECT * FROM film");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>

	<!-- Eksternal CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<h1>Daftar Film</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Judul</th>
			<th>Produser</th>
			<th>Sutradara</th>
			<th>Tahun</th>
			<th>Aktor</th>
		</tr>
        
         <?php $i = 1; ?>
         <!-- $i = 1; untuk mengurutkan nomor id -->
      <?php foreach ( $film as $row ) : ?>      
      	<!-- $row adalah nama variabel -->
      	<!-- $row juga digunakan untuk melakukan perulangan array -->
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="59"></td>
			<td><?= $row["judul"]; ?></td>
			<td><?= $row["produser"]; ?></td>
			<td><?= $row["sutradara"]; ?></td>
			<td><?= $row["tahun"]; ?></td>
			<td><?= $row["aktor"]; ?></td>
		</tr>
		 <?php $i++; ?>
	 <?php endforeach; ?>
	</table>

</body>
</html>
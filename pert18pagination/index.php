<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData           = count( query("SELECT * FROM film") );
$jumlahHalaman 	      = ceil( $jumlahData / $jumlahDataPerHalaman );
$halamanAktif 	      = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData 			  = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$film = query("SELECT * FROM film LIMIT $awalData, $jumlahDataPerHalaman");

// ORDER BY id DESC > untuk mengurutkan data berdasarkan id
// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
	$film = cari($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>

	<!-- Eksternal CSS -->
	<link rel="stylesheet" href="index.css">

</head>
<body>

 <a href="logout.php">Sign Out</a>
   <center>
	<h1>Daftar Film Indonesia</h1>

	<a href="tambah.php">Tambah data film</a>
		<br><br>

		<form action="" method="post">
		   <input type="text" name="keyword" size="42" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
		   <button type="submit" name="cari">Cari!</button>
		</form><br>

		<!-- navigasi -->
	   <?php if( $halamanAktif > 1 ) : ?>
		<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
	   <?php endif; ?>

		<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
			<?php if( $i == $halamanAktif ) : ?>
			 <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red"><?= $i; ?></a>
			<?php else : ?>
				<a href="?halaman=<?= $i ?>"><?= $i; ?></a>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if( $halamanAktif < $jumlahHalaman ) : ?>
		<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
	   <?php endif; ?>
   
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
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Data Ini Dihapus Slur?');">Hapus</a>
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
  </center>

</body>
</html>
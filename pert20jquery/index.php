<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$film = query("SELECT * FROM film");
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
	<!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>

	<!-- Internal CSS -->
	<style>
		body{
	        background-image: url(img/ej.png);
        }

        h1{
			font-family: georgia;
			font-weight: bold;
			font-size: 3.3em;
			font-style: italic;
			margin-top: 6px;
		}

		th{
			background-color: magenta;
			font-family: georgia;
			font-size: 18px;
			font-weight: bold;
			font-style: italic;
		}

		td{
			background-color: gold;
			font-family: georgia;
			font-style: italic;
			font-size: 22px;	
		}

		a{
			font-family: mvboli;
			font-size: 18px;
			margin: auto;
		}
		.loader{
			width: 100px;
			position: absolute;
			top: 144px;
			right: 430px;
			z-index: -1;
			display: none;
		}

		@media print{
			.logout, .tambah, .form-cari, .aksi{
				display: none;
			}
		}

	</style>

</head>
<body>

 <a href="logout.php" class="logout">Sign Out</a>
   <center>
	<h1>Daftar Film Indonesia</h1>

	<a href="tambah.php" class="tambah">Tambah data film</a>
		<br><br>

		<form action="" method="post" class="form-cari">
		   <input type="text" name="keyword" size="42" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
		   <button type="submit" name="cari" id="tombol-cari">Cari!</button>
		   <img src="img/loader2.gif" class="loader">
		</form>
		 <br>
   
   <div id="container">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th class="aksi">Aksi</th>
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
			<td class="aksi">
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
   </div>
  </center>
  
</body>
</html>
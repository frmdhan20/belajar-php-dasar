<?php 
// koneksi ke database
// urutannya ("localhost", "usernya => root", "password => (dikosongi)", "nama database");
$conn = mysqli_connect("localhost", "root", "", "phpdasar_wpu");
// $conn = .. adalah nama variabel untuk menghubungkan ke database, namanya bisa bebas suka hati programer

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM film");
// $result adalah nama variabel, nama disarankan $result sesuai ketentuan php

// ambil data (fetch) film dari object result, ada 4 cara
 // mysqli_fetch_row() // mengembalikan nilai numerik
 //mysqli_fetch_assoc() // mengembalikan array asosiatif
 //mysqli_fetch_array() // mengembalikan keduanya (array & asosiatif)
 // mysqli_fetch_object() // mengembalikan berdasarkan objek

// while ( $film = mysqli_fetch_assoc( $result )) {
// 	var_dump($film);
// }
 // while untuk melakukan perulangan, dan untuk menampilkan data dalam bentuk diatas form

// if ( !$result ) {
// 	echo "mysqli_error($conn)";
// } | if result untuk menampilkan pesan error ketika gagal menghubungkan ke database

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
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
      <?php while ( $row = mysqli_fetch_assoc( $result ) ): ?>
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
	  <?php endwhile; ?>
	</table>

</body>
</html>
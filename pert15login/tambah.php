<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if ( isset( $_POST["submit"] ) ) {

  // cek apakah data berhasil ditambahkan atau tidak
  // menggunakan sintaks javascript
    if ( tambah( $_POST ) > 0 ) {
    	echo "
    	      <script>
    	          alert('Data Berhasil Ditambahkan!');
    	          document.location.href = 'index.php';
    	      </script>
    	   	";
    } else {
    	echo "
    	      <script>
    	          alert('Data Gagal Ditambahkan!');
    	          document.location.href = 'index.php';
    	      </script>
    	   	";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah data film</title>

	<!-- Eksternal CSS -->
	<link rel="stylesheet" href="tambah.css">

</head>
<body>

	<h1>Tambah data film</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required="">
				<!-- required="" supaya user tidak bisa mengisikan field kosong di form -->
			</li>
			<li>
				<label for="produser">Sroduser : </label>
				<input type="text" name="produser" id="produser" required="">
			</li>
			<li>
				<label for="sutradara">Sutradara : </label>
				<input type="text" name="sutradara" id="sutradara" required="">
			</li>
			<li>
				<label for="tahun">Tahun : </label>
				<input type="text" name="tahun" id="tahun" required="">
			</li>
			<li>
				<label for="aktor">Aktor : </label>
				<input type="text" name="aktor" id="aktor" required="">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>
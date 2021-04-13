<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$flm = query("SELECT * FROM film WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset( $_POST["submit"] ) ) {

  // cek apakah data berhasil diubah atau tidak
  // menggunakan sintaks javascript
    if ( ubah( $_POST ) > 0 ) {
    	echo "
    	      <script>
    	          alert('Data Berhasil Diubah!');
    	          document.location.href = 'index.php';
    	      </script>
    	   	";
    } else {
    	echo "
    	      <script>
    	          alert('Data Gagal Diubah!');
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
	<title>Ubah data film</title>

	<!-- Eksternal CSS -->
	<link rel="stylesheet" href="tambah.css">

</head>
<body>

	<h1>Ubah data film</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $flm["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $flm["gambar"]; ?>">
		<ul>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required value="<?= $flm["judul"]; ?>">
				<!-- required="" supaya user tidak bisa mengisikan field kosong di form -->
			</li>
			<li>
				<label for="produser">Produser : </label>
				<input type="text" name="produser" id="produser" required value="<?= $flm["produser"]; ?>">
			</li>
			<li>
				<label for="sutradara">Sutradara : </label>
				<input type="text" name="sutradara" id="sutradara" required value="<?= $flm["sutradara"]; ?>">
			</li>
			<li>
				<label for="tahun">Tahun : </label>
				<input type="text" name="tahun" id="tahun" required value="<?= $flm["tahun"]; ?>">
			</li>
			<li>
				<label for="aktor">Aktor : </label>
				<input type="text" name="aktor" id="aktor" required value="<?= $flm["aktor"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="img/<?= $flm['gambar']; ?>" width="69"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>
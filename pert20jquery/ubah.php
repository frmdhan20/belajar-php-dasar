<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
 
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

	<!-- Internal CSS -->
	<style>
		h1{
			color: black;
			/*margin-left: -220px;*/
			margin-top: 14px; 
		}

		body{
			background-image: url(img/ej.png);
			font-family: georgia;
			font-size: 1.5em;
			font-style: italic;
		}

		form button:hover{
			background: red;
		}

		label{
			text-align: right;
			padding: 0.5em 1.5em 0.5em 0;
		}

		input{
			width: 40%;
			padding: 0.7em;
			margin-bottom: 0.5rem;
		}

		form{
			padding: 1em;
			background: #f9f9f9;
			border: 1px solid #c1c1c1;
			margin-top: 2rem;
			max-width: 804px;
			margin-left: auto;
			margin-right: auto;
			padding: 1em;
			background-image: url(img/ft.png);
		}

		form button{
			background: #042a3a;
			padding: 0.7em;
			border: 0;
			color: #fff;
			font-size: 15px;
			font-family: georgia;
			font-style: italic;
		}

		input{
			width: 85%;
			padding: 0.7em;
			margin-bottom: 0.5rem;
			font-family: georgia;
			font-size: 0.8em;
			font-style: italic;
			margin-top: 10px;
		}

		input:focus{
			outline: 3px solid lime;
		}

	</style>

</head>
<body>
  <center>
	<h1>Ubah data film</h1>
  </center>

	<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $flm["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $flm["gambar"]; ?>">

				<label for="judul">Judul</label>
				<label for="judul"> : </label>
				<input type="text" name="judul" id="judul" required value="<?= $flm["judul"]; ?>">
				<!-- required="" agar user tidak bisa mengisikan field kosong di form -->
			
				<label for="produser">Produser</label>
				<label for="produser"> : </label>
				<input type="text" name="produser" id="produser" required value="<?= $flm["produser"]; ?>">
			
				<label for="sutradara">Sutradara</label>
				<label for="sutradara"> : </label>
				<input type="text" name="sutradara" id="sutradara" required value="<?= $flm["sutradara"]; ?>">
			
				<label for="tahun">Tahun</label>
				<label for="tahun"> : </label>
				<input type="text" name="tahun" id="tahun" required value="<?= $flm["tahun"]; ?>">
			
				<label for="aktor">Aktor</label>
				<label for="aktor"> : </label>
				<input type="text" name="aktor" id="aktor" required value="<?= $flm["aktor"]; ?>">
			
				<label for="gambar">Gambar : </label><br>
				<img src="img/<?= $flm['gambar']; ?>" width="69"><br>
				<input type="file" name="gambar" id="gambar">
			
				<button type="submit" name="submit">Ubah Data!</button>
	</form>
</body>
</html>
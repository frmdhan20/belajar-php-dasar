<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

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

	<!-- Internal CSS -->
	<style>
		*{
			box-sizing: border-box;
		}

		body{
			display: block;
			background-image: url(img/eb.png);
			font-family: georgia;
			font-size: 1.5em;
			font-style: italic;
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
			background-image: url(img/eg.png);
		}

		form input{
			margin-bottom: 1rem;
			background: #fff;
			border: 1px solid #9c9c9c;
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

		form button:hover{
			background: red;
		}

		label{
			text-align: right;
			display: inline;
			padding: 0.5em 1.5em 0.5em 0;
		}

		input{
			width: 100%;
			padding: 0.7em;
			margin-bottom: 0.5rem;
			font-family: georgia;
			font-size: 0.7em;
		}

		input:focus{
			outline: 3px solid gold;
		}

		h1{
			color: black;
			/*margin-left: -220px;*/
			margin-top: 15px;
		}
	</style>

</head>
<body>
  <center>
	<h1>Tambah data film</h1>
  </center>

	<form action="" method="post" enctype="multipart/form-data">
		<label for="judul" class="first-name">Judul</label>
		<label for="judul"> : </label>
		<input type="text" name="judul" id="judul" required="">

		<label for="produser" class="last-name">Produser</label>
		<label for="produser"> : </label>
		<input type="text" name="produser" id="produser" required="">

		<label for="sutradara">Sutradara</label>
		<label for="sutradara"> : </label>
		<input type="text" name="sutradara" id="sutradara" required="">

		<label for="tahun">Tahun</label>
		<label for="tahun"> : </label>
		<input type="text" name="tahun" id="tahun" required="">

		<label for="aktor">Aktor</label>
		<label for="aktor"> : </label>
		<input type="text" name="aktor" id="aktor" required="">

		<label for="gambar">Gambar</label>
		<label for="gambar"> : </label>
		<input type="file" name="gambar" id="gambar">

		<button type="submit" name="submit">Tambah Data!</button>
	</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>POST</title>
</head>
<body>
	<?php if (isset($_POST["submit"]) ): ?>
		<h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
	<?php endif; ?>

	<form action="" method="post">
		<!-- action dan method penting dalam penggunaan post -->
		<!-- jika method action kosong maka akan tetap berada di halaman tersebut -->
		Masukkan Nama :
		<input type="text" name="nama">
		<!-- name="nama" akan menjadi key atau kunci dalam method post -->
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>
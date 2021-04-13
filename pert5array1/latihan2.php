<?php 
// perulangan pada array
// for / foreach
$angka = [99,24,83,93,24,40,45,1,22];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2 Array</title>

	<!-- Internal CSS -->
	<style>
		.kotak{
			width: 70px;
			height: 70px;
			background-color: lime;
			text-align: center;
			line-height: 50px;
			margin: 4px;
			float: left;
		}

		.clear { clear: both; }
		/*untuk menonaktifkan float float*/
	</style>

</head>
<body>

 <!-- Menampilkan array dengan html -->
 <!-- menggunakan for -->
 <?php for ( $i = 0; $i < count($angka); $i++) { ?>
 	<div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>

 <div class="clear"></div>

 <!-- array = bermakna jamak/banyak  book = bermakna tunggal -->
 <!-- menggunakan foreach -->
 <?php foreach ( $angka as $book ) { ?>
 	<div class="kotak"><?php echo $book; ?></div>
 <?php } ?>

<!-- div.clear untuk menonaktifkan float -->
 <div class="clear"></div>

 <!-- menggunakan foreach dan endforeach -->
<?php foreach ( $angka as $book ) : ?>
	<div class="kotak"><?= $book; ?></div>
<?php endforeach; ?>

</body>
</html>
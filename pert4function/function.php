<?php 
Function salam($waktu = "Datang", $nama ="Admin") {
	return "Selamat $waktu, $nama!";
}
Function ucapan($semoga = "Sehat selalu", $sapa = "Sekarang hari selasa") {
	return "Senantiasa $semoga, $sapa";
	// return = mengembalikan nilai
	// membuat function sekaligus parameternya
}
Function campuran($tanya = "Ada yang bisa kami bantu kak ?", $jangan_lupa = "Jangan lupa bahagia!"){
	return "Ada yang bisa dibantu $tanya, $jangan_lupa";
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Latihan Function</title>
 </head>
 <body>
 	<!-- ?>= adalah tag php yang disingkat -->
 	<h1><?= salam("Malam", "Fajar Ramadhan"); ?></h1><hr>

 	<h2><?= ucapan("semoga sehat selalu", "Hari ini hari selasa"); ?></h2><hr>

 	<h3><?= campuran("mencari barang yang ingin dibeli ? ", ); ?></h3>
 	<!-- jika salah satu parameter kosong otomatis mengambil nilai di function atas -->
 </body>
 </html>
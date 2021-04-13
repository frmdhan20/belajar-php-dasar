<?php
$mahasiswa = [
    ["M.Fajar Ramadhan","20 Tahun", "19132301", "Sistem Informasi", "frmdhan14@gmail.com"],
    ["Alddo Rengga","21 Tahun", "19132302","Sistem Informasi", "rngsrmna@gmail.com"],
    ["Risma Neviana","19 Tahun","19132303","Sistem Informasi Akuntansi","rsm@gmail.com"],
    ["Ayu Arifah","20 Tahun","19132304","Sistem Informasi Akuntansi","ayu@gmail.com"],
    ["Agus Feriyadi","19 Tahun","19132305","Teknik Informatika","agus@gmail.com"],
    ["Tri Bagus Sadewo","20 Tahun","19132306","Teknik Informatika","bagus@gmail.com"],
    ["Riski Novriansyah","18 Tahun","19132307","Sistem Informasi","riski@gmail.com"],
    ["Lucky Safira Zulukiah","21 Tahun","19132308","Sistem Informasi Akuntansi","lucky@gmail.com"],
    ["Dedy Hariyanto","22 Tahun","19132309","Teknik Informatika","dedy@gmail.com"],

];
  // menampilkan banyak data mahasiswa

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Data Mahasiswa</title>

 	<!-- Internal CSS -->
 	<style>
 		.hai{
 			display: inline-block;
 			font-family: consolas;
 			font-weight: lighter;
 		}
 	</style>
 </head>
 <body>

 	<h1>Data Mahasiswa</h1>

<!-- Menampilkan array php dengan html -->
<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul class="hai">
 		<li>Nama Mahasiswa : <?= $mhs[0]; ?></li>
 		<li>Umur : <?= $mhs[1]; ?></li>
 		<li>NIM : <?= $mhs[2]; ?></li>
 		<li>Jurusan : <?= $mhs[3]; ?></li>
 		<li>E-Mail : <?= $mhs[4]; ?></li>
 	</ul>
 <?php endforeach; ?>

 </body>
 </html>
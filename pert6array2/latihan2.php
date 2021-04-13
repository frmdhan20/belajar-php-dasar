<?php 
// membuat data mahasiswa

// $mahasiswa = [
// 	["Hary Aspriyono", "22 Tahun", "19132301", "Sistem Informasi", "hary@gmail.com"],
//     ["Riski Ardiansyah", "21 Tahun", "19132302", "Sistem Informasi", "risky@gmail.com"],
//     ["Ayu Andira", "20 Tahun", "19132303", "Teknik Informatika", "ayu@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
// array associative tidak urut tidak masalah
$mahasiswa = [
	[
       "umur" => "22 Tahun",
       "nim" => "19132301",
       "email" => "frmdhan11@gmail.com",
       "nama" => "Fajar Ramadhan",
       "jurusan" => "Sistem Informasi",
       "gambar" => "H4.jpg"
    ],
    [
       "nama" => "Fajri Ramadhan",
       "umur" => "21 Tahun",
       "nim" => "19132302",
       "email" => "fajri@gmail.com",
       "jurusan" => "Sistem Informasi",
       "gambar" => "F1.jpg"
       // array tugas adalah contoh array dalam array
       // "tugas" => [89, 77, 90, 65]
    ],
    [
       "nama" => "Ahmad Ramadhan",
       "umur" => "20 Tahun",
       "nim" => "19132303",
       "email" => "ahmad@gmail.com",
       "jurusan" => "Sistem Informasi",
       "gambar" => "G.jpg"
    ],
    [
       "nama" => "Slamet Ramadhan",
       "umur" => "19 Tahun",
       "nim" => "19132304",
       "email" => "slamet@gmail.com",
       "jurusan" => "Sistem Informasi Akuntansi",
       "gambar" => "M6.jpg"
    ],
    [
       "nama" => "Nur Maulana",
       "umur" => "21 Tahun",
       "nim" => "19132305",
       "email" => "nur@gmail.com",
       "jurusan" => "Teknik Informatika",
       "gambar" => "N6.jpg"
    ],
    [
       "nama" => "Riski Setiawan",
       "umur" => "22 Tahun",
       "nim" => "19132306",
       "email" => "riski@gmail.com",
       "jurusan" => "Sistem Informasi",
       "gambar" => "N8.jpg"
    ],
    [
       "nama"     => "Agus Fery",
       "umur"     => "19 Tahun",
       "nim"      => "19132307",
       "email"    => "agus@gmail.com",
       "jurusan"  => "Sistem Informasi",
       "gambar"   => "ww.jpg"
    ],
];

 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Data Mahasiswa</title>

 	<!-- Internal CSS -->
 	<style>
 		.mhs{
 			display: inline-block;
 			font-family: consolas;
 			font-size: 20px;
 		}

    body{
      background-image: url(img/m.png);
    }
 	</style>

 </head>
 <body>

 	<h1>Data Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>

 	<ul class="mhs">
 		<li>
 			<img src="img/<?= $mhs["gambar"]; ?>">
 		</li>
 		<li>Nama : <?= $mhs["nama"]; ?></li>
 		<li>Umur : <?= $mhs["umur"]; ?></li>
 		<li>NIM : <?= $mhs["nim"]; ?></li>
 		<li>Jurusan : <?= $mhs["email"]; ?></li>
 		<li>E-Mail : <?= $mhs["jurusan"]; ?></li>
 	</ul>

 <?php endforeach; ?>
 
 </body>
 </html>
 
<?php 
// Web Programming UNPAS
// Ini adalah komentar di php
 /* ini komentar untuk banyak baris 
 */

 // Pertemuan 2 PHP Dasar
 // Sintaks PHP

 // Standar Output
 // echo, print
 // print_r
 // var_dump

 echo "Asral Khadafi<br>";
 print "Sulaiman Al Khazab<br>";
 print_r("Risma Neviana<br>");
 var_dump("Muhammad Fajar Ramadhan");

 // Penulisan sintaks dalam PHP
 // 1. PHP didalam HTML
 // 2. HTML didalam PHP

 // Variabel dan Tipe Data
 // Variabel
 // Tidak boleh diawali dengan angka, tapi boleh mengandung angka
 
 /*
 $nama = "Nurul Huda";

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">e
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Hallo, Selamat Datang <?php echo $nama; ?></h1>
	<p><?php echo "Ini adalah contoh paragraf <hr>"; ?></p>

</body>
</html>
*/

$nama1 = "Siti Aisyah";

echo "<h1><hr>Hallo Nama Saya $nama1</h1>";

// Operator 
// Aritmatika
// + - * /

/*
$x = 39;
$y = 72;

echo $x * $y;
*/

// Penggabung string / Concatenation / concat
// .

$nama_depan = "Muhammad Fajar";
$nama_belakang = "Ramadhan";
echo $nama_depan ." ". $nama_belakang;

// Operator Assignment
// =, +=, -=, *=, /=, %=, .=

/*
$x = 21;
$y -= 89;
echo $x; 
*/

$nama = "Asral";
$nama .= " ";
$nama .= "Khadafi";
print"<br><br>";
echo $nama;
print "<hr>";

// Operator Logika
// &&, ||, !
$x = 12;
var_dump($x < 37 && $x % 19 == 0);
echo "<br>";
var_dump($x < 55 || $x % 36 == 3);

?>
<?php 
// array
// variabel yang dapat meiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key & value
// key-nya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret", "April"];
// contoh array tipe data berbeda
$arr1 = [123, "Kurnia Sandi", false];

// menampikan array
// var_dump() atau print_r()
 echo "<fieldset><legend><h3>Latihan Array</h3></legend>";
var_dump($hari);
 echo "<hr>";
print_r($bulan);
 echo "<hr>";

 // menampilkan elemen pada array
 // urutan index > 0,1,2,3
 echo $arr1[0];
  echo "<hr>";
 echo $bulan[2];
  echo "</fieldset>";

 // menambahkan elemen baru pada array
  echo "<br><fieldset><legend><h3>Menambahkan Elemen pada array</h3></legend>";
var_dump($hari);
$hari[] = "KAMIS";
$hari[] = "JUM'AT";
  echo "<hr>";

var_dump($hari);

echo "</fieldset>";

 ?>
<?php 
// Variabel scope / lingkup variabel
// variabel lokal & var global
$x = 99;

function tampilx(){
	global $x;
	echo $x;
}

tampilx();
  echo "<hr>";

// SUPERGLOBALS
// variabel global milik php
// merupakan Array Associative
  echo $_SERVER["SERVER_NAME"];
   echo "<hr>";

 // $_GET
 // menampilkan $_GET
 // ["nama"] => adalah array kunci/key
 // cara menambah data $_GET bisa melalui url, contohnya ?nama=fajar ramadhan&nim=19132301
 // http://localhost/phpdasar_wpu/pert7getnpost/latihan1.php?nama=Fajar%20Ramadhan&nim=19132301

 // $_GET["nama"] = "Risma Neviana";
 // $_GET["nim"] = "19132201";
  var_dump($_GET);
  echo "<hr>";

 ?>
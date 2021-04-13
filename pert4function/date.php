<?php 
    // date untuk Menampilkan tanggal
    // l=hari, d=tanggal, M=bulan, Y=tahun 
    echo date("l, d-M-Y");
     echo "<hr>";

 // Time
 // UNIX Timestamp / EPOCH Time
 // detik yang sudah berlalu sejak 1 janari 1970
 // echo time();

// Menampilkan nama hari 100 hari kedepan
 echo "Nama hari 100 hari kedepan adalah : ";
 echo date("l, d M Y", time()+60*60*24*100);
  echo "<hr>";

  // mktime
  // membuat sendiri detik
  // mktime(0,0,0,0,0,0)
  // jam, menit, detik, bulan, tanggal, tahun
  // mengetahui nama & jumlah detik hari pada tanggal masa lalu
  echo "Nama hari di masa lalu : ";
  echo date("l, d M Y", mktime(0,0,0,12,26,2000));
   echo "<hr>";

  // strtotime
  echo date("l", strtotime("26 Desember 2000"));
 ?>
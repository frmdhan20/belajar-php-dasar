<?php 
$film = [
  [
  	 "judul" => "Dilan 1991",
  	 "produser" => "Fajar Nugros",
  	 "sutradara" => "Pidi Baiq",
  	 "tahun" => "2019",
  	 "aktor" => "Iqbal Ramadhan",
  	 "gambar" => "dln.jpg"
  ],
  [
  	 "judul" => "Dua Garis Biru",
  	 "produser" => "Gina S.Noer",
  	 "sutradara" => "Fajar Nugros",
  	 "tahun" => "2019",
  	 "aktor" => "Angga Aldi Yunanda",
  	 "gambar" => "dgb.jpg"
  ],
  [
  	 "judul" => "Rudy Habibie",
  	 "produser" => "Manoj Punjabi",
  	 "sutradara" => "Mouly Surya",
  	 "tahun" => "2013",
  	 "aktor" => "Reza Rahadian",
  	 "gambar" => "rh.jpg"
  ],
  [
  	 "judul" => "Terlalu Tampan",
  	 "produser" => "Rudi Kawilarang",
  	 "sutradara" => "Joko Anwar",
  	 "tahun" => "2018",
  	 "aktor" => "Ari Irham",
  	 "gambar" => "tt.jpg"
  ],
  [
  	 "judul" => "After Meet You",
  	 "produser" => "Arifin C.Noer",
  	 "sutradara" => "Teguh Karya",
  	 "tahun" => "2019",
  	 "aktor" => "Ari Irham",
  	 "gambar" => "amy.jpg"
  ],
  [
  	 "judul" => "Imperfect",
  	 "produser" => "Garin Nugroho",
  	 "sutradara" => "Riri Riza",
  	 "tahun" => "2019",
  	 "aktor" => "Reza Rahadian",
  	 "gambar" => "ip.jpg"
  ]
];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>GET</title>
 </head>
 <body>

 	<h1>Daftar Film Indonesia</h1>

 	<ul>
 	  <?php foreach ( $film as $bebas ) : ?>		 
 		<li>
 			<a href="latihan2get.php?judul= <?= $bebas["judul"]; ?>&produser=<?=$bebas["produser"] ?>&sutradara=<?=$bebas["sutradara"] ?>&tahun=<?=$bebas["tahun"] ?>&aktor=<?=$bebas["aktor"] ?>&gambar=<?=$bebas["gambar"] ?>"> <?= $bebas["judul"]; ?></a>
 		</li>
      <?php endforeach; ?>
 	</ul>
 
 </body>
 </html>
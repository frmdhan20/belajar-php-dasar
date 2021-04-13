<?php 
// Kasus 2 => Komponen dalam film
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
 	<title>Daftar Film</title>

 	<!-- Internal CSS -->
 	<style>
 		.film{
 			display: inline-block;
 			font-family: consolas;
 			font-size: 21px;
 		}

 		h1{
 			font-size: 43px;
 			margin-left: 6%;
 			font-family: forte;
 		}

 		body{
 			background-image: url(img/ft.png);
 		}
 	</style>

 </head>
 <body>

 	<h1>Daftar Film Indonesia</h1>

 <?php foreach ( $film as $bebas ) : ?>
 		
 	<ul class="film">
 		<li>
 			<img src="img/<?= $bebas["gambar"]; ?>">
 		</li>
 		<li>Judul Film : <?= $bebas["judul"]; ?></li>
 		<li>Produser : <?= $bebas["produser"]; ?></li>
 		<li>Sutradara : <?= $bebas["sutradara"]; ?></li>
 		<li>Tahun : <?= $bebas["tahun"]; ?></li>
 		<li>Aktor : <?= $bebas["aktor"]; ?></li>
 	</ul>

 <?php endforeach; ?>
 
 </body>
 </html>
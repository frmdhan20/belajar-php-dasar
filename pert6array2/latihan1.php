<?php 
// array
// membuat array
// cara lama
$nama = array("Fajar Ramadhan", "Risma Neviana", "Lucky Safira");
// cara baru
$hari =["Juni", "Juli", "Maret", "April"];
// array beda tipe data
$arr = [2000, "Fery Ardiansyah", true];

// menampilkan array
// versi debugging atau versi developer
 echo "<fieldset><legend>Contoh Array</legend>";
var_dump($nama);
  echo "<hr>";
print_r($hari);
  echo "<hr>";

// menampilkan 1 elemen pada array
echo $arr[0];
  echo "<hr>";
echo $nama[2];
  echo "</fieldset><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan Array</title>

	<!-- Internal CSS -->
	<style>
		.kotak{
			width: 70px;
			height: 70px;
			background-color: lime;
			text-align: center;
			/*isi line height sama seperti height agar tulisan ketengah*/
			line-height: 70px;
			margin: 7px;
			float: left;
			transform: 1s;
		}

		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear{
			clear: both;
		}
	</style>

</head>
<body>

<?php
 $angka = [[1,2,3],
           [4,5,6],
           [7,8,9,],
           [12,44,98],
        ];
?>

<?php foreach ( $angka as $bebas ) : ?>
	<?php foreach ( $bebas as $bebas2) : ?>

	  <div class="kotak"><?= $bebas2 ?></div>

    <?php endforeach; ?>
      <div class="clear"></div>
<?php endforeach; ?>
	

</body>
</html>
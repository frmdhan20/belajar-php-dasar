<?php 
// koneksi ke database
// urutan ("localhost", "usernya => root", "password => (dikosongi)", "nama database");
$conn = mysqli_connect("localhost", "root", "", "phpdasar_wpu");

function query( $query ) {
	global $conn;
		$result = mysqli_query( $conn, $query);
		$rows = [];
	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah( $data ) {

	global $conn;
	// ambil data dari tiap elemen dalam form
	 $judul 	= htmlspecialchars($data["judul"]);
	 $produser 	= htmlspecialchars($data["produser"]);
	 $sutradara = htmlspecialchars($data["sutradara"]);
	 $tahun 	= htmlspecialchars($data["tahun"]);
	 $aktor 	= htmlspecialchars($data["aktor"]);
	 $gambar 	= htmlspecialchars($data["gambar"]);
	  // htmlspecialchars supaya user tidak bisa memasukkan tag html didalam form kita

	   // query insert data
	 $query = "INSERT INTO film
	              VALUES
	            ('', '$judul', '$produser', '$sutradara', '$tahun', '$aktor', '$gambar')";
	   // urutan id(dikosongi), judul, prosuder, dst

	      mysqli_query($conn, $query);

	      return mysqli_affected_rows( $conn );
}

function hapus( $id ) {
	global $conn;
	mysqli_query( $conn, "DELETE FROM film WHERE id = $id");

	return mysqli_affected_rows( $conn );
}
 ?>
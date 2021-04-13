<?php 
// koneksi ke database
// urutannya ("localhost", "usernya => root", "password => (dikosongi)", "nama database");
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

 ?>
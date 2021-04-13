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
	 // htmlspecialchars supaya user tidak bisa memasukkan tag html didalam form kita

	 // upload gambar
	 $gambar = upload();
	 if( !$gambar ) {
	 	return false;
	 }

	   // query insert data
	 $query = "INSERT INTO film
	              VALUES
	            ('', '$judul', '$produser', '$sutradara', '$tahun', '$aktor', '$gambar')";
	   // urutan id(dikosongi), judul, prosuder, dst

	      mysqli_query($conn, $query);

	      return mysqli_affected_rows( $conn );
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ( $error === 4 ) {
		echo "<script>
		       alert('Pilih gambar terlebih dahulu slur!');
		      </script>";
		  return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
		       alert('Yang anda upload bukan gambar lho slur!');
		      </script>";
		  return false;
	}

	// cek jika ukuran gambar terlalu besar
	if ( $ukuranFile > 1300000 ) {
		echo "<script>
		       alert('Ukuran gambar terlalu besar slur!');
		      </script>";
		  return false;
	}

	// jika lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}

function hapus( $id ) {
	global $conn;
	mysqli_query( $conn, "DELETE FROM film WHERE id = $id");

	return mysqli_affected_rows( $conn );
}

function ubah( $data ) {
	global $conn;
	  // ambil data dari tiap elemen dalam form
	 $id 		 = $data["id"];
	 $judul 	 = htmlspecialchars($data["judul"]);
	 $produser 	 = htmlspecialchars($data["produser"]);
	 $sutradara  = htmlspecialchars($data["sutradara"]);
	 $tahun      = htmlspecialchars($data["tahun"]);
	 $aktor      = htmlspecialchars($data["aktor"]);
	 $gambarLama = htmlspecialchars($data["gambarLama"]);
	 // htmlspecialchars supaya user tidak bisa memasukkan tag html didalam form kita

     // cek apakah user pilih gambar baru atau tidak
     if ( $_FILES['gambar']['error'] === 4 ) {
     	$gambar = $gambarLama;
     } else {
     	$gambar = upload();
     }
     
	   // query insert data
	 $query = "UPDATE film SET
	             judul 		= '$judul',
	             produser	= '$produser',
	             sutradara 	= '$sutradara',
	             tahun 		= '$tahun',
	             aktor 		= '$aktor',
	             gambar 	= '$gambar'
	           WHERE id = $id  ";

	      mysqli_query($conn, $query);

	      return mysqli_affected_rows( $conn );
}

function cari( $keyword ) {
	$query = "SELECT * FROM film
	            WHERE
	          judul LIKE '%$keyword%' OR
	          produser LIKE '%$keyword%' OR
	          sutradara LIKE '%$keyword%' OR
	          tahun LIKE '%$keyword%' OR
	          aktor LIKE '%$keyword%'
	          ";
    return query($query);
}

function registrasi( $data ) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query( $conn, "SELECT username FROM user WHERE username = '$username'");

	if ( mysqli_fetch_assoc($result) ) {
		echo "<script>
		       alert('Username sudah terdaftar!');
		      </script>";
		return false;
	}

	// cek konfirmasi password
	if ( $password !== $password2 ) {
		echo "<script>
		       alert('Konfirmasi password tidak sesuai');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash( $password, PASSWORD_DEFAULT);

	// tambahkan user baru ke database
	mysqli_query( $conn, "INSERT INTO user VALUES('', '$username', '$password')" );

	return mysqli_affected_rows( $conn );
}
 ?>
<?php 
session_start();
require 'functions.php';

// cek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id  = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}

if ( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

// cek apakah tombol submit sudah ditekan
if ( isset($_POST["login"]) ) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query( $conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if ( mysqli_num_rows($result) === 1 ) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);
		if ( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if ( isset($_POST['remember']) ) {
				// buat cookie
			    setcookie( 'id', $row['id'], time()+70 );
			    setcookie( 'key', hash('sha256', $row['username']), time()+70 );
			}

			header("Location: index.php");
			exit;
		}
	  }

	  $error = true;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>

	<!-- Eksternal CSS -->
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<?php if( isset($error) ) : ?>
      <p class="salah">Username / Password salah</p>
	<?php endif; ?>

	 <form action="" method="post">
	 	<div class="login">
			
			<h2>Silahkan login terlebih dahulu!</h2>
			 <div class="input-group">
			 	<input type="text" name="username" id="username" required="">
			 	<span>Username</span>
			 </div>
			 <div class="input-group">
			 	<input type="password" name="password" id="password" required="">
			 	<span>Password</span>
			 </div>
			 <div class="input-group">
	 			<input class="remember" type="checkbox" name="remember" id="remember">
	 			<span for="remember">Remember me</span>
			 </div>
			 <div class="input-group">
			 	<button type="submit" name="login" value="Login">Sign in!</button>
			 </div>

		</div>
	 </form>
	
</body>
</html>
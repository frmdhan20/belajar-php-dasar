<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

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
      <p class="salah">Username / Password salah slur</p>
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
			 	<button type="submit" name="login" value="Login">Sign in!</button>
			 </div>

		</div>
	</form>
	
</body>
</html>
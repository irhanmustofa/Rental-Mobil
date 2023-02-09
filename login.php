<?php 
include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GIS-Login</title>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
</head>
<body class="" style="background-image:url(assets/img/home_mobil.png);background-size: cover;height: 100vh;">
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-4 mt-5">
				<form method="post" class="bg-white rounded p-4 shadow mt-5">
					<div class="mb-3 text-center">
						<img src="assets/img/logo.png" width="40%">
					</div>
					<div class="mb-3">
						<label class="form-label">USERNAME</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="mb-3">
						<label class="form-label">PASSWORD</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="mb-3">
						<button class="btn btn-primary" name="masuk">MASUK</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php 
if (isset($_POST["masuk"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = sha1($password);

	$cek = $koneksi -> query ("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

	$hitung = $cek->num_rows;

	if ($hitung==1) {
		$login = $cek->fetch_assoc();
		$_SESSION["username"] = $login;
		echo "<script>alert('Login berhasil,selamat datang')</script>";
		echo "<script>location = 'admin/'</script>";
		
	}else{
		echo "<script>alert('username atau password salah')</script>";
		echo "<script>location = 'login.php'</script>";
	}
}

?>
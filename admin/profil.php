<?php 
include "header.php";


//mengambil data dari database berdasarkan id yang dipilih
$ambil_admin = $koneksi -> query("SELECT * FROM user WHERE id_user = '$id_user'");
$admin = $ambil_admin -> fetch_assoc();

// echo "<pre>";
// print_r ($admin);
// echo "</pre>";

?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Ubah Profil</h4>
		<p class="card-category ms-3">Masukkan Data Yang Ingin Diubah</p>

		<div class="card-body">
			<form method="post" enctype="">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $admin["nama"] ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $admin["username"] ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="Password" class="form-control" name="password">
							<p class="text-muted">Kosongkan Jika Password Tidak Diubah</p>
						</div>
					</div>
				</div>
				<div class="d-grid gap-2 d-md-block">
					<button class="btn btn-primary" name="simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 	
if (isset($_POST["simpan"])) {
	$nama = $_POST["nama"];
	$user = $_POST["username"];
	$password = $_POST["password"];

		//merubah data tanpa merubah file
	if (empty($file)) {
		if (empty ($_POST["password"])) {
			$koneksi -> query("UPDATE user SET 
				nama = '$nama',
				username = '$user' WHERE id_user = '$id_user'");
		}
		else{
			$password = sha1($password);
			$koneksi -> query("UPDATE user SET 
				nama = '$nama',
				username = '$user',
				password = '$password' WHERE id_user = '$id_user'");
		}

	}

		//merubah data sekaligus merubah file
	else{
		if (empty($_POST["password"])) {
			$koneksi -> query("UPDATE user SET
				nama = '$nama',
				username = '$user' WHERE id_user = '$id_user'");
		}
		else{
			$password = sha1($password);
			$koneksi -> query("UPDATE user SET
				nama = '$nama',
				username = '$user',
				password = '$password' WHERE id_user = '$id_user'");

		}
	}
	$ambil_admin = $koneksi -> query("SELECT * FROM user WHERE id_user = '$id_user'");
	$admin = $ambil_admin -> fetch_assoc();
	$_SESSION['username'] = $admin;

	echo "<script>alert ('Data berhasil diubah')</script>";
	echo "<script>location = 'profil.php'</script>";
}



include "footer.php";
?>
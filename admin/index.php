<?php 
include "header.php";
$ambil_mobil = $koneksi -> query("SELECT * FROM mobil");
$jumlah_mobil = mysqli_num_rows($ambil_mobil);

$ambil_wisata = $koneksi -> query("SELECT * FROM wisata");
$jumlah_wisata = mysqli_num_rows($ambil_wisata);

$id_identitas = 1;
$ambil_identitas = $koneksi -> query("SELECT * FROM identitas WHERE id_identitas = '$id_identitas'");
$identitas = $ambil_identitas -> fetch_assoc();

?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Dashboard</h4>
		<p class="card-category ms-3">Informasi data mobil</p>

		<div class="card-body">
			<div class="row">
				<div class="col-md-4">
					<div class="card text-bg-success mb-3">
						<div class="card-header">Jumlah Mobil</div>
						<div class="card-body">
							<h5 class="card-title">Jumlah Seluruh Mobil</h5>
							<h1 class="card-text"><?php echo $jumlah_mobil ?></h1>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-bg-primary mb-3">
						<div class="card-header">Jumlah Paket Wisata</div>
						<div class="card-body">
							<h5 class="card-title">Total Jumlah Paket Wisata</h5>
							<h1 class="card-text"><?php echo $jumlah_wisata ?></h1>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>


	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Ubah Identitas</h4>
		<p class="card-category ms-3">Masukkan Data Informasi Identitas</p>

		<div class="card-body">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">No HP/Whatsapp</label>
							<input type="text" class="form-control" name="no_hp" value="<?php echo $identitas["no_hp"]; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">No Rekening/Atas Nama</label>
							<input type="text" class="form-control" name="rekening" value="<?php echo $identitas["rekening"]; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" value="<?php echo $identitas["alamat"]; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Link-Wa</label>
							<input type="text" class="form-control" name="link_wa" value="<?php echo $identitas["link_wa"]; ?>">
						</div>
						
					</div>
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Banner</label><br>
							<input type="file" class="form-control" name="banner">
							<img src="../assets/img/<?php echo $identitas["banner"]; ?>" width="200">
						</div>
						
					</div>
				</div>
				<div class="d-grid gap-2 d-md-block">
					<button class="btn btn-primary" name="simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>


<?php 
if (isset($_POST["simpan"])) {
	$no_hp = $_POST["no_hp"];
	$rekening = $_POST["rekening"];
	$alamat = $_POST["alamat"];
	$link_wa = $_POST["link_wa"];
	
	$banner = $_FILES["banner"]["name"];
	$file = $_FILES["banner"]["tmp_name"];

	//merubah data tanpa merubah file
	if (empty($file)) {
		$koneksi->query("UPDATE identitas SET 
			no_hp = '$no_hp',
			rekening = '$rekening',
			alamat = '$alamat',			
			link_wa = '$link_wa' WHERE id_identitas = '$id_identitas'");
	}

	//merubah data sekaligus merubah file
	else {
		$koneksi->query("UPDATE identitas SET
			no_hp = '$no_hp',
			rekening = '$rekening',
			alamat = '$alamat',			
			link_wa = '$link_wa',
			banner = '$banner' WHERE id_identitas = '$id_identitas'");

		move_uploaded_file($file, "../assets/img/$banner");
	}

	echo "<script>alert ('Data berhasil diubah')</script>";
	echo "<script>location = 'index.php'</script>";
}


include "footer.php";
?>
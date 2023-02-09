<?php 
include "header.php";

$id_wisata = $_GET["id"];
$ambil_wisata = $koneksi -> query("SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
$wisata = $ambil_wisata -> fetch_assoc();
?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Ubah Paket Wisata</h4>
		<p class="card-category ms-3">Masukkan Data Paket Wisata Yang Ingin Di Ubah</p>

		<div class="card-body">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Nama Paket Wisata</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $wisata["nama"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Deskripsi</label>
							<input type="text" class="form-control" name="deskripsi" value="<?php echo $wisata["deskripsi"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga</label>
							<input type="text" class="form-control" name="harga_wisata" value="<?php echo $wisata["harga_wisata"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Gambar</label>
							<img src="../assets/img/wisata/<?php echo $wisata["gambar"]; ?>" width="100">
							<input type="file" class="form-control" name="gambar">

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
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga_wisata"];
	$gambar = $_FILES["gambar"] ["name"];
	$file = $_FILES["gambar"] ["tmp_name"];

		//merubah data tanpa merubah file
	if (empty($file)) {
		$koneksi -> query("UPDATE wisata SET 
			nama = '$nama',
			deskripsi = '$deskripsi', 
			harga_wisata = '$harga' WHERE id_wisata = '$id_wisata'");
	}

		//merubah data sekaligus merubah file
	else{
		$koneksi -> query("UPDATE wisata SET
			nama = '$nama',
			deskripsi = '$deskripsi',
			harga_wisata = '$harga',			
			gambar = '$gambar' WHERE id_wisata = '$id_wisata'");

		move_uploaded_file($file, "../assets/img/wisata/$gambar");
	}

	echo "<script>alert ('Data berhasil diubah')</script>";
	echo "<script>location = 'wisata_tampil.php'</script>";
}
include "footer.php";
?>
<?php
include "header.php";

$id_mobil = $_GET["id"];
$ambil_mobil = $koneksi->query("SELECT * FROM mobil WHERE id_mobil = '$id_mobil'");
$mobil = $ambil_mobil->fetch_assoc();
?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Ubah Data Mobil</h4>
		<p class="card-category ms-3">Masukkan Data Mobil Yang Ingin Di Ubah</p>

		<div class="card-body">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Nama Mobil</label>
							<input type="text" class="form-control" name="nama_mobil" value="<?php echo $mobil["nama_mobil"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi Pertama</label>
							<input type="text" class="form-control" name="durasi1" value="<?php echo $mobil["durasi1"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi Kedua</label>
							<input type="text" class="form-control" name="durasi2" value="<?php echo $mobil["durasi2"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi Ketiga</label>
							<input type="text" class="form-control" name="durasi3" value="<?php echo $mobil["durasi3"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket pertama durasi ke-1</label>
							<input type="text" class="form-control" name="harga1" value="<?php echo $mobil["harga1"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket pertama durasi ke-2</label>
							<input type="text" class="form-control" name="harga2" value="<?php echo $mobil["harga2"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket pertama durasi ke-3</label>
							<input type="text" class="form-control" name="harga3" value="<?php echo $mobil["harga3"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Kedua durasi ke-1 </label>
							<input type="text" class="form-control" name="harga4" value="<?php echo $mobil["harga4"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Kedua durasi ke-2</label>
							<input type="text" class="form-control" name="harga5" value="<?php echo $mobil["harga5"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Kedua durasi ke-3</label>
							<input type="text" class="form-control" name="harga6" value="<?php echo $mobil["harga6"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Ketiga durasi ke-1</label>
							<input type="text" class="form-control" name="harga7" value="<?php echo $mobil["harga7"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Ketiga durasi ke-2</label>
							<input type="text" class="form-control" name="harga8" value="<?php echo $mobil["harga8"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga paket Ketiga durasi ke-3</label>
							<input type="text" class="form-control" name="harga9" value="<?php echo $mobil["harga9"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Foto</label><br>
							<img src="../assets/img/mobil/<?php echo $mobil["foto_mobil"]; ?>" width="100">
							<input type="file" class="form-control" name="foto_mobil">

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
	$nama = $_POST["nama_mobil"];
	$nopol = $_POST["no_polisi"];
	$deskripsi = $_POST["deskripsi"];
	$fasilitas = $_POST["fasilitas"];

	$foto = $_FILES["foto_mobil"]["name"];
	$file = $_FILES["foto_mobil"]["tmp_name"];

	//merubah data tanpa merubah file
	if (empty($file)) {
		$koneksi->query("UPDATE mobil SET 
			nama_mobil = '$nama',
			no_polisi = '$nopol',
			deskripsi = '$deskripsi',			
			fasilitas = '$fasilitas' WHERE id_mobil = '$id_mobil'");
	}

	//merubah data sekaligus merubah file
	else {
		$koneksi->query("UPDATE mobil SET
			nama_mobil = '$nama',
			no_polisi = '$nopol',
			deskripsi = '$deskripsi',			
			fasilitas = '$fasilitas',
			foto_mobil = '$foto' WHERE id_mobil = '$id_mobil'");

		move_uploaded_file($file, "../assets/img/mobil/$foto");
	}

	echo "<script>alert ('Data berhasil diubah')</script>";
	echo "<script>location = 'mobil_tampil.php'</script>";
}
include "footer.php";
?>
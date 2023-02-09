<?php 
include "header.php";


?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Input Paket Wisata</h4>
	
		<div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Nama Paket Wisata</label>
							<input type="text" class="form-control" name="nama" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Deskripsi</label>
							<input type="text" class="form-control" name="deskripsi" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga</label>
							<input type="text" class="form-control" name="harga_wisata" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Upload Gambar</label>
							<input type="file" class="form-control" name="gambar" required="required">
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
	$harga_wisata = $_POST["harga_wisata"];

	$gambar = $_FILES["gambar"]["name"];
	$file = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($file, "../assets/img/wisata/$gambar");

	$koneksi->query("INSERT INTO wisata (nama,deskripsi,harga_wisata,gambar) VALUES('$nama','$deskripsi','$harga_wisata','$gambar')");

	echo "<script>alert ('Data ditambahkan')</script>";
	echo "<script>location = 'wisata_tampil.php'</script>";
}

include "footer.php";
?>
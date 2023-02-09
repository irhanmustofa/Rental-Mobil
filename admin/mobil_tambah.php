<?php
include "header.php";


?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Input Data Mobil</h4>
		<p class="card-category ms-3">Masukkan Data Mobil</p>

		<div class="card-body">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-6">
						<div class="mb-3">
							<label class="form-label">Nama Mobil</label>
							<input type="text" class="form-control" name="nama_mobil" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi pertama</label>
							<!-- <textarea class="form-control" name="durasi1" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="durasi1" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi kedua</label>
							<!-- <textarea class="form-control" name="durasi2" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="durasi2" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Durasi ketiga</label>
							<!-- <textarea class="form-control" name="durasi3" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="durasi3" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil tanpa supir durasi pertama</label>
							<!-- <textarea class="form-control" name="harga1" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga1" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil tanpa supir durasi kedua</label>
							<!-- <textarea class="form-control" name="harga2" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga2" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil tanpa supir durasi ketiga</label>
							<!-- <textarea class="form-control" name="harga3" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga3" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir durasi pertama</label>
							<!-- <textarea class="form-control" name="harga1" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga4" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir durasi kedua</label>
							<!-- <textarea class="form-control" name="harga2" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga5" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir durasi ketiga</label>
							<!-- <textarea class="form-control" name="harga3" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga6" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir + BBM durasi pertama</label>
							<!-- <textarea class="form-control" name="harga1" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga7" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir + BBM durasi kedua</label>
							<!-- <textarea class="form-control" name="harga2" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga8" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Harga mobil + supir + BBM durasi ketiga</label>
							<!-- <textarea class="form-control" name="harga3" cols="30" rows="2"></textarea> -->
							<input type="text" class="form-control" name="harga9" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Upload Foto</label>
							<input type="file" class="form-control" name="foto_mobil" required="required">
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
	$durasi1 = $_POST["durasi1"];
	$durasi2 = $_POST["durasi2"];
	$durasi3 = $_POST["durasi3"];
	$harga1 = $_POST["harga1"];
	$harga2 = $_POST["harga2"];
	$harga3 = $_POST["harga3"];
	$harga4 = $_POST["harga4"];
	$harga5 = $_POST["harga5"];
	$harga6 = $_POST["harga6"];
	$harga7 = $_POST["harga7"];
	$harga8 = $_POST["harga8"];
	$harga9 = $_POST["harga9"];

	$foto = $_FILES["foto_mobil"]["name"];
	$file = $_FILES["foto_mobil"]["tmp_name"];
	move_uploaded_file($file, "../assets/img/mobil/$foto");

	$koneksi->query("INSERT INTO mobil (nama_mobil,durasi1,durasi2,durasi3,harga1,harga2,harga3,harga4,harga5,harga6,harga7,harga8,harga9,foto_mobil) VALUES('$nama','$durasi1','$durasi2','$durasi3','$harga1','$harga2','$harga3','$harga4','$harga5','$harga6','$harga7','$harga8','$harga9','$foto')");

	echo "<script>alert ('Data ditambahkan')</script>";
	echo "<script>location = 'mobil_tampil.php'</script>";
}

include "footer.php";
?>
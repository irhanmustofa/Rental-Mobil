<?php 
include "header.php";
$id_kategori = $_GET["id"];
$ambil_kategori_paket = $koneksi -> query("SELECT * FROM kategori_paket WHERE id_kategori = '$id_kategori'");
$kategori_paket = $ambil_kategori_paket ->fetch_assoc();

?>
<div class="row">
	<div class="card mt-4">
		<h4 class="card-title mt-3 ms-3">Input Data Kategori Paket</h4>
		<p class="card-category ms-3">Masukkan Data Kategori Paket</p>

		<div class="card-body">
			<div class="row">
				<div class="col-sm-8">
					<form method="post">
						<div class="mb-3">
							<label class="form-label">Kode Kategori</label>
							<input type="text" class="form-control" name="kode_kategori" value="<?php echo $kategori_paket["kode_kategori"]; ?>" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Kategori</label>
							<input type="text" class="form-control" name="nama_kategori" value="<?php echo $kategori_paket["nama_kategori"]; ?>" required="required">
						</div>
						<div class="d-grid gap-2 d-md-block">
							<button class="btn btn-primary" name="simpan">Simpan</button>
						</div>
					</form>

				</div>
			</div>
			
		</div>
	</div>
</div>

<?php 
if (isset($_POST["simpan"])) {
	$kode = $_POST["kode_kategori"];
	$nama = $_POST["nama_kategori"];


	$koneksi -> query("UPDATE kategori_paket SET
		kode_kategori = '$kode',
		nama_kategori = '$nama' WHERE id_kategori = '$id_kategori'");

	echo "<script>alert ('Data berhasil diubah')</script>";
	echo "<script>location = 'kategori_tampil.php'</script>";
}


include "footer.php";
?>
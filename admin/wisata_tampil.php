<?php 
include "header.php";

$wisata = array();
$ambil_wisata = $koneksi -> query("SELECT * FROM wisata");
while ($tiap_wisata = $ambil_wisata -> fetch_assoc()){
  $wisata[]=$tiap_wisata;
}

?>
<div class="row">
  <div class="card mt-4" >
    <h4 class="card-title mt-3 ms-3">Daftar Paket Wisata</h4>
    

    <div class="card-body">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
        <a href="wisata_tambah.php" class="btn btn-success " type="button">
          <i class="bi bi-plus"></i>Tambah Paket Wisata</a>
        </div>
        <div class="table table-responsive">
          <table id="datatabel" class="table table-bordered table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Paket Wisata</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($wisata as $key => $value) : ?>
                <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $value["nama"]; ?></td>
                  <td><?php echo $value["deskripsi"]; ?></td>
                  <td><?php echo $value["harga_wisata"]; ?></td>
                  <td>
                    <img src="../assets/img/wisata/<?php echo $value["gambar"]; ?>" width="100">
                  </td>
                  <td>
                    <a style="width: 58px;" href="wisata_ubah.php?id=<?php echo $value["id_wisata"]; ?>" class="btn-sm btn btn-primary text-white" data-bs-toggle="tooltip" title="Ubah">
                      <span>Edit</span>
                    </a>
                    <a href="wisata_hapus.php?id=<?php echo $value["id_wisata"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn-sm btn btn-danger" data-bs-toggle="tooltip" title="Hapus">
                      <span>Hapus</span>
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php 
  include "footer.php";
?>
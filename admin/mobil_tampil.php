<?php 
include "header.php";

$mobil = array();
$ambil_mobil = $koneksi -> query("SELECT * FROM mobil");
while ($tiap_mobil = $ambil_mobil -> fetch_assoc()){
  $mobil[]=$tiap_mobil;
}

?>
<div class="row">
  <div class="card mt-4" >
    <h4 class="card-title mt-3 ms-3">Daftar Mobil</h4>
    

    <div class="card-body">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
        <a href="mobil_tambah.php" class="btn btn-success " type="button">
          <i class="bi bi-plus"></i>Tambah Mobil</a>
        </div>
        <div class="table table-responsive">
          <table id="datatabel" class="table table-bordered table-striped table-sm table-hover">
            <thead>
              <tr>
                <!-- <th>No</th> -->
                <th>Nama Mobil</th>
                <th>Durasi 1</th>
                <th>Durasi 2</th>
                <th>Durasi 3</th>
                <th>Harga paket1</th>
                <th>Harga paket2</th>
                <th>Harga paket3</th>
                <th>Harga paket4</th>
                <th>Harga paket5</th>
                <th>Harga paket6</th>
                <th>Harga paket7</th>
                <th>Harga paket8</th>
                <th>Harga paket9</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($mobil as $key => $value) : ?>
                <tr>
                  <!-- <td><?php echo $key + 1; ?></td> -->
                  <td><?php echo $value["nama_mobil"]; ?></td>
                  <td><?php echo $value["durasi1"]; ?></td>
                  <td><?php echo $value["durasi2"]; ?></td>
                  <td><?php echo $value["durasi3"]; ?></td>
                  <td><?php echo $value["harga1"]; ?></td>
                  <td><?php echo $value["harga2"]; ?></td>
                  <td><?php echo $value["harga3"]; ?></td>
                  <td><?php echo $value["harga4"]; ?></td>
                  <td><?php echo $value["harga5"]; ?></td>
                  <td><?php echo $value["harga6"]; ?></td>
                  <td><?php echo $value["harga7"]; ?></td>
                  <td><?php echo $value["harga8"]; ?></td>
                  <td><?php echo $value["harga9"]; ?></td>
                  <td>
                    <img src="../assets/img/mobil/<?php echo $value["foto_mobil"]; ?>" width="100">
                  </td>
                  <td>
                    <a style="width: 58px;" href="mobil_ubah.php?id=<?php echo $value["id_mobil"]; ?>" class="btn-sm btn btn-primary text-white" data-bs-toggle="tooltip" title="Ubah">
                      <span>Edit</span>
                    </a>
                    <a href="mobil_hapus.php?id=<?php echo $value["id_mobil"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn-sm btn btn-danger" data-bs-toggle="tooltip" title="Hapus">
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
<?php 
include "header.php";

//dapatkan id dari url
$id_wisata = $_GET["id"];

$koneksi -> query ("DELETE FROM wisata WHERE id_wisata = '$id_wisata'");

echo"<script>alert('Data Terhapus')</script>";
echo"<script>location = 'wisata_tampil.php'</script>";

 ?>
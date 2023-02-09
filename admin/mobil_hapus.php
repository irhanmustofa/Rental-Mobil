<?php 
include "header.php";

//dapatkan id dari url
$id_mobil = $_GET["id"];

$koneksi -> query ("DELETE FROM mobil WHERE id_mobil = '$id_mobil'");

echo"<script>alert('Data Terhapus')</script>";
echo"<script>location = 'mobil_tampil.php'</script>";

 ?>
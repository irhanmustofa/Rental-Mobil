<?php 
include "../koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "<script>alert('Anda harus login')</script>";
	echo "<script>location = '../login.php'</script>";
}
$id_user = $_SESSION["username"] ["id_user"];

$admin = $_SESSION["username"]; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
	<title>Admin-ATW</title>
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/dataTables.bootstrap5.min.css">
	<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	

	
	<link rel="stylesheet" href="../assets/css/sweetalert2.min.css">

</head>
<body>
	<header class="navbar navbar-dark sticky-top"style="background: #142747;">
		<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand px-3" href="">
			<img src="../assets/img/logo.png" width="80px">
			<!-- <img src="../assets/file/logo.png" width="90"> -->
		</a>
		<div class="navbar-nav">
			<div class="navbar-item">
				<a href="profil.php" class="nav-link px-4" style="display: inline-block;">
					<i class="bi bi-person-circle"></i>
					Profil
				</a>
				<a class="nav-link px-4" href="../logout.php" style="display: inline-block;">
					<i class="bi bi-box-arrow-right"></i>
					Sign Out
				</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebar" class="col-md-3 col-lg-2 position-fixed start-0 top-0 bottom-0 py-5 collapse d-md-block sidebar" style="background: #37517e;">
				<div class="container mt-5 text-center">
					<img src="../assets/img/team/team-3.jpg" width="60" style="border-radius: 50%;">
					<h6 class="text-white py-2"><?php echo $admin["nama"]; ?></h6>
				</div>
				<div class="pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php">
								<i class="bi bi-speedometer2"></i>
								<span class="ms-1">Dashboard</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link text-white" href="kategori_tampil.php">
								<i class="bi bi-bookmarks"></i>
								<span class="ms-1">Kategori Paket</span>
							</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link text-white" href="mobil_tampil.php">
								<i class="bi bi-folder2"></i>
								<span class="ms-1">Data Mobil</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="wisata_tampil.php">
								<i class="bi bi-folder2"></i>
								<span class="ms-1">Paket Wisata</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link text-white dropdown-toggle" href="#Submenu" data-toggle="collapse" aria-expanded="false">
								<i class="bi bi-map"></i>
								<span class="ms-1">Paket</span>
							</a>
							<ul class="collapse lisst-unstyled" style="text-decoration: none; background: #0C3B0C; " id="Submenu">
								<li class="nav-item" style="list-style:none;">
									<a class="nav-link text-white" href="kabupaten.php">Kabupaten/Kota</a>
								</li>
								<li class="nav-item" style="list-style:none;">
									<a class="nav-link text-white" href="paket_rental_tampil.php">Rental Mobil</a>
								</li>
								<li class="nav-item" style="list-style:none;">
									<a class="nav-link text-white" href="paket_wisata_tampil.php">Paket Wisata</a>
								</li>
							</ul>
						</li>
								 -->				
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4 bg-light vh-100">
		<div class="container-fluid">

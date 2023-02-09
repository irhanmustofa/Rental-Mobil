<?php

include "koneksi.php";
// AMBIL DATA MOBIL DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($koneksi, "SELECT * FROM mobil ");
// AMBIL DATA WISATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$wisata = mysqli_query($koneksi, "SELECT * FROM wisata ");

$id_identitas = 1;
$ambil_identitas = $koneksi->query("SELECT * FROM identitas WHERE id_identitas = '$id_identitas'");
$identitas = $ambil_identitas->fetch_assoc();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ATW - Rental Mobil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" style="background-color: #0081C9;" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">
          <img src="assets/img/logo.png" width="150px">
        </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Rental Mobil</a></li>
          <li><a class="nav-link scrollto" href="#wisata">Paket Wisata</a></li>
          <!-- <li><a class="nav-link   scrollto" href="#portfolio">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#ketentuan">Ketentuan & Pembayaran</a></li>
          <li><a class="nav-link scrollto" href="#testimoni">Testimoni</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background-color: #0081C9;" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>ATW - Rental Mobil</h1>
          <h2>Solusi Jasa Rental Mobil Lepas Kunci atau Dengan Pengemudi</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn btn-info btn-lg text-white">Get Started</a>
            <a class="btn btn-outline-light btn-lg ms-3" href="https://goo.gl/maps/5gaZDU7UtzrmoRbt6">Lokasi</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/<?php echo $identitas["banner"]; ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Solusi transportasi dan paket jalan-jalan. <strong>ATW-Rental Mobil hadir memberikan solusi terbaiknya.</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Apakah ATW dapat dipercaya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Jika anda kurang percaya dengan ATW, anda bisa datang langsung ke alamat ATW yang tertera pada website ini.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Pelayanan seperti apa yang di tawarkan oleh ATW? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      ATW memberikan pelayanan terbaiknya kepada pelanggan, setiap permintaan dari pelanggan akan berusaha untuk selalu dipenuhi, hal ini guna untuk mencapai kepuasan dari pelanggan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Apakah ATW ini aman dan bisa dipercaya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      ATW sangat aman dan bisa dipercaya karena untuk harga dan pembayaran ATW sangat terbuka transparan.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/home_mobil.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Daftar Mobil ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Rental Mobil</h2>
        </div>

        <div class="row">

          <div class="col-md-12">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="card text-center">
                    <div class="card-header">
                      <b>Daftar Harga Mobil</b>
                    </div>
                    <div class="card-body">
                      <?php foreach ($result as $key => $value) : ?>

                        <div class="card mb-3" style="">
                          <div class="row g-0">
                            <div class="col-md-3">

                              <div class="">
                                <h2 class="card-title"><?php echo $value["nama_mobil"]; ?></h2>
                              </div>

                              <img src="assets/img/mobil/<?php echo $value["foto_mobil"]; ?>" class="card-img-top" alt="">
                              <!-- <div class="card-body">
                                <a href="#" class="btn btn-primary btn-lg">Go Booking</a>
                              </div> -->

                            </div>
                            <div class="col-md-3">
                              <div class="card-body">
                                <div class="card-header">
                                  <h5 class="card-title">Mobil Tanpa Supir</h5>
                                </div>
                                <div class="card-body">
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $value["durasi1"]; ?> Only <?php echo $value["harga1"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi2"]; ?> Only <?php echo $value["harga2"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi3"]; ?> Only <?php echo $value["harga3"]; ?></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="card-body">
                                <div class="card-header">
                                  <h5 class="card-title">Mobil + Supir</h5>
                                </div>
                                <div class="card-body">
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $value["durasi1"]; ?> Only <?php echo $value["harga4"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi2"]; ?> Only <?php echo $value["harga5"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi3"]; ?> Only <?php echo $value["harga6"]; ?></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="card-body">
                                <div class="card-header">
                                  <h5 class="card-title">Mobil + Supir + BBM</h5>
                                </div>
                                <div class="card-body">
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $value["durasi1"]; ?> Only <?php echo $value["harga7"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi2"]; ?> Only <?php echo $value["harga8"]; ?></li>
                                    <li class="list-group-item"><?php echo $value["durasi3"]; ?> Only <?php echo $value["harga9"]; ?></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <a href="<?php echo $identitas["link_wa"]; ?>" class="btn btn-success btn-lg"><i class="bi bi-whatsapp"></i> Go Booking</a>
                            </div>
                          </div>
                        </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
      </div>
    </section><!-- End Daftar Mobil -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa Harus ATW-Rental Mobil</h2>
          <p>ATW hadir untuk memberikan kemudahan rental mobil dan bus di Jogja dan berbagai kota lainnya dengan beragam pilihan armada, tarif yang murah, serta pelayanan terbaik. Semua urusan transportasi mulai dari liburan, perjalanan bisnis, dan acara lainnya serahkan saja kepada kami.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-hearts"></i></div>
              <h4><a href="">Pelayanan Ramah</a></h4>
              <p>ATW melayani dengan sepenuh hati, admin ramah dan juga sopan.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-car-front-fill"></i></div>
              <h4><a href="">Banyak Pilihan Armada</a></h4>
              <p>ATW memberikan pilahan armada sesuai dengan kebutuhan perjalanan.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-coin"></i></i></div>
              <h4><a href="">Harga Lebih Terjangkau</a></h4>
              <p>ATW memberikan harga yang lebih ekonomis, tidak perlu menguras kantong.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Terdapat Pilihan Paket</a></h4>
              <p>ATW menyediakan pilihan paket baik untuk perjalanan ataupun untuk wisata.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-percent"></i></div>
              <h4><a href="">Memberikan Diskon</a></h4>
              <p>Terdapat diskon sesuai dengan ketentuan yang berlaku.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-stopwatch"></i></div>
              <h4><a href="">Fast Respons</a></h4>
              <p>Admin akan membalas pesan segera, sesuai waktu dan jam kerja.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-square"></i></div>
              <h4><a href="">Driver Ramah & Pengalaman</a></h4>
              <p>ATW menyediakan driver yang ramah, pengalaman dan berlisensi.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Paket Wisata ======= -->
    <section id="wisata" class="wisata">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Paket Wisata</h2>
        </div>

        <div class="row">

          <div class="col-md-12">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="card text-center">
                    <div class="card-header">
                      <h5>Daftar Paket Wisata</h5>
                    </div>
                    <div class="card-body">
                      <div class="container text-center">
                        <div class="row justify-content-start">
                          <?php foreach ($wisata as $key => $value) : ?>
                            <div class="col-6">
                              <div class="card mb-3" style="">
                                <div class="row g-0">
                                  <div class="col-md-6">
                                    <img src="assets/img/wisata/<?php echo $value["gambar"] ?>" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="card-body">
                                      <h6 class="card-title"><?php echo $value["nama"] ?></h6>
                                      <p class="card-text"><?php echo $value["deskripsi"] ?></p>
                                      <p class="card-text">
                                      <h5 class="text-dark">Rp <?php echo $value["harga_wisata"] ?></h5>
                                      </p>

                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <a href="<?php echo $identitas["link_wa"]; ?>" class="btn btn-success btn-lg"><i class="bi bi-whatsapp"></i> Go Booking</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php endforeach ?>
                        </div>

                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
      </div>
    </section><!-- Paket Wisata -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Hubungi Kami</h3>
            <p> Bisa menghubungi kami melalui nomer berikut <?php echo $identitas["no_hp"] ?> baik sms,telfon atau whatsapp.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo $identitas["link_wa"]; ?>">Hubungi Kami</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Ketentuan  ======= -->
    <section id="ketentuan" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ketentuan & Pembayaran</h2>
          <p>Berikut adalah ketentuan-ketentuan yang harus diperhatikan oleh pelanggan ATW-Rental Mobil. Baik ketentuan sewa dan ketentuan dalam melakukan pembayaran.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Ketentuan Umum</h3>
              <h4>Ketentuan Harga Sewa Mobil:</h4>
              <ul style="color: black;">
                <li><i class="bx bx-check"></i> Harga sewa per day yaitu penggunaan dari jam 00.00-23.00.</li>
                <li><i class="bx bx-check"></i> Overtime dikenakan biaya 10% per jam.</li>
                <li><i class="bx bx-check"></i> Maksimal penggunaan sampai jam 23.00.</li>
                <li><i class="bx bx-check"></i> Tidak menyewakan untuk keluar kota.</li>
                <li><i class="bx bx-check"></i> Zona 1 (Jogja Kota/Sleman/Bantul)</li>
                <li><i class="bx bx-check"></i> Zona 2 (Kulonprogo/Gunungkidul)</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Metode Pembayaran</h3>
              <h4>Langkah Melakukan Pembayaran: </h4>
              <ol style="color: black;">
                <li> Jika sudah melakukan pemesanan, silahkan Anda menunggu untuk mendapatkan pemberitahuan konfirmasi dari pihak kami terkait dengan batasan waktu pembayaran serta kapan jatuh tempo.</li>
                <li> Segera lakukan pembayaran sebelum jadwal tempo, Anda bisa melakukan pembayaran dengan melakukan transfer via bank ke nomor rekening:
                  <p><?php echo $identitas["rekening"] ?></p>
                </li>
                <li> Jika sudah melakukan pembayaran, lakukan konfirmasi telepon atau WA.</li>
                <li> Setelah konfirmasi pembayaran diterima, kami akan menginfokan untuk pengambilan atau pengantaran.</li>
              </ol>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Ketentuan Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan yang Sering Diajukan</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana cara melakukan pemesanan rental mobil di ATW? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Lakukan booking dengan mudah melalui tombol booking online yang kami sediakan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa yang dimaksud dengan rental kendaraan full day? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Jika Anda melakukan penyewaan kendaraan full day artinya Anda melakukan penyewaan dengan durasi selama lebih dari 12 jam. Ini merupakan rentang waktu yang kami berikan mulai dari penjemputan sampai kendaraan dikembalikan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana jika ternyata durasinya melebihi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk kendaraan yang melebihi durasi waktu yang diberikan maka akan dikenakan biaya tambahan sesuai dengan ketentuan yang sudah dijelaskan sebelumnya.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimoni ======= -->
    <section id="testimoni" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/testi1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Angga Nanda</h4>
                <p>Agen perjalanan wisata dan sewa mobil yang mengutamakan pelayanan. Mobilnya bersih dan nyaman.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/testi2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Maulana Akbar</h4>
                <p>Pelayanan ramah. Mobilnya wangi dan nyaman, serta aman buat perjalanan.</p>
              </div>
            </div>
          </div>

          

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/testi3.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Suwardi Adi</h4>
                <p>Tidak pernah mengecewakan, selalu memberikan pelayanan terbaiknya.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/testi4.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nur Rokhim</h4>
                <p>Harga lebih terjangkau dengan banyak pilihan mobil, pelayanan juga memuaskan.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimoni -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Untuk informasi yang lebih lanjut atau lebih detail bisa hubungi kami pada kontak dan sosial media kami, atau bisa datang langsung ke alamat kami berikut.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p><?php echo $identitas["alamat"]; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>atwtransport888@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No Handphone</h4>
                <p><?php echo $identitas["no_hp"]; ?></p>
              </div>


            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.127265262499!2d110.36286751477805!3d-7.776327694395748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59d41c99c921%3A0xb63d55dee8a525bb!2sATW%20TRANS%20RENT%20CAR%20AND%20CITY%20TOUR%20JOGJA!5e0!3m2!1sid!2sid!4v1674464259763!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ATW-Rental Mobil</h3>
            <p>
              <?php echo $identitas["alamat"]; ?> <br><br>
              <strong>Phone:</strong> <?php echo $identitas["no_hp"]; ?><br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rental Mobil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ketentuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Rental Mobil</li>
              <li><i class="bx bx-chevron-right"></i>Paket Wisata</li>
              <li><i class="bx bx-chevron-right"></i>Perjalan</li>
              <li><i class="bx bx-chevron-right"></i>Liburan</li>
              <li><i class="bx bx-chevron-right"></i>Acara Lainnya</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Kunjungi juga kami di sosial media kami berikut ini.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/rentalmobilyogyakarta.atw/" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>ATW</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
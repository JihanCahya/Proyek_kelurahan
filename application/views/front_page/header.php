<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelurahan Burengan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/template-user/assets-user/img/icon.png" rel="icon">
  <link href="<?= base_url() ?>assets/template-user/assets-user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="<?= base_url() ?>assets/template-user/assets-user/css/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php foreach ($profile as $profil) : ?>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
      <div class="container-fluid">
        <div class="row gx-0 d-none d-lg-flex">
          <div class="col-lg-7 px-5 text-start">
            <div class="contact-info h-100 d-inline-flex align-items-center py-3 me-3">
              <i class="bi bi-envelope d-flex align-items-center"><a href="tel:<?= $profil->email ?>"><?= $profil->email ?></a></i>
              <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $profil->phone_number ?></span></i>
            </div>
          </div>
          <div class="col-lg-5 px-5 text-end">
            <div class="social-links h-100 d-inline-flex align-items-center py-3 me-2">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">SIPK Burengan<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/template-user/assets-userimg/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="<?php echo base_url("Front_page/index"); ?>">Home</a></li>
            <li class="dropdown"><a href="#"><span>Profil Kelurahan</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?php echo base_url("Front_page/village_history"); ?>">Sejarah Kelurahan</a></li>
                <li><a href="<?php echo base_url("Front_page/sub_district_structure"); ?>">Struktur Kelurahan</a></li>
                <li><a href="<?php echo base_url("Front_page/vission_mission"); ?>">Visi & Misi</a></li>
                <li><a href="<?php echo base_url("Front_page/location_contact"); ?>">Lokasi & Kontak</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?php echo base_url("Front_page/district_news"); ?>">Berita Kelurahan</a></li>
                <li><a href="<?php echo base_url("Front_page/help_information"); ?>">Informasi Bantuan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#services"><span>Layanan Administrasi</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?php echo base_url("login"); ?>">Login terlebih dahulu!</a></li>
              </ul>
            </li>
            <li><a class="getstarted scrollto" href="<?php echo base_url("login"); ?>">Masuk</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      <?php endforeach ?>
      </div>
    </header><!-- End Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BizLand Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/template-user/assets-user/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/template-user/assets-user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/boxicons/css/boxicons.min.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/template-user/assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/template-user/assets-user/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url("Front_page/index"); ?>">Home</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>Profil Kelurahan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah Kelurahan</a></li>
                            <li><a href="#">Struktur Kelurahan</a></li>
                            <li><a href="#">Visi & Misi</a></li>
                            <li><a href="#">Lokasi & Kontak</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url("Front_page/district_news"); ?>">Berita Kelurahan</a></li>
                            <li><a href="<?php echo base_url("Front_page/help_information"); ?>">Informasi Bantuan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#services"><span>Layanan Administrasi</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url("Front_page/submission_letter"); ?>">Pengajuan Surat</a>
                            </li>
                            <li><a href="<?php echo base_url("Front_page/history"); ?>">History</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><img src="<?= base_url() ?>assets/image/user/ktm.jpeg" alt="User Profile"
                                class="rounded-circle" width="40" height="40"><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLogout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <!-- modal untuk logout -->
            <div class="modal fade" id="modalLogout">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="<?php echo base_url('logout_1') ?>">Yakin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Header -->
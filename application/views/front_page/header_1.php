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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?php foreach ($profile as $profil): ?>
        <section id="topbar" class="d-flex align-items-center">
            <div class="container-fluid">
                <div class="row gx-0 d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="contact-info h-100 d-inline-flex align-items-center py-3 me-3">
                            <i class="bi bi-envelope d-flex align-items-center"><a href="tel:<?= $profil->email ?>" target="_blank">
                                    <?= $profil->email ?>
                                </a></i>
                            <i class="bi bi-phone d-flex align-items-center ms-4"><span>
                                    <?= $profil->phone_number ?>
                                </span></i>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="social-links h-100 d-inline-flex align-items-center py-3 me-2">
                            <a href="https://www.facebook.com/kelburengan/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/kelurahanburengan/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach ?>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="row d-flex align-items-center ms-3">
            <div class="col-lg-3 col-md-3">
                <a href="index.php">
                    <img src="<?php echo base_url('assets/image/icon.png') ?>" alt="logo" width="78%">
                </a>
            </div>
            <div class="col-lg-9 col-md-9">
                <h1 class="logo"><a href="index.html">SIPK Burengan<span>.</span></a></h1>
            </div>
        </div>
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/template-user/assets-userimg/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?php echo base_url("Front_page/index"); ?>">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Profil Kelurahan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url("Front_page/village_history"); ?>">Sejarah Kelurahan</a></li>
                            <li><a href="<?php echo base_url("Front_page/sub_district_structure"); ?>">Struktur Kelurahan</a></li>
                            <li><a href="<?php echo base_url("Front_page/vission_mission"); ?>">Visi & Misi</a></li>
                            <li><a href="<?php echo base_url("Front_page/location_contact"); ?>">Lokasi & Kontak</a>
                            </li>
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
                        <a href="#"><img src="<?= base_url('assets/image/user/') . $user['image']; ?>"
                                alt="User Profile" class="rounded-circle" width="40" height="40"><i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('profile') ?>">Profile</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLogout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

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
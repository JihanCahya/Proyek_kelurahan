<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center mb-5">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Kelurahan Burengan</h1>
          <?php foreach ($profile as $profil):?>
          <h2><?= $profil->address?></h2>
          <?php endforeach?>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://www.youtube.com/watch?v=mGmtBX76Skc" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Video Profil Kelurahan</span></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url('assets/template-user/img/hero-img.png') ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

    <!-- Carousel Start -->
    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-inner mb-3">
        <?php foreach ($carousel as $crsl) : ?>
        <div class="carousel-item active">
          <img src="<?= base_url('assets/image/') . $crsl->image ?>" class="d-block w-100" alt="Slide 1">
          <div class="carousel-caption d-none d-md-block">
            <h5><?= $crsl->title ?></h5>
            <p><?= $crsl->sub_title ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  <!-- Carousel End -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">
      <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?php echo base_url('assets/template-user/img/skills.png') ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <h3>PROFIL KELURAHAN</h3>
              <p class="fst-italic">
                Kelurahan Burengan merupakan sebuah Kelurahan yang terletak di Jalan Letjend Sutoyo 4, Bangsal, Kec. Pesantren, Kabupaten Kediri, Jawa Timur 64131
              </p>

            </div>
          </div>

        </div>
    </div>
    </div>
    </div>

    </div>
  </section><!-- End Skills Section -->
  </div>
  </section><!-- End Skills Section -->
  <main id="main">

    <!-- Start Section Informasi Kelurahan -->
    <section>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <h3 class="font-weight-bold" style="font-family:'Jost', sans-serif">INFORMASI PUBLIK</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <div class="card ms-1" style="width: 30rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section Informasi Kelurahan -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>Layanan Administrasi</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Siapkan Persyaratan Wajib Dibawah Ini!
            </p>
            <p>
              Cek Persyaratan Detailnya Pada Surat Yang Akan Diajukan.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h4>Surat Pengantar RT</h4>
                  <p>Ajukan surat pengantar RT kepada Ketua RT Anda</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Dokumen Asli Kartu Keluarga</h5>
                  <p>Siapkan dokumen asli kartu keluarga untuk diunggah!</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>KTP Asli</h5>
                  <p>Siapkan foto KTP Anda untuk diunggah!</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <p>
              Pengajuan Surat Administrasi Secara Online
            </p>
            <p>
              Kelurahan Burengan kini hadir dengan tema "Desa Digital". Bersamaan dengan hal tersebut, kami ingin pelayanan
              terhadap kebutuhan Anda bisa ditangani dengan lebih efektif dimana Anda tidak perlu datang ke Kelurahan untuk mengajukan surat.
              Surat yang bisa Anda ajukan secara online tanpa harus datang ke Kelurahan adalah Surat Keterangan, Pengajuan KK, dan Pengajuan KTP.
              Ayo, Segera <a href="#">Ajukan Suratmu</a>!
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perangkat Kelurahan</h2>
          <h3>Perangkat Kelurahan <span>Burengan</span></h3>
        </div>

        <div class="row">
          <?php foreach ($perangkat as $perangkat) : ?>
            <div class="col-lg-6" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?php echo base_url('assets/template-user/img/team/') . $perangkat->image ?>" class="img-fluid" alt="Ini Foto"></div>
                <div class="member-info">
                  <h4><?= $perangkat->name ?></h4>
                  <span><?= $perangkat->name_jabatan ?></span>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Hubungi Kami!</span></h3>
          <p>Sampaikan Keluhan, Kritik, Saran, dan Aduan Anda Melalui Media Dibawah!</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <?php foreach ($profile as $profil) : ?>
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Alamat Kelurahan Burengan</h3>
                <p><?= $profil->address ?></p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Kelurahan Burengan</h3>
                <p><?= $profil->email ?></p>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>

      </div>

      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 col-md-6 d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6733239402406!2d112.02828307540393!3d-7.824358577712787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857717601003b%3A0x98d05845c5dbd656!2sKantor%20Kelurahan%20Burengan!5e0!3m2!1sen!2sid!4v1699169788904!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6 col-md-6 d-flex justify-content-center">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email Anda" required>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan, Kritik, Saran, Keluhan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda Terkirim, Terima Kasih Atas Tanggapan Anda!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div>

        </div>
      </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>

</body>

</html>
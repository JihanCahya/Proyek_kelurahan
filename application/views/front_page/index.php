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
          <img src="<?= base_url('assets/image/carousel/') . $crsl->image ?>" class="d-block w-100" alt="Slide 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>
              <?= $crsl->title ?>
            </h5>
            <p>
              <?= $crsl->sub_title ?>
            </p>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Kelurahan Burengan</h1>
          <h2>Jalan Letjend Sutoyo 4, Bangsal, Kec. Pesantren, Kabupaten Kediri, Jawa Timur 64131</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://www.youtube.com/watch?v=mGmtBX76Skc" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Video Profil Kelurahan</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url('assets/template-user/img/hero-img.png') ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

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
                Kelurahan Burengan merupakan sebuah Kelurahan yang terletak di Jalan Letjend Sutoyo 4, Bangsal, Kec.
                Pesantren, Kabupaten Kediri, Jawa Timur 64131
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
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
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
              Kelurahan Burengan kini hadir dengan tema "Desa Digital". Bersamaan dengan hal tersebut, kami ingin
              pelayanan
              terhadap kebutuhan Anda bisa ditangani dengan lebih efektif dimana Anda tidak perlu datang ke Kelurahan
              untuk mengajukan surat.
              Surat yang bisa Anda ajukan secara online tanpa harus datang ke Kelurahan adalah Surat Keterangan,
              Pengajuan KK, dan Pengajuan KTP.
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
          <?php foreach ($perangkat as $perangkat): ?>
            <div class="col-lg-6" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?php echo base_url('assets/image/employee/') . $perangkat->image ?>"
                    class="img-fluid" alt="Ini Foto"></div>
                <div class="member-info">
                  <h4>
                    <?= $perangkat->name ?>
                  </h4>
                  <span>
                    <?= $perangkat->name_jabatan ?>
                  </span>
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
          <?php foreach ($location as $loc): ?>
            <div class="col-lg-6">
              <iframe src="<?= $loc->embed_address ?>" width="100%" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6">
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name">
                      <label for="nama">Nama Lengkap</label>
                      <small class="text-danger pl-1" id="error-nama"></small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
                      <label for="email">Email</label>
                      <small class="text-danger pl-1" id="error-email"></small>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subject">
                      <label for="subjek">Subjek</label>
                      <small class="text-danger pl-1" id="error-subjek"></small>

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a message here" id="pesan" name="pesan"
                        style="height: 100px"></textarea>
                      <label for="pesan">pesan</label>
                      <small class="text-danger pl-1" id="error-pesan"></small>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" onclick="insert_message()" type="button">Send
                      Message</button>
                  </div>
                </div>
              </form>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>

</body>
<script>
  var base_url = '<?php echo base_url() ?>';
  var _controller = '<?= $this->router->fetch_class() ?>';
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>

</html>
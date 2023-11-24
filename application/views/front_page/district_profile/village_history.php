<!-- ======= About Section ======= -->
<section id="sejarah" class="sejarah section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Sejarah Kelurahan</h2>
      <h3>Kelurahan <span>Burengan</span></h3>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="<?= base_url() ?>assets/template-user/img/burengan.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
        data-aos-delay="100">
        <?php foreach ($sejarah as $sj): ?>
          <p class="fst-italic">
            <?= $sj->sejarah ?>
          </p>
        <?php endforeach ?>
      </div>
    </div>

  </div>
</section><!-- End About Section -->
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
              <h6>
                <?= $perangkat->name ?>
              </h6>
              <h5 style="color: grey;">
                <?= $perangkat->name_jabatan ?>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>
<!-- End Team Section -->
<!-- ======= About Section ======= -->
<section id="sejarah" class="sejarah section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Visi Misi</h2>
            <h3>Kelurahan <span>Burengan</span></h3>
        </div>

        <?php foreach ($profile as $p) : ?>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= base_url() ?>assets/template-user/img/burengan.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="text-align: center;">VISI</h2>
                    <p>
                        <?= $p->visi?>
                    </p>

                    <h2 style="text-align: center;">MISI</h2>
                    <p>
                        <?= $p->misi?>
                    </p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section><!-- End About Section -->
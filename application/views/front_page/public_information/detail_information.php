<div class="container mt-4">
    <h1 class="text-center mb-4">Detail informasi bantuan</h1>
    <div class="accordion" id="faqAccordion">

        <main>
            <!-- About US Start -->
            <div class="about-area">
                <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($news as $ne): ?>
                            <div class="col-lg-8">
                                <!-- Trending Tittle -->
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <img src="<?= base_url('assets/image/news/') . $ne->image ?>" class="card-img-top"
                                            alt="Gambar Berita">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30">
                                        <h3>
                                            <?= $ne->sub_title ?>
                                        </h3>
                                    </div>
                                    <div class="about-prea">
                                        <p class="about-pera1 mb-25">
                                            <?= $ne->description ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- About US End -->
        </main>
    </div>
</div>
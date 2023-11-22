<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Berita kelurahan</h1>
    <div class="accordion" id="faqAccordion">
      <div class="row">
        <?php foreach ($news as $ne): ?>
          <div class="col-md-6">
            <div class="card">
              <img src="<?= base_url('assets/image/news/') . $ne->image ?>" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title">
                  <?= $ne->title ?>
                </h5>
                <h6 class="card-title">
                  <?= $ne->sub_title ?>
                </h6>
                <a href="<?php echo base_url("Front_page/detail_news/$ne->id"); ?>" class="btn btn-primary">Baca
                  Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>

</html>
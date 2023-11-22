<body>
<div class="container mt-5">
  <div class="row">
  <?php foreach ($news as $ne): ?>
    <div class="col-md-6">
      <div class="card">
        <img src="<?= base_url('assets/image/news/') . $ne->image ?>" class="card-img-top" alt="Gambar Bantuan">
        <div class="card-body">
          <h5 class="card-title"><?= $ne->title ?></h5>
          <p class="card-text"><?= $ne->sub_title ?></p>
          <a href="<?php echo base_url("Front_page/detail_news"); ?>" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>

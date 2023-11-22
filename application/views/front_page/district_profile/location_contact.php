<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <h3><span>Contact Us</span></h3>
      <p>Form Kritik & Saran</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <?php foreach ($location as $loc) : ?>
        <div class="col-lg-6">
          <iframe src="<?= $loc->embed_address ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                  <textarea class="form-control" placeholder="Leave a message here" id="pesan" name="pesan" style="height: 100px"></textarea>
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
</section>
<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>
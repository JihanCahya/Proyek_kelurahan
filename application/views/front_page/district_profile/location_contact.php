<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <h3><span>Contact Us</span></h3>
      <p>Form Kritik & Saran</p>
    </div>

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
</section>

<section id="feedback" class="feedback">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Feedback</h2>
      <h3><span>User Feedback</span></h3>
      <p>Daftar Kritik & Saran</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100" id="feedback-container">
      <?php $displayedMessages = array_slice($message, 0, 3); ?>
      <?php foreach ($displayedMessages as $msg): ?>
        <div class="col-lg-6">
          <div class="feedback-item">
            <p><strong>User:</strong>
              <?= $msg->name ?>
            </p>
            <p><strong>Subject:</strong>
              <?= $msg->subject ?>
            </p>
            <p><strong>Message:</strong>
              <?= $msg->message ?>
            </p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="feedback-response">
            <?php if ($msg->status == 3): ?>
              <p><strong>Balasan Admin:</strong></p>
              <?php foreach ($msg->replies as $reply): ?>
                <p>
                  <?= $reply->message ?>
                </p>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php if ($msg->status == 2): ?>
              <p><strong>Status:</strong></p>
              <p>
                Telah dibaca admin
              </p>
            <?php endif; ?>
            <?php if ($msg->status == 1): ?>
              <p><strong>Status:</strong></p>
              <p>
                Belum dicek
              </p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if (count($message) > 3): ?>
      <div class="text-center mt-4">
        <button class="btn btn-primary" id="toggleButton" onclick="toggleFeedback()">Lihat Semua</button>
      </div>
    <?php endif; ?>
  </div>
</section>

<script>
  var base_url = '<?php echo base_url() ?>';
  var _controller = '<?= $this->router->fetch_class() ?>';
  var showAllMessages = false;

  function toggleFeedback() {
    var container = document.getElementById('feedback-container');
    var allMessages = <?php echo json_encode($message); ?>;

    if (!showAllMessages) {
      container.innerHTML = generateFeedbackHTML(allMessages);
    } else {
      var displayedMessages = allMessages.slice(0, 3);
      container.innerHTML = generateFeedbackHTML(displayedMessages);
    }

    showAllMessages = !showAllMessages;
    updateButtonText();
  }

  function generateFeedbackHTML(messages) {
    var html = '';
    messages.forEach(function (msg) {
      html += '<div class="col-lg-6">';
      html += '<div class="feedback-item">';
      html += '<p><strong>User: </strong>' + msg.name + '</p>';
      html += '<p><strong>Subject: </strong>' + msg.subject + '</p>';
      html += '<p><strong>Message: </strong>' + msg.message + '</p>';
      html += '</div>';
      html += '</div>';

      html += '<div class="col-lg-6">';
      html += '<div class="feedback-response">';
      if (msg.status == 3) {
        html += '<p><strong>Balasan Admin:</strong></p>';
        msg.replies.forEach(function (reply) {
          html += '<p>' + reply.message + '</p>';
        });
      }
      if (msg.status == 2) {
        html += '<p><strong>Status:</strong></p>';
        html += '<p>Telah dibaca admin</p>';
      }
      if (msg.status == 1) {
        html += '<p><strong>Status:</strong></p>';
        html += '<p>Belum dicek</p>';
      }
      html += '</div>';
      html += '</div>';
    });
    return html;
  }

  function updateButtonText() {
    var button = document.getElementById('toggleButton');
    button.innerHTML = showAllMessages ? 'Lebih Sedikit' : 'Lihat Semua';
  }
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>
<style>
  .feedback-item,
  .feedback-response {
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .feedback-item p,
  .feedback-response p {
    margin-bottom: 10px;
  }

  .feedback-response {
    background-color: #e9ecef;
    /* Use a different background color for admin response */
  }
</style>
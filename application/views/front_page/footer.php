<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <?php foreach ($profile as $profil) : ?>
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Alamat</h3>
            <p><i class="bx bx-map"></i>
              <?= $profil->address ?>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Kontak</h3>
            <p class="mb-2">
              <i class="bi bi-envelope me-1 "></i>
              <a href="tel:<?= $profil->email ?>"><?= $profil->email ?></a>
            </p>
            
            <p class="mb-2">
              <i class="bi bi-phone me-1"></i>
              <span><?= $profil->phone_number ?></span>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Jumpai Kami Di</h4>
            <p class="mb-2">
              <a href="https://www.facebook.com/kelburengan/" class="facebook" target="_blank"><i class="bi bi-facebook"></i>@kelurahanburengan</a>
            </p>

            <p class="mb-2">
              <a href="https://www.instagram.com/kelurahanburengan/" class="instagram" target="_blank"><i class="bi bi-instagram"></i>@kelburengan</a>
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Kelompok-1</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/template-user/assets-user/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/template-user/assets-user/js/navbar.js"></script>

<!-- datatable -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
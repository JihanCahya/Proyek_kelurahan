<div class="container mt-4">
    <h1 class="text-center mb-4">Form Pengajuan Surat Pengantar</h1>
    <p class="text-muted font-14">Silahkan upload persyaratan dalam bentuk foto/scan <br> Format : JPG | PNG | JPEG</p>
    <div class="accordion" id="faqAccordion">
        <div class="form-group">
            <label for="ktp">Fotocopy KTP</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="ktp" id="ktp"
                        onchange="previewImage(event, 'imageKTP')">
                    <label class="custom-file-label" for="ktp">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger pl-1" id="error-ktp"></small>
            <div id="imageKTP"></div>
        </div>
        <div class="form-group">
            <label for="pengantar">Surat Pengantar RT</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="pengantar" id="pengantar"
                        onchange="previewImage(event, 'imagePENGANTAR')">
                    <label class="custom-file-label" for="pengantar">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger pl-1" id="error-pengantar"></small>
            <div id="imagePENGANTAR"></div>
        </div>
        <button type="button" class="btn btn-primary" onclick="insert_2()">Ajukan surat</button>
    </div>
</div>

<script>
    var base_url = '<?= base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
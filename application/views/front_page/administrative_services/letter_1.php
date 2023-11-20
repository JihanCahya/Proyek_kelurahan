<div class="container mt-4">
    <h1 class="text-center mb-4">Form Surat Pengajuan KTP</h1>
    <p class="text-muted font-14">Silahkan upload persyaratan dalam bentuk foto/scan <br> Format : JPG | PNG | JPEG</p>
    <div class="accordion" id="faqAccordion">
        <div class="form-group">
            <label for="kk">Foto copy KK</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="kk" id="kk"
                        onchange="previewImage(event, 'imageKK')">
                    <label class="custom-file-label" for="kk">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger pl-1" id="error-kk"></small>
            <div id="imageKK"></div>
        </div>
        <div class="form-group">
            <label for="akta">Foto copy akta kelahiran</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta" id="akta"
                        onchange="previewImage(event, 'imageAKTA')">
                    <label class="custom-file-label" for="akta">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger pl-1" id="error-akta"></small>
            <div id="imageAKTA"></div>
        </div>
        <div class="form-group">
            <label for="kia">KIA asli/KTP lama</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="kia" id="kia"
                        onchange="previewImage(event, 'imageKIA')">
                    <label class="custom-file-label" for="kia">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger pl-1" id="error-kia"></small>
            <div id="imageKIA"></div>
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
        <button type="button" class="btn btn-primary" onclick="insert_1()">Ajukan surat</button>
    </div>
</div>

<script>
    var base_url = '<?= base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
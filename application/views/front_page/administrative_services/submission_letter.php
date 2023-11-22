<body>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Persyaratan Pengajuan Surat</h1>
        <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#basicAccordionCollapseOne" aria-expanded="false"
                        aria-controls="basicAccordionCollapseOne">
                        Surat Pengajuan KTP
                    </button>
                </h2>
                <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <strong>Persyaratan Surat</strong><br>
                        <p>1. Foto copy KK<br>
                            2. Foto copy Akta Kelahiran<br>
                            3. KIA asli/KTP lamabr<br>
                            4. Surat pengantar RT
                        </p>
                        <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalAjukan_1">Ajukan
                            Surat</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#basicAccordionCollapseTwo" aria-expanded="false"
                        aria-controls="basicAccordionCollapseTwo">
                        Surat Pengajuan KK
                    </button>
                </h2>
                <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <strong>Persyaratan Surat</strong><br>
                        <p>1. Foto copy KTP<br>
                            2. Surat pengantar RT</p>
                        <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalAjukan_2">Ajukan
                            Surat</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#basicAccordionCollapseThree" aria-expanded="false"
                        aria-controls="basicAccordionCollapseThree">
                        Surat Keterangan
                    </button>
                </h2>
                <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <strong>Persyaratan Surat</strong><br>
                        <p>1. Foto copy KTP<br>
                            2. Surat pengantar RT</p>
                        <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalAjukan_3">Ajukan
                            Surat</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal untuk ajukan surat pengajuan KTP -->
        <div class="modal fade" id="modalAjukan_1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload persyaratan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <div class="col-lg-2">
                            <button type="button" id="btn-tambah" onclick="insert_1()"
                                class="btn btn-outline-primary btn-block">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal untuk ajukan surat pengajuan KK -->
        <div class="modal fade" id="modalAjukan_2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload persyaratan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="ktp2">Fotocopy KTP</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp2" id="ktp2"
                                                onchange="previewImage(event, 'imageKTP2')">
                                            <label class="custom-file-label" for="ktp2">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <small class="text-danger pl-1" id="error-ktp2"></small>
                                    <div id="imageKTP2"></div>
                                </div>
                                <div class="form-group">
                                    <label for="pengantar2">Surat Pengantar RT</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="pengantar2"
                                                id="pengantar2" onchange="previewImage(event, 'imagePENGANTAR2')">
                                            <label class="custom-file-label" for="pengantar2">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <small class="text-danger pl-1" id="error-pengantar2"></small>
                                    <div id="imagePENGANTAR2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <div class="col-lg-2">
                            <button type="button" id="btn-tambah" onclick="insert_2()"
                                class="btn btn-outline-primary btn-block">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal untuk ajukan surat keterangan -->
        <div class="modal fade" id="modalAjukan_3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload persyaratan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <div class="col-lg-2">
                            <button type="button" id="btn-tambah" onclick="insert_3()"
                                class="btn btn-outline-primary btn-block">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>

</html>
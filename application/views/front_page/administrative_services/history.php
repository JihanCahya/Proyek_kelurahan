<div class="container mt-4">
    <h1 class="text-center mb-4">History Transaksi</h1>
    <div class="card">
        <h5 class="card-header">Data history transaksi</h5>
        <div class="card-body">
            <p class="text-muted font-14">Anda dapat cek surat yang telah anda ajukan beserta alasan pada tabel di bawah
                ini</p>
            <hr>
            <table id="example" class="table table-hover table-bordered" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama Surat</th>
                        <th width="30%">Tanggal pengajuan</th>
                        <th width="20%">Status</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal untuk lihat detail history transaksi -->
<div class="modal fade" id="modalDetail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail history pengajuan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="nama">Nama Pengaju</label>
                            <div class="input-group">
                                <input type="hidden" class="form-control" id="id" name="id" readonly>
                                <input type="text" class="form-control" id="nama" name="nama" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="letter">Nama Surat</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="letter" name="letter" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date1">Tanggal Pengajuan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="date1" name="date1" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date2">Tanggal Selesai</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="date2" name="date2" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button type="button" id="btn-tambah" data-dismiss="modal"
                        class="btn btn-outline-primary btn-block">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit1">
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
                            <label for="kk1">Foto copy KK</label>
                            <input type="hidden" id="id" name="id">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="kk1" id="kk1"
                                        onchange="previewImage(event, 'imageKK1')">
                                    <label class="custom-file-label" for="kk1">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-kk1"></small>
                            <div id="imageKK1"></div>
                        </div>
                        <div class="form-group">
                            <label for="akta1">Foto copy akta kelahiran</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="akta1" id="akta1"
                                        onchange="previewImage(event, 'imageAKTA1')">
                                    <label class="custom-file-label" for="akta1">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-akta1"></small>
                            <div id="imageAKTA1"></div>
                        </div>
                        <div class="form-group">
                            <label for="kia1">KIA asli/KTP lama</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="kia1" id="kia1"
                                        onchange="previewImage(event, 'imageKIA1')">
                                    <label class="custom-file-label" for="kia1">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-kia1"></small>
                            <div id="imageKIA1"></div>
                        </div>
                        <div class="form-group">
                            <label for="pengantar1">Surat Pengantar RT</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pengantar1" id="pengantar1"
                                        onchange="previewImage(event, 'imagePENGANTAR1')">
                                    <label class="custom-file-label" for="pengantar1">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-pengantar1"></small>
                            <div id="imagePENGANTAR1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button type="button" id="btn-tambah" onclick="edit_1()"
                        class="btn btn-outline-primary btn-block">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit2">
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
                            <input type="hidden" id="id" name="id">
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
                                    <input type="file" class="custom-file-input" name="pengantar2" id="pengantar2"
                                        onchange="previewImage(event, 'imagePENGANTAR2')">
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
                    <button type="button" id="btn-tambah" onclick="edit_2()"
                        class="btn btn-outline-primary btn-block">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit3">
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
                            <label for="ktp3">Fotocopy KTP</label>
                            <input type="hidden" id="id" name="id">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="ktp3" id="ktp3"
                                        onchange="previewImage(event, 'imageKTP3')">
                                    <label class="custom-file-label" for="ktp3">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-ktp3"></small>
                            <div id="imageKTP3"></div>
                        </div>
                        <div class="form-group">
                            <label for="pengantar3">Surat Pengantar RT</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pengantar3" id="pengantar3"
                                        onchange="previewImage(event, 'imagePENGANTAR3')">
                                    <label class="custom-file-label" for="pengantar3">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="text-danger pl-1" id="error-pengantar3"></small>
                            <div id="imagePENGANTAR3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button type="button" id="btn-tambah" onclick="edit_3()"
                        class="btn btn-outline-primary btn-block">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
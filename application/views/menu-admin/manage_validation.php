<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pengajuan Surat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Pengajuan Surat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <h5 class="card-header">Kelola Pengajuan Surat</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Filter status</label>
                            <select class="form-control status" style="width: 100%;">
                                <option value="">Semua status</option>
                                <option>Belum Dicek</option>
                                <option>Belum Terpenuhi</option>
                                <option>Terpenuhi</option>
                                <option>Sudah Diambil</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <table id="example" class="table table-hover table-bordered" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">No</th>
                            <th width="10%">Nama Lengkap</th>
                            <th width="10%">Surat Yang Diajukan</th>
                            <th width="10%">Tanggal Pengajuan</th>
                            <th width="12%">Status</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="cekAjuan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Pengajuan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <label for="nama" class="col-lg-1 col-form-label">Nama</label>
                                <div class="col-lg-4">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                </div>

                                <label for="letter" class="col-lg-3 col-form-label">Surat Yang Diajukan</label>
                                <div class="col-lg-4">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="letter" id="letter" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kk" class="col-lg-2 col-form-label">Foto kk</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-kk"></small>
                                    <div id="imagePreviewKk"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kk" class="col-lg-2 col-form-label">Foto KTP</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-ktp"></small>
                                    <div id="imagePreviewKtp"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kia" class="col-lg-2 col-form-label">Foto KIA</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-kia"></small>
                                    <div id="imagePreviewKia"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ktpAsli" class="col-lg-2 col-form-label">Foto Ktp Asli</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-ktpAsli"></small>
                                    <div id="imagePreviewKtpAsli"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="akta" class="col-lg-2 col-form-label">Foto Akta</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-akta"></small>
                                    <div id="imagePreviewAkta"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pengantar" class="col-lg-2 col-form-label">Foto Pengantar</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-pengantar"></small>
                                    <div id="imagePreviewPengantarRt"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="foto" class="col-lg-2 col-form-label">Foto Pengaju</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-foto"></small>
                                    <div id="imagePreviewFoto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="dokumen" class="col-lg-2 col-form-label">Foto Dokumen Pendukung</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-dokumen"></small>
                                    <div id="imagePreviewDokDukung"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="dokumen" class="col-lg-2 col-form-label">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blm" value="1">
                                    <label class="form-check-label" for="blm">Belum Dicek</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="belum" value="2">
                                    <label class="form-check-label" for="belum">Belum Terpenuhi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="terpenuhi" value="3">
                                    <label class="form-check-label" for="terpenuhi">Terpenuhi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="sudah" value="4">
                                    <label class="form-check-label" for="non-halal">Sudah Diambil</label>
                                </div>
                                <small class="text-danger pl-3" id="error-status"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="keterangan" class="col-lg-2 col-form-label">Keterangan</label>
                                <div class="col-lg-10">
                                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"></textarea>
                                    <small class="text-danger pl-1" id="error-keterangan"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button type="button" id="btn-balas" onclick="update_data()" class="btn btn-outline-primary btn-block">Simpan</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="cekDetail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Pengajuan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <label for="nama" class="col-lg-3 col-form-label">Nama</label>
                                <div class="col-lg-9">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="letter" class="col-lg-3 col-form-label">Surat Yang Diajukan</label>
                                <div class="col-lg-9">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="letter" id="letter" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="status" class="col-lg-3 col-form-label">Status</label>
                                <div class="col-lg-9">
                                    <input type="text" value="Sudah Diambil" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="keterangan" class="col-lg-3 col-form-label">Keterangan</label>
                                <div class="col-lg-9">
                                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan" readonly></textarea>
                                    <small class="text-danger pl-1" id="error-keterangan"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cekSyarat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Persyaratan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <label for="nama" class="col-lg-3 col-form-label">Nama</label>
                                <div class="col-lg-9">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kk" class="col-lg-2 col-form-label">Foto kk</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-kk"></small>
                                    <div id="imagePreviewKk1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kk" class="col-lg-2 col-form-label">Foto KTP</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-ktp"></small>
                                    <div id="imagePreviewKtp1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="kia" class="col-lg-2 col-form-label">Foto KIA</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-kia"></small>
                                    <div id="imagePreviewKia1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ktpAsli" class="col-lg-2 col-form-label">Foto Ktp Asli</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-ktpAsli"></small>
                                    <div id="imagePreviewKtpAsli1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="akta" class="col-lg-2 col-form-label">Foto Akta</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-akta"></small>
                                    <div id="imagePreviewAkta1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pengantar" class="col-lg-2 col-form-label">Foto Pengantar</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-pengantar"></small>
                                    <div id="imagePreviewPengantarRt1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="foto" class="col-lg-2 col-form-label">Foto Pengaju</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-foto"></small>
                                    <div id="imagePreviewFoto1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="dokumen" class="col-lg-2 col-form-label">Foto Dokumen Pendukung</label>
                                <div class="col-lg-4 offset-2">
                                    <small class="text-danger pl-1" id="error-dokumen"></small>
                                    <div id="imagePreviewDokDukung1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahStatus">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <label for="nama" class="col-lg-3 col-form-label">Nama</label>
                                <div class="col-lg-9">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="letter" class="col-lg-3 col-form-label">Surat Yang Diajukan</label>
                                <div class="col-lg-9">
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="text" name="letter" id="letter" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="dokumen" class="col-lg-3 col-form-label">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blm1" value="1">
                                    <label class="form-check-label" for="blm">Belum Dicek</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="belum1" value="2">
                                    <label class="form-check-label" for="belum">Belum Terpenuhi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="terpenuhi1" value="3">
                                    <label class="form-check-label" for="terpenuhi">Terpenuhi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="sudah1" value="4">
                                    <label class="form-check-label" for="non-halal">Sudah Diambil</label>
                                </div>
                                <small class="text-danger pl-3" id="error-status"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <div class="col-lg-2">
                    <button type="button" id="btn-status" onclick="update_status()" class="btn btn-outline-primary btn-block">Simpan</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
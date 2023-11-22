<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Profil Kelurahan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Profil Kelurahan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <h5 class="card-header">Data Profil Kelurahan</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="imagePreview"></div>
                        <input type="hidden" name="id" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelImage">Icon Perusahaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image"
                                    onchange="previewImage(event)">
                                <label class="custom-file-label" for="card" id="label" name="label">Pilih file</label>
                                <small class="text-danger pl-1" id="error-image"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelNama">Nama Kelurahan</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama kelurahan">
                            <small class="text-danger pl-1" id="error-nama"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelAlamat">Alamat Kelurahan</label>
                            <textarea class="form-control" rows="2" id="alamat" name="alamat"
                                placeholder="Masukkan alamat kelurahan"></textarea>
                            <small class="text-danger pl-1" id="error-alamat"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelTelepon">Nomor Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon"
                                placeholder="Masukkan no telepon">
                            <small class="text-danger pl-1" id="error-telepon"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelEmail">Email Kelurahan</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan email">
                            <small class="text-danger pl-1" id="error-email"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelSejarah">Deskripsi Sejarah</label>
                            <textarea class="form-control" rows="3" id="sejarah" name="sejarah"
                                placeholder="Masukkan sejarah"></textarea>
                            <small class="text-danger pl-1" id="error-sejarah"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelVisi">Visi</label>
                            <textarea class="form-control" rows="2" id="visi" name="visi"
                                placeholder="Masukkan visi"></textarea>
                            <small class="text-danger pl-1" id="error-visi"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelMisi">Misi</label>
                            <textarea class="form-control" rows="5" id="misi" name="misi"
                                placeholder="Masukkan misi"></textarea>
                            <small class="text-danger pl-1" id="error-misi"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="labelMap">Link Map Kelurahan</label>
                            <textarea class="form-control" rows="5" id="map" name="map"
                                placeholder="Masukkan map kelurahan"></textarea>
                            <small class="text-danger pl-1" id="error-map"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="labelPreview">Preview Map</label>
                        <iframe class="w-100 mb-n2" style="height: 250px;" src="" frameborder="0" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-2">
                        <button type="button" id="btn-edit" onclick="edit_data()" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
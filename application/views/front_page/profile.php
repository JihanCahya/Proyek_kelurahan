<div class="container mt-4">
    <h1 class="text-center mb-4">Profile Diri</h1>
    <div class="row">
        <div class="col-lg-4">
            <img src="<?= base_url() ?>assets/image/user/ktm.jpeg" style="max-width: 500px; max-height: 500px;"
                class="img-thumbnail" alt="">
        </div>
        <div class="col-lg-6 offset-1">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan email">
            <label for="telepon">Nomor HP</label>
            <input type="number" class="form-control" id="telepon" placeholder="Masukkan nomor HP">
            <label for="alamat">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan username">
            <label for="password">Password Hash</label>
            <input type="text" class="form-control" id="password">
            <label for="password1">Password Baru</label>
            <input type="password" class="form-control" id="password 1" placeholder="Masukkan password baru">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="profil">Foto profil</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="profil" id="profil">
                    <label class="custom-file-label" for="profil">Pilih file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="ktp">Foto KTP</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="ktp" id="ktp">
                    <label class="custom-file-label" for="ktp">Pilih file</label>
                </div>
            </div>
        </div>
    </div>
</div>
<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('assets/image/icon.png') ?>" rel="icon">
    <title>SIPK | REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/template-auth/css/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

    <style>
        body {
            background-color: #FFF2D8;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(assets/image/logo-1.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Silahkan Daftar</h3>
                                </div>
                            </div>
                            <form method="post" action="<?php echo base_url('daftar'); ?>" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="nama">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama" id="nama"
                                        name="nama" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Email" id="email"
                                        name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="telepon">No HP</label>
                                    <input type="number" class="form-control" placeholder="Masukkan Nomor HP"
                                        id="telepon" name="telepon" value="<?= set_value('telepon'); ?>">
                                    <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Masukkan username"
                                        id="username" name="username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukkan password"
                                        id="password" name="password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password1">Ulangi Password</label>
                                    <input type="password" class="form-control" placeholder="Ulangi password"
                                        id="password1" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0"
                                            for="showPasswordCheckbox">Lihat
                                            password
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                                </div>
                                <a href="<?= base_url('login') ?>">Sudah punya akun?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src=" <?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/template-auth/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/template-auth/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/template-auth/js/main.js"></script>
    <script>
        var base_url = '<?php echo base_url() ?>';
        var _controller = '<?= $this->router->fetch_class() ?>';
    </script>
</body>

</html>
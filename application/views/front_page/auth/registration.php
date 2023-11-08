<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url('assets/template-user/img/icon.png') ?>" rel="icon">
	<link href="<?php echo base_url('assets/template-user/img/icon.png') ?>" rel="apple-touch-icon">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template-auth-user/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() ?>assets/template-auth-user/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('Front_page/insert_data'); ?>">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Daftar
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
						<input class="input100" type="text" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Nama Lengkap">
						<span class="focus-input100" data-placeholder="&#xf22e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" placeholder="Password" id="password" name="password" name="password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter phone_number">
						<input class="input100" type="text" id="phone_number" name="phone_number" value="<?= set_value('phone_number'); ?>" placeholder="Nomor Telepon">
						<span class="focus-input100" data-placeholder="&#xf2be;"></span>
					</div>
                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="<?= base_url() ?>assets/template-auth-user/#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
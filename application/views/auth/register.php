<!DOCTYPE html>
<html lang="en">

<head>
	<title>Saung Ngaji</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- MATERIAL DESIGN ICONIC FONT -->

	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">


	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/login/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/User/css/style.css">


<body>

	<!-- END nav -->

	<div class="wrapper">
		<div class="image-holder">
			<img src="<?= base_url(); ?>assets/User/bg-login.jpg" alt="">

		</div>

		<div class="form-inner">

			<?php $attributes = array('id' => 'registration_form', 'method' => 'post'); ?>

			<?php echo form_open('auth/registration', $attributes); ?>
			<div class="form-header">
				<h3 style="color: white; font-size: 40px;font-family: ChelseaMarket-Regular;margin: 0;">REGISTER</h3>
				<img src="<?= base_url(); ?>assets/User/login/images/sign-up.png" alt="" class="sign-up-icon">
			</div>

			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>

			<?php if ($this->session->flashdata('abort')) : ?>
				<div class="alert alert-secondary">
					<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
					<?= $this->session->flashdata('abort') ?>
				</div>
				<script type="text/javascript">
					swal({
						title: "ERROR !!!",
						text: "<?php echo $this->session->flashdata('abort'); ?>",
						showConfirmButton: true,
						type: 'error'
					});
				</script>
			<?php endif; ?>
			<div class="form-group">
				<label style="color: white;" for="">Username:</label>
				<input type="text" name="username" class="form-controllogin" autocomplete = "off" required>
			</div>
			<div class="form-group">
				<label style="color: white;" for="">Nama Lengkap:</label>
				<input type="text" name="nama" class="form-controllogin" autocomplete = "off" required>
			</div>
			<div class="form-group">
				<label style="color: white;" for="">E-mail:</label>
				<input type="text" name="email" class="form-controllogin" autocomplete = "off">
			</div>
			<div class="form-group">
				<label style="color: white;" for="">Password:</label>
				<input type="password" name="password" class="form-controllogin" autocomplete = "off">
			</div>
			<div class="form-group">
				<label style="color: white;" for="">Confirm Password:</label>
				<input type="password" name="confirmpassword" class="form-controllogin" >
			</div>
			<input class="buttonlogin" type="submit" name="submit" value="create my account">
			<br>
			<center style="color: white;"> Sudah Punya Akun ?
				<a href="<?= base_url('auth/login'); ?>">
					<p>Login Sekarang</p>
				</a>
			</center>


			</form>
		</div>

	</div>

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="<?= base_url(); ?>assets/User/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/aos.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url(); ?>assets/User/js/google-map.js"></script>
	<script src="<?= base_url(); ?>assets/User/js/main.js"></script>


	<script src="<?= base_url(); ?>assets/User/login/js/jquery.form-validator.min.js"></script>
	<script src="<?= base_url(); ?>assets/User/login/js/main.js"></script>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
	<title>Login | Stimul Education and Consulting</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/admin/'); ?>assets/myimg/logo.png">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url('public/login/'); ?>css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url('public/login/'); ?>images/bg5.jpg);">
	<section class="ftco-section">
		<div class="container">
			<?php if ($this->session->flashdata('success')) { ?>
				<div class="alert alert-success" role="alert" style="height: 55px;">
					<p style="text-align: center;"><?php echo $this->session->flashdata('success'); ?></p>
				</div>
			<?php } ?>
			<div class="row justify-content-center">
				<div class="col-md-8 text-center mb-5">
					<h2 class="heading-section"><b>Stimul Education and Consulting | Admin panel </b></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form action="<?php echo base_url($uri = 'login_act'); ?>" method="post" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3"> Sign In </button>
							</div>

							<div class="form-group">
								<?php if ($this->session->flashdata('error')) { ?>
									<div class="alert alert-danger" role="alert" style="height: 55px;">
										<p style="text-align: center;"><?php echo $this->session->flashdata('error'); ?></p>
									</div>
								<?php } ?>
							</div>

							<div class="form-group d-md-flex">
								<!-- <div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div> -->
								<!-- <div class="w-100 text-md-right">
									<a href="#" style="color: #fff">Forgot Password ?</a>
								</div> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo base_url('public/login/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('public/login/'); ?>js/popper.js"></script>
	<script src="<?php echo base_url('public/login/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('public/login/'); ?>js/main.js"></script>
</body>
</html>
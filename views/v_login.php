<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('asset/')?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/')?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
<div class="container-login100">
	<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
	<span class="login100-form-title p-b-32">
		Form Login
	</span>
			<?php echo validation_errors(); ?>
			<?php 	  echo $this->session->flashdata('pesan_flash'); ?>
			<form action="<?php echo site_url('login/aksi')?>" method="post">
				
				<span class="txt1 p-b-11">
					Username </span>
				<label for="username" id="username"></label>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
				<input type="text" class="input100" id="usr" name="username">
				<span class="focus-input100"></span>
				</div>

				<span class="txt1 p-b-11">
					Password </span>
				<label for="password" id="password"></label>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Password is required">
				<input type="password" class="input100" id="pwd" name="password">
				<span class="focus-input100"></span>
				</div>
				<button class="login100-form-btn">
							Login
						</button>
				<button type="submit" class="container-login100-form-btn"></button>
			</form>
		</div>
	</div>
</div>

</body>
</html>

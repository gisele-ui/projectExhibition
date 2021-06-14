<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<title>Login</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		#floatingInput,
		#floatingSelectGrid {
			border: none !important;
			border-bottom: 1px solid gray !important;
			border-radius: 0px !important;
		}

		.input-group-text {
			background-color: white !important;
			border: none !important;
			border-bottom: 1px solid gray !important;
			border-radius: 0px !important;
		}

		label {
			left: 2em !important;
			z-index: 2000;
		}

		.form-cont {
			position: relative;
			left: 80px;
			margin: 40px auto;
		}

		.image-cont {
			position: relative;
			right: 70px;
			margin: 40px auto;
			background-image: url("<?= base_url() ?>assets/images/Projections-amico.png");
			width: 40%;
			height: 500px;
			background-repeat: no-repeat;
			background-size: cover;
		}

		small {
			left: 3em !important;
			position: relative;
		}
	</style>
</head>

<body>

	<div class="image-cont float-end"></div>

	<div class="form-cont col-xl-4 float-start">
		<h3 class="fw-bold fst-italic text-center my-4 mb-5">Sign In</h3>

		<form action="<?= base_url("login") ?>" method="POST">
		<?php if($message) { ?>
   <div class="alert alert-danger text-danger">
	   <?= $message ?>
   </div>
   <?php } ?>
			<div class="form-floating input-group">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
				<input type="email" class="form-control shadow-none" value="<?= set_value("email") ?>" id="floatingInput" name="email" placeholder="Enter the email">
				<label for="floatingInput">Enter the email</label>
			</div>
			<small class="text-danger"><?= form_error("email") ?></small>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
				<input type="password" class="form-control shadow-none" value="<?= set_value("password") ?>" id="floatingInput" name="password" placeholder="Enter the password">
				<label for="floatingInput">Enter the password</label>
			</div>
			<small class="text-danger"><?= form_error("password") ?></small>

			<div class="row other-options mt-5">
				<div class="form-check col">
					<input class="form-check-input" type="checkbox" value="remember me" id="defaultCheck1">
					<label class="form-check-label text-primary" for="defaultCheck1">Remember me</label>
				</div>
				<div class="col"><p class="float-end"><a href="" class="text-decoration-none">Forgot password?</a></p></div>
			</div>

			<div class="sub-btn mb-3">
				<button class="btn btn-primary w-100 shadow-none">Sign in</button>
			</div>

			<div class="haveanncount">
				<p class="text-center">Don't have an account? <a href="register" class="text-decoration-none">Register</a></p>
			</div>

		</form>
	</div>
</body>

</html>

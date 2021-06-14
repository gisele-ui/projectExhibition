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
	<title>Register</title>
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
			right: 80px;
			margin: 40px auto;
		}

		.image-cont {
			position: fixed;
			left: 70px;
			margin: 40px auto;
			background-image: url("<?= base_url() ?>assets/images/Monitor-amico.png");
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

	<div class="image-cont float-start"></div>

	<div class="form-cont col-xl-4 float-end">
		<h3 class="fw-bold fst-italic text-center my-4 mb-5">Sign Up</h3>

		<form action="<?= base_url("index.php/forms/register/saveUser") ?>" method="POST">

			<div class="form-floating input-group">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control shadow-none" id="floatingInput" name="username" value="<?= set_value("username") ?>" placeholder="Enter the username">
				<label for="floatingInput">Enter the username</label>
			</div>
			<small class="text-danger"><?= form_error("username") ?></small>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
				<input type="email" class="form-control shadow-none" id="floatingInput" name="email" value="<?= set_value("email") ?>" placeholder="Enter the email">
				<label for="floatingInput">Enter the email</label>
			</div>
			<small class="text-danger"><?= form_error("email") ?></small>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
				<input type="password" class="form-control shadow-none" id="floatingInput" name="password" value="<?= set_value("password") ?>" placeholder="Enter the password">
				<label for="floatingInput">Enter the password</label>
			</div>
			<small class="text-danger"><?= form_error("password") ?></small>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
				<select name="classId" required class="form-select shadow-none" id="floatingSelectGrid" aria-label="Floating label select example">
				    <option value="">Select your class</option>
					<option value="1">Year One A</option>
					<option value="2">Year One B</option>
					<option value="3">Year One C</option>
					<option value="4">Year two A</option>
					<option value="5">Year two B</option>
					<option value="6">Year two C</option>
				</select>
				<label for="floatingSelectGrid">Select your class</label>
			</div>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
				<select required onchange="getSector(this)" class="form-select shadow-none" id="floatingSelectGrid" aria-label="Floating label select example">
				<option value="">Select your district</option>
					<?php
					$prevDist = "";
					foreach ($result as $row) {
					if ($row->districtName != $prevDist) { ?>
					<option value="<?= $row->districtId ?>"><?= $row->districtName ?></option>
					<?php }
						$prevDist = $row->districtName;
					}
			        ?>

				</select>
				<label for="floatingSelectGrid">Select your district</label>
			</div>

			<div class="form-floating input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
				<select name="sectorId" required class="form-select shadow-none sectors" id="floatingSelectGrid" aria-label="Floating label select example">
				<option value="">Select your sector</option>
				<?php
					foreach ($result as $row) { ?>
					<option style="display: none;" class="<?= $row->districtId ?> sectors-options" value="<?= $row->sectorId ?>"><?= $row->sectorName ?></option>
					<?php } ?>
				</select>
				<label for="floatingSelectGrid">Select your sector</label>
			</div>

			<div class="sub-btn mt-5">
				<button class="btn btn-primary w-100 shadow-none">Sign Up</button>
			</div>

			<div class="haveanncount mt-2">
				<p class="text-center">Already have an account? <a href="<?=base_url('index.php/forms/login/login')?>" class="text-decoration-none">Sign in</a></p>
			</div>

		</form>
	</div>

	<script>
	function getSector(id){
		let selector = document.getElementsByClassName("sectors")[0];
		selector.value = "";
	    let allSectors = document.getElementsByClassName("sectors-options");

		for(let a=0; a<allSectors.length; a++){
           allSectors[a].style.display = "none";
		}

		let sectors = document.getElementsByClassName(id.value);

		for(let i=0; i<sectors.length; i++){
           sectors[i].style.display = "block";
		}
	}
	</script>
</body>

</html>

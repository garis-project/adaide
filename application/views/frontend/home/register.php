<body class="bg-black height-full">
	<div class="pt-5">
		<div class="container-xl pt-5">
			<div class="col-md-6 mx-auto my-auto ">
				<h1 class="text-header text-center">
					<img src="<?= base_url('assets/frontend/') ?>/image/logo-putih.png" class="logo mt-3">
				</h1>
				<div class="card bg-transparent">
					<p class="lead text-center p-4">Sign up for your account</p>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="inputName">Full Name</label>
									<input type="email" class="form-control form-control bg-transparent text-white" placeholder="ex: Hamdan Fauzi" id="inputName" aria-describedby="nameHelp">
								</div>
							</div>
							<div class="col">
								<label for="inputGender">Gender</label>
								<select class="form-control bg-transparent text-white">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<input type="email" class="form-control bg-transparent text-white" placeholder="ex: hamdanfauzi@mail.com" id="inputEmail" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="col">
								<label for="inputNumber">Number</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-transparent text-white" id="basic-addon1">+62</span>
									</div>
									<input type="text" class="form-control bg-transparent text-white" placeholder="ex: 832 1313 3123" aria-label="number" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="inputPassword">Password</label>
									<input type="password" class=" form-control text-white bg-transparent" id="inputPassword" placeholder="Your password">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="inputConfirmPassword">Confirm Password</label>
									<input type="password" class="form-control text-white bg-transparent" id="inputPassword" placeholder="Confirm your password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputConfirmPassword">Address</label>
							<input type="text" class="form-control text-white bg-transparent" id="textArea"></input>
						</div>
						<div class="mx-auto text-center">
							<button type="submit" class="btn btn-danger text-center w-100 py-2 mt-3">Register</button>
							<p id="emailHelp" class="form-text text-muted mt-5">Have an account? just <a href="#">Login</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
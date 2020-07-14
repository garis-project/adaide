<body class="bg-black">
	<div class="height-full pt-5">
		<div class="container-xl pt-5">
			<div class="col-md-5 mx-auto my-auto">
				<h1 class="text-header text-center">
					<img src="<?= base_url('assets/frontend/') ?>/image/logo-putih.png" class="logo mt-3">
				</h1>
				<div class="card bg-transparent">
					<div class="card-body">
						<div class="header text-center">
							<h1 class=" text-center text-uppercase">
								Welcome in <span class="font-weight-bold">adaide</span>
							</h1>
							<p>Please login to your account.</p>
						</div>
						<form class="mt-5">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control form-control-lg bg-transparent text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control form-control-lg text-white bg-transparent" id="exampleInputPassword1">
							</div>
							<div class="mx-auto text-center">
								<button type="submit" class="btn btn-danger text-center w-50 py-2 mt-3">Login</button>
								<p id="emailHelp" class="form-text text-muted mt-5">New in adaide? please <a href="<?= base_url('auth/register') ?>">Sign Up</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
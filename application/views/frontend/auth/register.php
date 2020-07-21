<body class="bg-black height-full">
	<div class="pt-5">
		<div class="container-xl">
			<div class="col-md-6 mx-auto my-auto ">
				<h1 class="text-header text-center">
					<img src="<?= base_url('assets/frontend/') ?>/img/logo-putih.png" class="logo mt-3">
				</h1>
				<div class="card bg-transparent">
					<p class="lead text-center p-4">Sign up for your account</p>
					<div class="card-body">
						<form role="form" method="POST" action="<?= base_url('auth/register'); ?>">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="inputName">Full Name</label>
										<input type="text" name="name" onkeypress="return /^[a-zA-Z ]*$/i.test(event.key)"  onkeyup="this.value = this.value.toUpperCase();" class="form-control form-control bg-transparent text-white" placeholder="ex: Hamdan Fauzi" id="your_name" aria-describedby="nameHelp" autofocus value="<?= set_value('name')?>" maxlength="22">
										<?= form_error('name','<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="col">
									<label for="inputGender">Gender</label>
									<select class="form-control bg-transparent text-white" name="gender">
										<option value="L" <?php if(set_value("gender")=="L"){echo "selected";}?>>Male</option>
                        				<option value="P" <?php if(set_value("gender")=="P"){echo "selected";}?>>Female</option>
									</select>
									<?= form_error('gender','<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="inputEmail">Email</label>
										<input type="email" class="form-control bg-transparent text-white" placeholder="ex: hamdanfauzi@mail.com" id="email" onkeyup="this.value = this.value.toLowerCase();"  aria-describedby="emailHelp" name="email" value="<?= set_value('email')?>" maxlength="30"/>
										<?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="col">
									<label for="inputNumber">Number</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white" id="basic-addon1">+62</span>
										</div>
										<input type="text" name="phone" onkeypress="return /^[0-9]*$/i.test(event.key)"  class="form-control bg-transparent text-white" placeholder="ex: 832 1313 3123" aria-label="number" aria-describedby="basic-addon1" minlength="10" maxlength="11">
										<?= form_error('phone','<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="inputPassword">Password</label>
										<input id="password" type="password" class=" form-control text-white bg-transparent" name="password1" placeholder="Your password" maxlength="20"/>
										<?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="inputConfirmPassword">Confirm Password</label>
										<input id="password2" type="password" class="form-control text-white bg-transparent" name="password2" placeholder="Confirm your password" maxlength="20"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputConfirmPassword">Address</label>
								<input type="text" onkeypress="return /^[0-9A-Za-z.,/()+_- ]*$/i.test(event.key)" onkeyup="this.value = this.value.toUpperCase();"  class="form-control text-white bg-transparent" id="address"  name="address" ></input>
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
								<input type="checkbox" name="agree" class="custom-control-input" id="agree">
								<label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
								<?= form_error('agree','<small class="text-danger pl-3">', '</small>'); ?>
								</div>
                  			</div>
							<div class="mx-auto text-center">
								<button type="submit" class="btn btn-danger text-center w-100 py-2 mt-3">Register</button>
								<p id="emailHelp" class="form-text text-muted mt-5">Have an account? just <a href="<?= base_url('auth') ?>">Login</a></p>
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

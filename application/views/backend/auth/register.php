    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('assets') ?>/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form role="form" method="POST" action="<?= base_url('auth/register'); ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="your_name">Your Name</label>
                      <input id="your_name" type="text" class="form-control" name="name" autofocus value="<?= set_value('name')?>">
                      <?= form_error('name','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Gender</label>
                      <select class="form-control selectric" name="gender">
                        <option value="L" <?php if(set_value("gender")=="L"){echo "selected";}?>>Male</option>
                        <option value="P" <?php if(set_value("gender")=="P"){echo "selected";}?>>Female</option>
                      </select>
                      <?= form_error('gender','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                        <label for="last_name">Phone Number</label>
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">+62</span>
                            </div>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="addon-wrapping" value="<?= set_value('phone')?>">
                        </div>
                        <?= form_error('phone','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email')?>">
                      <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" name="password1">
                      <?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-divider">
                    Your Home
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Address</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                      <?= form_error('agree','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; ADAIDE 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?= base_url('assets/backend/'); ?>img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">ADAIDE</span></h4>
            <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
            <?= $this->session->flashdata('message'); ?>
            <form method="POST" action="<?= base_url('admin/auth'); ?>" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" value="<?= set_value('email') ?>" autofocus>
                <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; ADAIDE
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url('assets/backend'); ?>/img/unsplash/login-bg.jpg">
        </div>
      </div>
    </section>
  </div>

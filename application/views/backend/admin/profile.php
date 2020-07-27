<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi <?= $user['nama_user']; ?> </h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget" style="height:350px">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?= base_url('assets/backend/')?>img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label"><?= $user['email_user'] ?></div>
                        <div class="profile-widget-item-value"><?= $user['kontak'] ?>7</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?= $user['nama_user']; ?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> <?= $role['role']; ?></div></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" action="<?= base_url('admin/dashboard/update') ?>">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" value="<?= $user['nama_user'] ?>" >
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= $user['email_user'] ?>" required="">
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" value="<?= $user['kontak'] ?>">
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
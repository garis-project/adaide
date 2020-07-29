<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Whatsapp Settings</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
              <div class="breadcrumb-item">Notification</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi Administrator</h2>
            <p class="section-lead">
              Change information about whatsapp on this page.
            </p>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                      <h4>Edit Notification</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Token</label>
                            <input type="text" class="form-control" name="token" id="token" value="<?= $wa['token'] ?>">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3 col-12">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="on">ON</option>
                                    <option value="off">OFF</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label>Valid Until</label>
                                <input type="text" class="form-control" id="enddate" name="enddate" value="<?= $wa['valid'] ?>" />
                            </div>
                            <div class="form-group col-md-5 col-12">
                              <label>Phone</label>
                              <input type="tel" class="form-control" onkeypress="return /^[0-9]*$/i.test(event.key)" name="phone" id="phone" value="<?= $wa['phone'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="button" class="btn btn-primary" onclick="changeWA()">Save Changes</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
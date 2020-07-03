      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add New Events</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('events'); ?>">Events</a></div>
              <div class="breadcrumb-item">View</div>
            </div>
          </div>

          <div class="section-body">
            <form >
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Advertise</h4>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <div class=" float-center">
                                <img src="<?= base_url('assets/img/events/').$event['banner']; ?> " class="img-fluid" id="banner-img"alt="Responsive image">
                              </div>
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <blockquote class="blockquote"><?= $event['deskripsi']; ?></blockquote>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                  <div class="card">
                    <div class="card-header">
                        <h4>Events Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Events Name</label>
                          <input type="text" class="form-control" value="<?= $event['nama_event']; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label>Due Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="<?= date("d/m/Y",strtotime($event['tanggal_mulai'])); ?>" readonly/>
                            <div class="input-group-append">
                                <span class="input-group-text">Until</span>
                            </div>
                            <input type="text" class="form-control" value="<?= date("d/m/Y",strtotime($event['tanggal_selesai'])); ?>" readonly/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Location</label>
                          <input type="text" class="form-control" placeholder="Address Of Events" value="<?= $event['lokasi']; ?>" readonly/>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input class="form-control" id="events_status" name="events_status" value="<?= $event['status']; ?>" readonly/>
                        </div>
                        
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
  
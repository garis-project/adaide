      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add New Events</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('events'); ?>">Events</a></div>
              <div class="breadcrumb-item">Add</div>
            </div>
          </div>

          <div class="section-body">
            <form role="form" action='<?= base_url('events/add') ?>' method='POST' enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Advertise</h4>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                            <div class="float-center">
                              <img src="<?= base_url('assets/img/events/')."default.png"; ?> " class="img-fluid" id="banner-img"alt="Responsive image">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Banner</label>
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="banner-input" name="banner-input">
                                  <label class="custom-file-label" for="banner-name" id="banner-name" name="banner-name"></label>
                                </div>
                            </div>
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
                          <input type="text" class="form-control" id="events_name" name="events_name">
                        </div>
                        <div class="form-group">
                          <label>Due Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="startdate" name="startdate"/>
                            <div class="input-group-append">
                                <span class="input-group-text">Until</span>
                            </div>
                            <input type="text" class="form-control" id="enddate" name="enddate" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Location</label>
                          <input type="text" class="form-control" placeholder="Address Of Events" id="location" name="location" />
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select class="custom-select" id="events_status" name="events_status">
                            <option selected>Choose Status Of Events</option>
                            <option value="Onprogress">On Progress</option>
                            <option value="Processed">Processed</option>
                            <option value="Completed">Completed</option>
                          </select>
                        </div>
                        <div class="form-group mb-0">
                          <label>Description</label>
                          <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
        </section>
      </div>
  
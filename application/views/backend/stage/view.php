      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>View Stage</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('stage'); ?>">Stage</a></div>
              <div class="breadcrumb-item">View</div>
            </div>
          </div>

          <div class="section-body">
            <form>
              <div class="row">   
                <div class="col-4">
                  <div class="card">
                    <div class="card-header">
                        <h4>Stage Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Stage Name</label>
                          <input type="text" class="form-control" id="stage_name" name="stage_name" value="<?= $stage['nama_stage'] ?>" readonly />
                         
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Address" name="address" value="<?= $stage['alamat_stage'] ?>" readonly />
                        </div>
                        <div class="form-group">
                          <label>City</label>
                          <select class="form-control" name="city" readonly>
                            <option value="<?= $stage['kota_stage'] ?>"><?= $stage['kota_stage'] ?></option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Geocode</label>
                          <input type="text" class="form-control" placeholder="Latitude,Longitude" name="geocode" id="geocode" value="<?= $stage['geocode'] ?>" readonly/>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-8">
                    <div class="card">
                      <div class="card-header">
                        <h4>Map</h4>
                      </div>
                      <div class="card-body">
                        <div id='map' style='width: 100%; height: 380px;'></div>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
  
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add New Stage</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('stage'); ?>">Stage</a></div>
              <div class="breadcrumb-item">Add</div>
            </div>
          </div>

          <div class="section-body">
            <form role="form" action='<?= base_url('stage/add') ?>' method='POST' enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Map</h4>
                      </div>
                      <div class="card-body">
                        <div id='map' style='width: 400px; height: 300px;'></div>
                        <script>
                        mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FyaXMwNCIsImEiOiJja2NwaTVzN2owNGZmMnRtcXJyN3I3M3dtIn0.JSU41eR6kbD5e9v_yQsbOg';
                          var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
                          mapboxClient.geocoding
                          .forwardGeocode({
                          query: 'Tasikmalaya, Indonesia',
                          autocomplete: false,
                          limit: 1
                          })
                          .send()
                          .then(function(response) {
                          if (
                          response &&
                          response.body &&
                          response.body.features &&
                          response.body.features.length
                          ) {
                          var feature = response.body.features[0];
                          
                          var map = new mapboxgl.Map({
                          container: 'map',
                          style: 'mapbox://styles/mapbox/streets-v11',
                          center: feature.center,
                          zoom: 10
                          });
                          new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
                          }
                          });
                        </script> 
                      </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                  <div class="card">
                    <div class="card-header">
                        <h4>Stage Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Stage Name</label>
                          <input type="text" class="form-control" id="stage_name" name="stage_name">
                          <?= form_error('stage_name','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Address" name="address" />
                          <?= form_error('Address','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>City</label>
                          <select class="form-control" name="city">
                            <?php foreach($area as $city){ ?>
                              <option value="<?= $city['nama']?>"><?= $city['nama']?></option>
                            <?php } ?>
                          </select>
                          <?= form_error('city','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Geocode</label>
                          <input type="text" class="form-control" placeholder="Geocode" name="geocode" />
                          <?= form_error('geocode','<small class="text-danger pl-3">', '</small>'); ?>
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
  
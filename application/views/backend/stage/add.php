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
            <form role="form" action='<?= base_url('admin/stage/add') ?>' method='POST'>
              <div class="row">
                
                <div class="col-4">
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
                          <input type="text" class="form-control" placeholder="Latitude,Longitude" name="geocode" id="geocode" readonly />
                          <?= form_error('geocode','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
                <div class="col-8">
                    <div class="card">
                      <div class="card-header">
                        <h4>Map</h4>
                      </div>
                      <div class="card-body">
                        <div id='mapSearch' style='width: 100%; height: 460px;'></div>
                        <script>
                          mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FyaXMwNCIsImEiOiJja2NwaTVzN2owNGZmMnRtcXJyN3I3M3dtIn0.JSU41eR6kbD5e9v_yQsbOg';
                          var mapSearch = new mapboxgl.Map({
                            container: 'mapSearch',
                            style: 'mapbox://styles/mapbox/streets-v11',
                            center: [108.2236116,-7.3488505],
                            zoom: 10
                          });

                          var geocoder = new MapboxGeocoder({
                            accessToken: mapboxgl.accessToken,
                            marker:{
                              color:'transparent'
                            },
                            mapboxgl: mapboxgl
                          });
                          
                          var markerPick = new mapboxgl.Marker({
                              draggable: true,
                          })
                          .setLngLat([108.2236116,-7.3488505])
                          .addTo(mapSearch);

                          mapSearch.addControl(geocoder);

                          geocoder.on('result', function(e) {
                            let lat=e.result.center[1];
                            let lng=e.result.center[0];
                            markerPick.setLngLat([lng,lat]);
                            markerPick.addTo(mapSearch);
                            $('#geocode').val(lng+","+lat);
                          })
                          
                            function onDragEnd() {
                              var lngLat = markerPick.getLngLat();
                              $('#geocode').val(lngLat.lng+","+lngLat.lat);
                            }

                            markerPick.on('dragend', onDragEnd);
                        </script>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
  
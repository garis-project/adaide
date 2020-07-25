      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Stage</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('stage'); ?>">Stage</a></div>
              <div class="breadcrumb-item">Update</div>
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
                          <input type="text" class="form-control" id="stage_name" name="stage_name" value="<?= $stage['nama_stage'] ?>">
                          <?= form_error('stage_name','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Address" name="address" value="<?= $stage['alamat_stage'] ?>" />
                          <?= form_error('Address','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>City</label>
                          <select class="form-control" name="city">
                            <?php foreach($area as $city){ ?>
                              <option value="<?= $city['nama']?>" <?php if($city['nama']==$stage['kota_stage']){ echo "selected";} ?> ><?= $city['nama']?></option>
                            <?php } ?>
                          </select>
                          <?= form_error('city','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Geocode</label>
                          <input type="text" class="form-control" placeholder="Latitude,Longitude" name="geocode" id="geocode" value="<?= $stage['geocode'] ?>" />
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
                        <div id='map' style='width: 100%; height: 520px;'></div>
                        <script>
                          mapboxgl.accessToken = 'pk.eyJ1IjoiYWRhaWRlIiwiYSI6ImNrZDE5aHNrcDExZnkycnFyOGZnY282ZXcifQ.uBbquafl-3hyE0TlddYsQg';
                          var map = new mapboxgl.Map({
                            container: 'map',
                            style: 'mapbox://styles/mapbox/streets-v11',
                            center: [108.2236116,-7.3488505],
                            zoom: 10
                          });


                          var geocoder = new MapboxGeocoder({
                            accessToken: mapboxgl.accessToken,
                            marker: {
                              draggable: true,
                              color: 'blue'
                            },
                            mapboxgl: mapboxgl
                          });

                          map.addControl(geocoder);

                          var coordinatesGeocoder = function(query) {
                            var matches = query.match(
                            /^[ ](?:Lat: )?(-?\d+\.?\d)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
                            );
                            if (!matches) {
                              return null;
                            }
 
                            function coordinateFeature(lng, lat) {
                              return {
                                center: [lng, lat],
                                geometry: {
                                type: 'Point',
                                coordinates: [lng, lat]
                              },
                              place_name: 'Lat: ' + lat + ' Lng: ' + lng,
                              place_type: ['coordinate'],
                              properties: {},
                              type: 'Feature'
                              };
                            }

                            var coord1 = Number(matches[1]);
                            var coord2 = Number(matches[2]);
                            var geocodes = [];

                            if (coord1 < -90 || coord1 > 90) {
                              geocodes.push(coordinateFeature(coord1, coord2));
                            }
                            if (coord2 < -90 || coord2 > 90) {
                              geocodes.push(coordinateFeature(coord2, coord1));
                            }
                            if (geocodes.length === 0) {
                              geocodes.push(coordinateFeature(coord1, coord2));
                              geocodes.push(coordinateFeature(coord2, coord1));
                            }
                            console.log(geocodes);
                            return geocodes;
                          };
                          // function onDragEnd() {
                          //     var lngLat = marker.getLngLat();
                          //     $('#geocode').val(lngLat.lng+","+lngLat.lat);
                          // }

                          // marker.on('dragend', onDragEnd);
                        </script>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
  
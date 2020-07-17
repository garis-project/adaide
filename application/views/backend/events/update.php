      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Events</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('admin/events'); ?>">Events</a></div>
              <div class="breadcrumb-item">Update</div>
            </div>
          </div>
          <div class="section-body">
            <form role="form" action='<?= base_url('admin/events/update') ?>' method='POST' enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Advertise</h4>
                      </div>
                      <div class="card-body">
                          <div class="mx-auto">
                              <img src="<?= base_url('assets/backend/img/events/').$event['banner']; ?> " id="banner-img" width="40%" height="50%">
                          </div>
                          <div class="form-group">
                            <label>Banner</label>
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="banner-input" name="banner-input">
                                  <label class="custom-file-label" for="banner-name" id="banner-name" name="banner-name" onchange="checkImg()"></label>
                                  <input type="hidden" id="image-check" name="image-check"/>
                                  <input type="hidden" name="image-default" value="<?= $event['banner'] ?>" />

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
                      <input type="hidden" name="id_events" id="id_events" value="<?= $event['id_event'] ?>" />
                      <div class="form-group">
                        <label>Events Name</label>
                        <input type="text" class="form-control" onkeypress="return /^[a-zA-Z0-9 ]*$/i.test(event.key)" id="events_name" name="events_name" value="<?= $event['nama_event']; ?>" />
                        <?= form_error('events_name','<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>Due Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="startdate" name="startdate" onchange="changeDate()" value="<?= $event['tanggal_mulai'] ?>" />
                            <div class="input-group-append">
                                <span class="input-group-text">Until</span>
                            </div>
                            <input type="text" class="form-control" id="enddate" name="enddate" value="<?= $event['tanggal_selesai'] ?>" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Stage</label>
                        <select class="form-control" name="id_stage">
                          <?php foreach($stage as $st){ ?>
                            <option <?php if($event['id_stage']==$st['id_stage']){echo "selected";} ?> value="<?= $st['id_stage']?>"><?= $st['nama_stage'].", ".$st['alamat_stage'].", ".$st['kota_stage']?></option>
                          <?php } ?>
                        </select>
                        <?= form_error('id_stage','<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="events_status" name="events_status">
                          <option <?php if($event['status_event']=="Onprogress"){echo "selected";} ?> value="Onprogress">On Progress</option>
                          <option <?php if($event['status_event']=="Processed"){echo "selected";} ?>value="Processed">Processed</option>
                          <option <?php if($event['status_event']=="Completed"){echo "selected";} ?> value="Completed">Completed</option>
                        </select>
                        <?= form_error('events_status','<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description"><?= $event['deskripsi']; ?></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type ="submit" class="btn btn-primary">Submit</button>
                    </div> 
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
  
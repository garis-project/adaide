      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add New Events</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('admin/events'); ?>">Events</a></div>
              <div class="breadcrumb-item">Add</div>
            </div>
          </div>
          <div class="section-body">
            <form role="form" action='<?= base_url('admin/events/add') ?>' method='POST' enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Advertise</h4>
                      </div>
                      <div class="card-body">
                        <div class="text-center">
                              <img src="<?= base_url('assets/backend/img/events/')."default.png"; ?> "id="banner-img" width="40%" height="50%">
                        </div>
                        <div class="form-group">
                          <label>Banner</label>
                          <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="banner-input" name="banner-input">
                                <label class="custom-file-label" for="banner-name" id="banner-name" name="banner-name" onchange="checkImg()"></label>
                                <input type="hidden" id="image-check" name="image-check"/>
                                <input type="hidden" name="image-default" value="default.png" />
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
                      <label>Events ID</label>
                      <div class="input-group mb-3">
                        <input type="text" id="id_events" name="id_events" class="form-control" onkeypress="return /^[a-zA-Z ]*$/i.test(event.key)" onkeyup="this.value = this.value.toUpperCase();" placeholder="Vendor Initial (3 Character)" maxlength="3" minlength="3">
                        <div class="input-group-append">
                          <span class="input-group-text" id="date_tmp" name="date_tmp"><?= date("dmY"); ?></span>
                          <input type="hidden" name="date_events" id="date_events"/>
                        </div>
                      </div>
                      </div>
                        <div class="form-group">
                          <label>Events Name</label>
                          <input type="text" class="form-control" onkeypress="return /^[a-zA-Z0-9 ]*$/i.test(event.key)" id="events_name" name="events_name">
                          <?= form_error('events_name','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Due Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="startdate" name="startdate" onchange="changeDate()"/>
                            <div class="input-group-append">
                                <span class="input-group-text">Until</span>
                            </div>
                            <input type="text" class="form-control" id="enddate" name="enddate" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Stage</label>
                          <select class="form-control" name="id_stage">
                            <option value="default">Choose Stage</option>
                            <?php foreach($stage as $st){ ?>
                              <option value="<?= $st['id_stage']?>"><?= $st['nama_stage'].", ".$st['alamat_stage'].", ".$st['kota_stage']?></option>
                            <?php } ?>
                          </select>
                          <?= form_error('id_stage','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" id="events_status" name="events_status">
                            <option selected>Choose Status Of Events</option>
                            <option value="Onprogress">On Progress</option>
                            <option value="Processed">Processed</option>
                            <option value="Completed">Completed</option>
                          </select>
                          <?= form_error('events_status','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-0">
                          <label>Description</label>
                          <textarea class="form-control summernote" id="description" name="description"></textarea>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row"></div>
                <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                        <h4>Ticket</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="id_type" class="col-sm-2 my-auto">Ticket Type</label>
                          <div class="col-sm-3">
                          <select class="form-control" name="id_type" id="id_type">
                            <option value="default">Choose Ticket Type</option>
                            <?php foreach($ticket as $data){ ?>
                              <option value="<?= $data['id_jenis_tiket']?>"><?= $data['jenis_tiket']?></option>
                            <?php } ?>
                          </select>
                          </div>
                        
                          <label class="col-sm-1 my-auto">Price</label>
                          <input class="form-control col-sm-2" type="text"  onkeypress="return /^[0-9]*$/i.test(event.key)" name="price" id="price"/>
                          <label class="col-sm-1 my-auto">Stok</label>
                          <input class="form-control col-sm-1" type="text"  onkeypress="return /^[0-9]*$/i.test(event.key)" name="stock" id="stock"/> 
                          <div class="col-sm-2">
                            <button type="button" class="btn btn-info sm-6 float-right" onclick="addTmpTicket()">Add</button>   
                          </div>                    
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table  class="table table-striped" id="tmpTicketTable">
                            <thead>
                              <tr class="text-center">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Ticket Type</th>
                                <th colspan="2">Price</th>
                                <th rowspan="2">Stok</th>
                                <th rowspan="2">Action</th>
                              </tr>
                              <tr>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>  
              </div>
              <div class="card-footer text-right">
                  <button type ="submit" class="btn btn-primary">Submit</button>
              </div> 
            </form>
          </div>
        </section>
      </div>
  
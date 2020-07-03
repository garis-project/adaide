      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Events</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('events'); ?>">Events</a></div>
              <div class="breadcrumb-item"></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Events</h4>
                  </div>
                  <div class="card-body">
                    <div class="">
                      <table class="table table-striped" id="table_data">
                        <thead>
                          <tr class="text-center">
                            <th >
                              No
                            </th>
                            <th>Events Name</th>
                            <th>Start Date</th>
                            <th>Finish Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=$this->uri->segment('3')+1;
                          foreach($events as $value){ 
                          ?>
                          <tr>
                            <td><?= $no ?> </td>
                            <td><?= $value['nama_event']; ?> </td>
                            <td><?= date("d/m/Y",strtotime($value['tanggal_mulai'])); ?> </td>
                            <td><?= date("d/m/Y",strtotime($value['tanggal_selesai'])); ?> </td>
                            <td><?= $value['lokasi']; ?> </td>
                            <td>
                              <div class="badge <?php if($value['status']=='completed'){
                                  echo 'badge-success';
                                  }elseif($value['status']=='Onprogress'){
                                    echo 'badge-info';
                                  }elseif($value['status']=='Processed'){
                                    echo 'badge-warning';
                                }?>">
                                <?= $value['status']; ?> 
                              </div>
                            </td>
                            <td>
                                <div class="form-inline">
                                    <form role="form" action='<?= base_url('events/view') ?>' method='POST'>
                                      <input type="hidden" name="id_events" id="id_events" value="<?= $value['id_event']; ?>">
                                      <button type="submit" class="btn btn-outline-info btn-sm">
                                        <i class="nav-icon fas fa-eye fa-xs"></i>
                                      </button>
                                  </form>
                                    <form role="form" action='<?= base_url('events/update') ?>' method='POST'>
                                      <input type="hidden" name="id_events" id="id_events" value="<?= $value['id_event']; ?>">    
                                      <button type="submit" class="btn btn-outline-info btn-sm">
                                        <i class="nav-icon fas fa-edit fa-xs"></i>
                                      </button>
                                    </form>
                                    <form role="form" action='<?= base_url('events/delete') ?>' method='POST'>
                                      <input type="hidden" name="id_events" id="id_events" value="<?= $value['id_event']; ?>">
                                      <button type="submit" class="btn btn-outline-danger btn-sm" onclick="hapus_data()">
                                        <i class="nav-icon fas fa-trash fa-xs"></i>
                                      </button>
                                    </form>
                                </div>
                            </td>
                            <?php $no ++ ?>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

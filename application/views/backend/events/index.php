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
            <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <a href="<?= base_url('admin/events/add') ?>">
                        <button class="btn btn-info">Create New</button>
                      </a>
                    </div>
                    <input type="hidden" id="hiddenId">
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" width=100%  id="table_data">
                        <thead>
                          <tr class="text-center">
                            <th>No</th>
                            <th>Events Name</th>
                            <th>Start Date</th>
                            <th>Finish Date</th>
                            <th>Stage</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=$this->uri->segment('3')+1;
                          foreach($events as $value){ 
                          ?>
                          <tr class="text-center">
                            <td><?= $no ?> </td>
                            <td><?= $value['nama_event']; ?> </td>
                            <td><?= date("d/m/Y",strtotime($value['tanggal_mulai'])); ?> </td>
                            <td><?= date("d/m/Y",strtotime($value['tanggal_selesai'])); ?> </td>
                            <td><?= $value['nama_stage']; ?> </td>
                            <td>
                            <?php 
                              $id_event= "'".$value['id_event']."'"; 
                              $status_event= "'".$value['status_event']."'"; 
                            ?>
                              <div class="btn badge <?php if($value['status_event']=='Completed'){
                                  echo 'badge-success';
                                  }elseif($value['status_event']=='Onprogress'){
                                    echo 'badge-info';
                                  }elseif($value['status_event']=='Processed'){
                                    echo 'badge-warning';
                                }?>" onclick="changeStatusEvents(<?= $id_event.','.$status_event ?>)">
                                <?= $value['status_event']; ?> 
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="form-inline">
                                <form role="form" action='<?= base_url('admin/events/view') ?>' method='POST'>
                                  <input type="hidden" name="id_events" value="<?= $value['id_event']; ?>">
                                  <button type="submit" class="btn btn-outline-info btn-sm">
                                    <i class="nav-icon fas fa-eye fa-xs"></i>
                                  </button>
                                </form>
                                 
                                  <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#ticketModal" onclick="loadDetailEvents(<?= $id_event ?>)">
                                    <i class="nav-icon fas fa-ticket-alt fa-xs"></i>
                                  </button>
                                <form role="form" action='<?= base_url('admin/events/update') ?>' method='POST'>
                                  <input type="hidden" name="id_events" value="<?= $value['id_event']; ?>">    
                                  <button type="submit" class="btn btn-outline-warning btn-sm">
                                    <i class="nav-icon fas fa-edit fa-xs"></i>
                                  </button>
                                </form>
                                <?php $id_event="'".$value['id_event']."'"; ?>
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteEvent(<?=$id_event ?>)">
                                  <i class="nav-icon fas fa-trash fa-xs"></i>
                                </button>
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
        </section>
      </div>

      <div class="modal fade" id="ticketModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ticket Information</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table  class="table table-striped" id="ticketTable" width="100%">
                  <thead>
                    <tr class="text-center">
                      <th rowspan="2">No</th>
                      <th rowspan="2">Ticket Type</th>
                      <th colspan="2">Price</th>
                      <th rowspan="2">Stok</th>
                      <th rowspan="2">Status</th>
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
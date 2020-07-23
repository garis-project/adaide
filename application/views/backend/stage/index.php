      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Stage</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('stage'); ?>">Stage</a></div>
              <div class="breadcrumb-item"></div>
            </div>
          </div>
          <div class="section-body">
            <div class="card">
                  <div class="card-header">
                    <h4>List Events</h4>
                  </div>
                  <div class="card-body">
                    <div class="row justify-content-center">
                    <div class="table-responsive">
                          <table class="table table-striped" id="table_data">
                            <thead>
                              <tr class="text-center">
                                <th>No</th>
                                <th>Stage Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Geocode</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              $no=$this->uri->segment('3')+1;
                              foreach($stage as $value){ 
                              ?>
                              <tr class="text-center">
                                <td><?= $no ?> </td>
                                <td><?= $value['nama_stage']; ?> </td>
                                <td><?= $value['alamat_stage']; ?> </td>
                                <td><?= $value['kota_stage']; ?> </td>
                                <td><?= $value['geocode']; ?> </td>
                                <td>
                                    <div class="form-inline">
                                        <form role="form" action='<?= base_url('admin/stage/view') ?>' method='POST'>
                                          <input type="hidden" name="id_stage" value="<?= $value['id_stage']; ?>">
                                          <button type="submit" class="btn btn-outline-info btn-sm">
                                            <i class="nav-icon fas fa-eye fa-xs"></i>
                                          </button>
                                      </form>
                                        <form role="form" action='<?= base_url('admin/stage/update') ?>' method='POST'>
                                          <input type="hidden" name="id_stage" value="<?= $value['id_stage']; ?>">    
                                          <button type="submit" class="btn btn-outline-info btn-sm">
                                            <i class="nav-icon fas fa-edit fa-xs"></i>
                                          </button>
                                        </form>
                                        <?php $id_stage="'".$value['id_stage']."'"; ?>
                                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteEvent(<?=$id_stage ?>)">
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

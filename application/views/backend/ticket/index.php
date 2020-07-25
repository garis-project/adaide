      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ticket Type</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('ticket'); ?>">Ticket Type</a></div>
              <div class="breadcrumb-item"></div>
            </div>
          </div>
          <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <button class="btn btn-info" onclick="createTicketType()">Create New</button>
                    </div>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                  <div class="table-responsive">
                        <table class="table table-striped" id="table_data">
                          <thead>
                            <tr class="text-center">
                              <th width="10%">Id ticket</th>
                              <th width="70%">Ticket Type</th>
                              <th width="20%">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            foreach($ticket as $value){ 
                            ?>
                            <tr class="text-center">
                              <td width="10%"><?= $value['id_jenis_tiket']; ?> </td>
                              <td width="70%"><?= $value['jenis_tiket']; ?> </td>
                              <td class="text-center" width="20%">
                                  <div class="text-center">
                                      <?php $id_ticket="'".$value['id_jenis_tiket']."'"; ?>
                                      <?php $ticket_type="'".$value['jenis_tiket']."'"; ?>
                                      <button type="submit" class="btn btn-outline-info btn-sm" onclick="editTicketType(<?=$id_ticket.','.$ticket_type ?>)" />
                                        <i class="nav-icon fas fa-edit fa-xs"></i>
                                      </button>       
                                      <button type="submit" class="btn btn-outline-danger btn-sm" onclick="deleteTicketType(<?=$id_ticket ?>)" >
                                        <i class="nav-icon fas fa-trash fa-xs"></i>
                                      </button>
                                  </div>
                              </td>
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

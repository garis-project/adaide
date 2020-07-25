      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Order</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('order'); ?>">Order</a></div>
              <div class="breadcrumb-item"></div>
            </div>
          </div>
          <div class="section-body">
            <div class="card">
                  <div class="card-header">
                    <h4>List Order</h4>
                  </div>
                  <div class="card-body">
                    <div class="row justify-content-center">
                    <div class="table-responsive">
                          <table class="table table-striped" width=100%  id="orderTable">
                            <thead>
                              <tr class="text-center">
                                <th>No</th>
                                <th>Order ID</th>
                                <th>User</th>
                                <th>Order Date</th>
                                <th class="text-center">Confirm Date</th>
                                <th>Event Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                    </div>
                  </div>
            </div>
          </div>
        </section>
      </div>

      <div class="modal fade" id="detailOrderModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Order</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <label>Order ID</label>
                  <input type="text" class="form-control" id="id_order" readonly>
                </div>
                <div class="col">
                  <label class="sm-4">Confirmation ID</label>
                  <div class="input-group">
                    <input type="text" class="form-control sm-6" id="id_confirm" readonly>
                    <input type="hidden" class="form-control sm-6" id="img_poofer">
                    <div class="input-group-append">
                      <button class="btn btn-info fas fa-eye sm-2" onclick="viewPoofer()"></button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label>Events Name</label>
                  <input type="hidden" id="id_events">
                  <input type="text" class="form-control" id="events_name" readonly>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-5">
                  <label>Ticket Type</label>
                  <input type="text" class="form-control" id="ticket_type" readonly>
                </div>
                <div class="col-sm-5">
                  <label>Price</label>
                  <input type="text" class="form-control text-right" id="price" readonly>
                </div>
                <div class="col-sm-2">
                  <label>Status</label>
                  <div id="badge_status"><label id="status_ticket"></label></div>
                </div>
                
                
              </div>
              <div class="form-row">
                <div class="col-sm-3">
                  <label>Stock</label>
                  <input type="text" class="form-control text-right" id="stock" readonly>
                </div>
                <div class="col-sm-2">
                  <label>Order Qty</label>
                  <input type="text" class="form-control text-right" id="qty" readonly>
                </div>
                <div class="col-sm-7">
                  <label>Amount Payment</label>
                  <input type="text" class="form-control text-right" id="total" readonly>
                  <input type="hidden" class="form-control text-right" id="hideTotal" readonly>
                </div>
              </div>
              </div>
            <div class="modal-footer">
              <button type="button" id="decline" class="btn btn-danger" data-dismiss="modal" onclick="changeStatus('FAILED')">Decline</button>
              <button type="button" id="confirm" class="btn btn-info" data-dismiss="modal" onclick="changeStatus('SUCCESS')">Confirm</button>
            </div>
          </div>
        </div>
      </div>

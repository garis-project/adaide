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
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_data">
                        <thead>
                          <tr class="text-center">
                            <th >
                              No
                            </th>
                            <th>Events Name</th>
                            <th>Due Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Wedding</td>
                            <td class="text-center">2018-01-16</td>
                            <td class="text-center">08.00-17.00</td>
                            <td class="text-center"><div class="badge badge-success">Completed</div></td>
                            <td>
                                <div class="form-inline">
                                    <form role="form" action='<?= base_url('events/view') ?>' method='POST'>
                                    <button type="submit" class="btn btn-outline-info btn-sm">
                                        <i class="nav-icon fas fa-eye fa-xs"></i>
                                    </button>
                                  </form>
                                    <form role="form" action='<?= base_url('events/update') ?>' method='POST'>
                                        <button type="submit" class="btn btn-outline-info btn-sm">
                                            <i class="nav-icon fas fa-edit fa-xs"></i>
                                        </button>
                                    </form>
                                    <form role="form" action='<?= base_url('events/delete') ?>' method='POST'>
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="hapus_data()">
                                        <i class="nav-icon fas fa-trash fa-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                          </tr>
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

     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total User</h4>
                  </div>
                  <div class="card-body">
                    <?= $total['user'] ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Stage</h4>
                  </div>
                  <div class="card-body">
                  <?= $total['stage'] ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-calendar-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Events</h4>
                  </div>
                  <div class="card-body">
                  <?= $total['event'] ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Ticket</h4>
                  </div>
                  <div class="card-body">
                  <?= $total['ticket'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </section>
      </div>
      
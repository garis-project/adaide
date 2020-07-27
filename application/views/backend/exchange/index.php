      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Exchange Order</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('admin'); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('exchange/order'); ?>">Exchange</a></div>
              <div class="breadcrumb-item">Order</div>
            </div>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Scan</h4>
              </div>
              <div class="card-body">
                <div class="form-inline">
                  <div class="col-sm-12 col-lg-3">
                    <input type="text" class="form-control" id="qrcode" onchange="exchangeOrder()"/>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                    <button class="btn btn-info" onclick="resetQr()">Reset</button>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </section>
      </div>
  
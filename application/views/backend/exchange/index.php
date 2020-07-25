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
               <input type="text" id="qrcode" onchange="exchangeOrder()"/>
              </div>
            </div>
          </div>
        </section>
      </div>
  
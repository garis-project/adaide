<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/wall-press.jpg')?>');
    background-size: cover;
    background-position: center;
    height: auto;
  }

</style>
<body class="bg-black">
  <header>
    <div class="jumbotron jumbotron-fluid bg-img">
      <div class="container-xl">
        <div class="nav navbar">
          <div class="justify-content-start">
            <h4 class="h4"></h4>
          </div>
          <div class="display-4 d-flex justify-content-end">
            <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row bg-black p-3 rounded">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <h5 class="h5 mb-3">Exchange your order to get the ticket</h5>
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item lh-condensed bg-black">
            <div>
              <?php if($order['status_pemesanan']=="SUCCESS"||$order['status_pemesanan']=="AWAITING"){
                $qr=$order['id_pemesanan'].$order['id_konfirmasi'];
              } else{
                $qr=null;
              }
              ?>
              <input type="hidden" id="qr" value="<?= $qr ?>" />
              <h1 class="text-light font-weight-bold"><?= $order['nama_event'] ?></h1>
              <p class="text-light"><?= $order['jml_beli']." Ticket ".$order['jenis_tiket'] ?></p>
              <hr class="border-light">
              <h5 class="h5">Order Date</h5>
              <p class="text-danger"><?= date('D, d M Y',strtotime($order['tanggal_pemesanan'])) ?></p>
              <h5 class="h5">Limit Date </h5>
              <p class="text-danger"><?= date('D, d M Y',strtotime($order['tanggal_konfirmasi'])) ?></p>
              <h5>Total</h5>
              <h3 class="text-light font-weight-bold"><?= "Rp".number_format($order['total_harga'],0,",",".").",-"?></h3>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="h5 mb-3">This is your barcode ticket</h5>
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-center lh-condensed bg-black">
            <div class="card bg-black">
              <h5>Id Pemesanan : </h5>
              <h3 class="font-weight-bold"><?= $order['id_pemesanan'] ?></h3>
              <div class="card-body bg-light">
                <div class="bg-light" id="qrcode" class="qr"></div>
              </div>
              <p class="mt-3">Please scan your barcode to get ticket</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</body>

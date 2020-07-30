<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/concert.jpg')?>');
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
      <div class="container-xl">
        <h1 class="display-4"><?= $order['id_pemesanan'] ?> </h1>
        <p class="lead">Exchange your order to get the ticket</p>
      </div>
    </div>
  </header>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <h2 class="">Detail Ticket</h2>
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <div>
            <?php if($order['status_pemesanan']=="SUCCESS"||$order['status_pemesanan']=="AWAITING"){
                    $qr=$order['id_pemesanan'].$order['id_konfirmasi'];
                  }else{
                    $qr=null;
                  }
            ?>
            <input type="hidden" id="qr" value="<?= $qr ?>" />
            <h2 class="text-light"><?= $order['nama_event'] ?></h2>
            <h3 class="text-light"><?= $order['jml_beli']." Ticket ".$order['jenis_tiket'] ?></h3>
            <h3 class="text-light"><?= "Total Rp".number_format($order['total_harga'],0,",",".").",-" ?></h3>
            <p>Order Date : <?= date('D, d M Y',strtotime($order['tanggal_pemesanan'])) ?></p>
            <p>Limit Date : <?= date('D, d M Y',strtotime($order['tanggal_konfirmasi'])) ?></p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h2 class="">QR Exchange</h2>
        <ul class="list-group mb-3 border border-light rounded ">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
          <div class="card">
              <div class="card-body bg.light">
                <div id="qrcode" class="qr"></div>
              </div>
          </div>  
          
          </li>
        </ul>
      </div>

    </div>
  </div>
</body>

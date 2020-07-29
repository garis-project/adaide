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
        <h1 class="display-4">Hallo, angga</h1>
        <p class="lead">Confirm upload of payment proof faster so that this ticket is yours *</p>
      </div>
    </div>
  </header>
  <div class="container mt-4">
    <h4>Order Confirmation</h4>
    <hr class="border-light">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12 bg-black rounded px-4">
        <div class="d-flex justify-content-between">
          <div>
            <h5 class="font-weight-bold">Order ID</h5>
            <p><?= $order['id_pemesanan'] ?></p>
          </div>
          <div class="text-left">
            <h5 class="font-weight-bold">Confirmation ID</h5>
            <p><?= $order['id_konfirmasi'] ?></p>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div>
            <h5 class="text-light font-weight-bold">Amount Payment</h5>
            <p><?="Rp".number_format($order['total_harga'],0,",",".").",- (".$order['jml_beli']." Ticket @Rp.".number_format($order['harga_tiket'],0,",",".").",-)" ?></p>
            <h5 class="font-weight-bold">Details</h5>
            <p class="text-light"><?= "Events Name : ".$order['nama_event'] ?></p>
            <h5 class="font-weight-bold">Order Date :</h5><p> <?= date('D, d M Y',strtotime($order['tanggal_pemesanan'])) ?></p>
            <h5 class="font-weight-bold">Limit Date :</h5><p> <?= date('D, d M Y',strtotime($order['tanggal_konfirmasi']))."*" ?></p>
          </div>
        </div>
        <hr class="border-light">
        <h5 class="font-weight-bold">*Note</h5>
        <p class="text-danger">*Order will be autimatically canceled if the ticket stock runs out Or You Don't Confirm Before The Deadline</p>
        <p class="text-danger">**Upload a Proof of Payment by confirming the confirmation_id in the payment statement</p>

      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="font-weight-bold">Upload Poofer Payment**</h5>
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <form action="<?= base_url('order/process')?>" method="POST" enctype="multipart/form-data">
              <img src="<?=base_url('assets/frontend/img/upload.svg')?>" class="img-fluid mb-3 p-4" id="proofPayment" width="100%">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image-input" name="image-input"/>
                  <label class="custom-file-label" for="image-name" id="image-name" name="image-name" onchange="checkImg()"></label>
                  <input type="hidden" id="image-check" name="image-check"/>
                  <input type="hidden" name="image-default" value="default.png" />
                </div>
              </div>
              <div class="input-group-append">
                <input type="hidden" name="id_order" value="<?= $order['id_pemesanan'] ?>">
                <button class="btn btn-danger col-sm-12 col-lg-4" id="submit">Submit</button>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>

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
        <p class="lead">Upload bukti pembayaran agar anda bisa memebli tiket dengan baik</p>
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
              <h2 class="my-0">Hindia event Tsikmlaya</h2>
              <small class=" text-info">OrderID : 231321321</small>
              <p>Amount : Rp430000,-</p>
              <p>ID Konfirmasi : 36453264536</p>
              <p>Jenis Ticket :  Early Bird</p>
              <p>Harga Tiket :  Rp43000</p>
              <p>Jumlah Ticket :  x 2</p>
              <h4 class="text-danger">Total Pembayaran :  Rp53000</h4>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h2 class="">Detail Ticket</h2>
        <ul class="list-group mb-3 border border-light rounded ">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <img style="height:17.5rem" src="<?=base_url('assets/frontend/img/idefest.jpg')?>" class="img-fluid mb-3">
          </li>
        </ul>
      </div>

    </div>
  </div>
</body>

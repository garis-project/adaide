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
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <div>
              <h6 class="my-0">Order ID : 83426728</h6>
              <small class=" text-info">Status : Pending</small>
              <p>Harga x 43000</p>
              <p>QTY x 1</p>
              <p class="text-muted">Harga total : Rp43000</p>
            </div>
            <span class="align-items-center"><button href="" class="btn btn-danger">Pending</button></span>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <div>
              <label>Upload bukti pembayaran</label>
              <img src="<?=base_url('assets/frontend/img/idefest.jpg')?>" class="img-fluid mb-3">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
              </div>
              <div class="input-group-append">
                <button class="btn btn-danger col-sm-12 col-lg-4" id="submit">Submit</button>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</body>

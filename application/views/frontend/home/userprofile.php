<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/nyanyi.jpg')?>');
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
        <h4 class="display-4">Hallo, Angga!</h4>
        <p class="lead">This is your account</p>
      </div>
    </div>
  </header>
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-2 col-sm-6">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-danger">Your Ticket 3</span>
          <span class="badge badge-danger badge-pill">3</span>
        </h4>
        <div class="col border border-light p-3 rounded">
          <div class="item-tiket_event">
            <span class="">ORDER ID : #2124431</span><br>
            <span class="">CONFIRMATION ID : XXXXX</span>
            <p class="">Hindia Concert Siliwangi</p>
            <p class="">Rp140000</p>
            <p class="text-muted">(seratus empat puluh ribu)</p>
            <small>Silakan centak tiket dibawah ini sebagia bukti sah anda telah memberli</small>
          </div>
          <div class="input-group mt-3">
            <button type="button" class="btn btn-sm btn-danger">show barcode</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<div class="modal swing-in-top-bck" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenu" aria-hidden="true">
  <div class="modal-dialog costum-modal">
    <div class="modal-content bg-black">
      <div class="modal-body container-xl height-full">
        <div class="nav navbar">
          <div class="justify-content-start">
            <nav class="nav mt-4">
              <a href="<?=base_url()?>auth/" class="nav-link text-uppercase font-weight-bold">Login</a>
            </nav>
          </div>
          <div class="display-4 d-flex justify-content-end">
            <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo position-fixed" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
          </div>
        </div>
        <div class="col-md-12 d-flex align-middle justify-content-center mx-auto my-auto">
          <div class="w-50 header-text" id="modal-menu">
            <ul class="nav big-menu">
              <li class="position-relative p-1 nav-link">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/creative">Creatives</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/bicara">bicara</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/kitabukan">kita bukan bayangan</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>home/wedo">about us</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>home/photo">merch</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link">gallery</a>
              </li>
              <li class="position-relative -1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>ticket">ticket</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
            <a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
            <nav class="nav social-menu">
              <span class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>ticket">Youtube</a>
              </span>
              <span class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>ticket">Instagram</a>
              </span>
              <span class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>ticket">contact</a>
              </span>
            </nav>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

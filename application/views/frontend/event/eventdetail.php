<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/podcast.jpg')?>');
    background-size: cover;
    background-position: top;
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
        <div class="row">
          <div class="col-sm-2">
            <img src="<?= base_url('assets/frontend/')?>/img/idefest.jpg" class="card-img">
          </div>
          <div class="col-sm-10">
            <h1 class="display-4">HINDIA EVENT DJARUM COKELAT</h1>
            <p class="lead">started their career opening for John Mayer in 2003 and 2004, after releasing their debut album</p>
            <h4 class="text-danger">Rp120.000</h4>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- tutup header -->
  <!-- MAIN -->
  <div class="container-xl">
    <div class="row mt-5 h-100" id="ticket">
      <div class="col-md-8">
        <h4>Jenis Tiket</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-2 col-sm-6">
            <div class="item-tiket justify-content-between">
              <div class="item-tiket_event">
                <span class="font-weight-bold">Early bird</span><br>
                <p class="text-danger">Rp54000</p>
                <small>300 Ticket</small>
              </div>
              <div class="d-flex align-items-center" >
                <div id="buttonQty">
                  <button class="btn btn-circle btn-danger" id="btnmin" onclick=""><i class="fas fa-minus"></i></button>
                  <span id="qty">0</span>
                  <button class="btn btn-danger btn-circle" id="btnadd" onclick=""><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-2 col-sm-6">
            <div class="item-tiket justify-content-between">
              <div class="item-tiket_event">
                <span class="font-weight-bold">Presale</span><br>
                <p class="text-danger">Rp54000</p>
                <small>300 Ticket</small>
              </div>
              <div class="d-flex align-items-center" >
                <div id="buttonQty">
                  <small class=text-center>Not Available</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-2 col-sm-6">
            <div class="item-tiket justify-content-between">
              <div class="item-tiket_event">
                <span class="font-weight-bold">Presale 2</span><br>
                <p class="text-danger">Rp54000</p>
                <small>300 Ticket</small>
              </div>
              <div class="d-flex align-items-center" >
                <div id="buttonQty">
                  <small class=text-left>Comming soon</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-2 col-sm-6">
            <div class="item-tiket justify-content-between">
              <div class="item-tiket_event">
                <span class="font-weight-bold">regular</span><br>
                <p class="text-danger">Rp54000</p>
                <small>300 Ticket</small>
              </div>
              <div class="d-flex align-items-center" >
                <div id="buttonQty">
                  <small class=text-left>Comming soon</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p>You only buy 2 ticket?</p>
        <div class="card bg-black border-light">
          <div class="card-body">
            <div>
              <h5 class="card-title">Ticket</h5>
              <p class="card-subtitle mb-2 text-muted">Ticket price<span class="float-right text-light">Rp84000,-</span></p>
              <p class="card-subtitle mb-2 text-muted">Fee<span class="float-right text-light">Rp2000,-</span></p>
              <hr class="bg-light">
              <p class="card-subtitle mb-2 text-muted">Total<span class="float-right text-light">Rp86000,-</span></p>
            </div>
            <div class=""></div>
          </div>
        </div>
        <button class="btn btn-danger px-3 py-2 mt-3 w-100">Confirmation</button>
      </div>
    </div>

  </div>
  <!-- Footer -->
  <section class="container-fluid mt-5">
    <div class="footer container-xl">
      <h1 class="display-5 text-uppercase">find us</h1>
      <h2 class="display-5 text-uppercase">ada ide HQ</h2>
      <p>Layungsari 67B <br>Jalan Lingkar Dadaha<br> Tasikmalaya<br>46124</p>
    </div>
  </section>
</div>

<!-- modal -->
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
            <nav class="nav text-uppercase h1 font-weight-bold justify-content-end position-absolute">
              <div class="position-relative p-1 nav-link" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/creative">Creatives</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/bicara">bicara</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url()?>home/kitabukan">kita bukan bayangan</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>home/wedo">about us</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>home/photo">merch</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link">gallery</a>
              </div>
              <div class="position-relative p-1" href="#">
                <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
                <a class="nav-link" href="<?=base_url('')?>ticket">ticket</a>
              </div>
            </nav>
          </div>
        </div>
        <div class="container">
          <nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
            <a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
            <nav class="nav justify-content-end text-uppercase h5">
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

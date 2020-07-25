
<body class="bg-black">
  <div class="container-xl py-5">
    <div class="nav navbar">
      <div class="justify-content-start">
        <h4 class="h4">TICKET</h4>
      </div>
      <div class="display-4 d-flex justify-content-end">
        <img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
      </div>
    </div>
  </div>
  <!-- MAIN -->
  <div class="container-xl">
    <div class="row">
      <div class="col-sm-12 text-center mb-4">
        <h1 class="h1 font-weight-bold display-4">Hallo, Angga</h1>
        <p class="text-info">online</p>
        <p class="text-danger">Kamu sudah pesan 2 tiket konser Hidia</p>
      </div>
    </div>
    <div class="container">
      <div class="row" id="ticket" >
        <div class="col-lg-6 mb-3">
          <div class="card bg-black border-light">
            <div class="card-header">Status Payment</div>
            <div class="card-body">
              <h2>hindia Festival Concert</h2>
              <p>Jenis Ticket</p>
              <p>Banyak ticket</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bg-black border-light">
            <div class="card-header" id="headingOne">
              <p class="font-weight-bold">Status Payment</p>
            </div>
            <div class="card-body">
              <p>Upload your payment photo/scaned files in accordance with the provisions that have been included in the guidelines</p>
              <form>
                <div class="form-group border-light">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input bg-black" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <button class="btn btn-danger px-3 py-2 mt-3 w-100">Upload</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- <button class="btn btn-danger px-3 py-2 mt-3 w-100">Upload</button> -->
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
  <!-- tutup header -->
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

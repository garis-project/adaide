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
<header class="jumbotron jumbotron-fluid bg-img">
  <div class="container-xl">
    <nav class="nav navbar">
      <div class="justify-content-start">
        <h4 class="h4"></h4>
      </div>
      <div class="display-4 d-flex justify-content-end">
        <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo position-fixed" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
      </div>
    </nav>
  </div>
  <nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
    <a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
    <div class="form-inline">
      <nav class="nav social-menu">
        <span class="position-relative p-1" href="#">
          <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
          <a class="nav-link" href="">Youtube</a>
        </span>
        <span class="position-relative p-1" href="#">
          <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
          <a class="nav-link" href="">Instagram</a>
        </span>
        <span class="position-relative p-1" href="#">
          <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
          <a class="nav-link" href="">contact</a>
        </span>
      </nav>
    </div>
  </nav>
</header>


<body class="bg-black">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="font-weight-bold">Profile</h5>
        <img src="<?=base_url('assets/frontend/img/')?>avatar.svg" class="img-fluid">
      </div>
      <div class="col-lg-8 col-md-6 col-sm-12 bg-black rounded px-4 mt-3">
        <div class="d-flex justify-content-between">
          <div>
            <h5 class="font-weight-bold">Name</h5>
            <p>Angga Eka Saputra</p>
          </div>
          <div class="text-left">
            <h5 class="font-weight-bold">Event</h5>
            <p> 3 tiket Tasik Night Clunbbing</p>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div>
            <h5 class="text-light font-weight-bold">No Handphone</h5>
            <p>0822 4432 4322</p>
            <h5 class="font-weight-bold"></h5>
            <p class="text-light"></p>
            <h5 class="font-weight-bold">Alamat</h5><p>Cikoneng, ciamis, jawabarat</p>
            <h5 class="font-weight-bold">Email :</h5><p>anggasaputra@mail.com</p>
          </div>
        </div>
        <hr class="border-light">
        <h5 class="font-weight-bold">Bio</h5>
        <p>*Order will be autimatically canceled if the ticket stock runs out Or You Don't Confirm Before The Deadline</p>
      </div>
    </div>

  </div>
</body>

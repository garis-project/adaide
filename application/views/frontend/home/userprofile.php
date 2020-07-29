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
      </div>
    </div>
  </header>


  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="font-weight-bold">Profile</h5>
        <img src="<?=base_url('assets/frontend/img/')?>profile.svg" class="img-thumbnail">
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

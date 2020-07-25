<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/tangan.jpg')?>');
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
      <div class="container">
        <h1 class="display-4 text-center">ADAIDE MERCH</h1>
        <p class="lead text-center">started their career opening for John Mayer in 2003 and 2004, after releasing their debut album</p>
        <div class="input-group mx-auto w-50">
          <div class="input-group-prepend input-group-lg ">
            <span class="input-group-text " id="basic-addon1">Find</span>
          </div>
          <input type="text" class="form-control" placeholder="Find Merch" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

  </header>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>/img/lukis.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
            <h5 class="card-title"><a href="#">Ini Celana</a></h5>
            <p class="card-text"><strong class="text-white">Rp65000</strong></p>
          </div>
        </div>
        <hr class="bg-dark">
      </div>
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>/img/lukis.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
            <h5 class="card-title"><a href="#">Ini Baju</a></h5>
            <p class="card-text"><strong class="text-white">Rp43000</strong></p>
          </div>
        </div>
        <hr class="bg-dark">
      </div>
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>/img/lukis.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
            <h5 class="card-title"><a href="#">Ini Baju</a></h5>
            <p class="card-text"><strong class="text-white">Rp43000</strong></p>
          </div>
        </div>
        <hr class="bg-dark">
      </div>
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>/img/lukis.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
            <h5 class="card-title"><a href="#">Ini Baju</a></h5>
            <p class="card-text"><strong class="text-white">Rp43000</strong></p>
          </div>
        </div>
        <hr class="bg-dark">
      </div>
    </div>
  </div>
</body>

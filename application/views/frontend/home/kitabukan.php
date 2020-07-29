<style type="text/css">
  .bg-header {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/tangan.jpg')?>');
    background-size: cover;
    background-position: center;
    height: 100vh;
  }
</style>
<header class="jumbotron jumbotron-fluid bg-header">
  <div class="container-xl">
    <nav class="nav navbar">
      <div class="justify-content-start">
        <h4 class="h4"></h4>
      </div>
      <div class="display-4 d-flex justify-content-end">
        <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
      </div>
    </nav>
    <div class="d-flex justify-content-center header-text">
      <h1 class="judul text-center display-3 text-uppercase font-weight-bold">Family is more<br><p class="lead">In ADAIDE</p></h1>

    </div>
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
<!-- MAIN -->
<div class="bg-black">
  <section class="container-xl wrapper">
    <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
      <div class="slogan">
        <span class="logo-text">ADA IDE<sup>TM</sup><br>FAMILY</span>
        <span class="line-vertical"></span>
        <span class="logo-text">KITA BUKAN BAYANGAN</span>
      </div>
    </div>
    <div class="d-flex align-items-end flex-column bd-highlight mb-5" style="height: 200px !important;">
      <div class="mt-auto p-2 bd-highlight">
        <p class="lead w-50 align-items-end float-right mb-5 pb-5 h-100">
          Creativity doesn't wait for that perfect moment. It fashions its own perfect moments out of ordinary ones.
        </p>
      </div>
    </div>
    <!-- bagian galery -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-2 col-sx-2 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/lukis.jpg">
        </div>
        <div class="col-md-4 p-2 col-xs-2 h-25 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/pamungkas.jpg">
        </div>
        <div class="col-md-4 p-2 col-xs-2 h-25 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/bicara-x.jpg">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5">
          <span class="lead">Creativity doesn't wait for that perfect moment. It fashions its own perfect moments out of ordinary ones</span>
        </div>
      </div>
      <!-- bagian 2 -->
      <div class="row">
        <div class="col-md-4 p-2 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/podcast.jpg">
        </div>
        <div class="col-md-4 p-2 h-25 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/gambar.jpg">
        </div>
        <div class="col-md-4 p-2 h-25 col-sm-2 rounded">
          <img class="img-fluid image scale-on-hover" src="<?= base_url('assets/frontend/')?>/img/pandemi.jpg">
        </div>
      </div>
    </div>
  </section>
  <!-- sebelum footer -->

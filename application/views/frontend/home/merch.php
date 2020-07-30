<style type="text/css">
  .bg-header {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/wall-press.jpg')?>');
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
      <h1 class="judul text-center display-3 text-uppercase font-weight-bold">Merchendise<br><p class="lead">In ADAIDE</p></h1>
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


<div class="bg-black pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h4>Merchendise List</h4>
      </div>
      <div class="col-md-3">
        <label for="carimerchendise">Search Merch</label>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-danger" type="button">Find!</button>
          </span>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>img/bicara.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
            <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
            <p class="card-text"><strong class="text-white">Rp52000</strong></p>
          </div>
        </div>
        <hr class="bg-dark">
      </div>
      <div class="col-md-3 col-sm-6 mb-2">
        <div class="card bg-black">
          <img src="<?= base_url('assets/frontend/') ?>img/dcdc.jpg" class="card-img-top" alt="...">
          <div class="pt-3">
           <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
           <p class="card-text"><strong class="text-white">Rp52000</strong></p>
         </div>
       </div>
       <hr class="bg-dark">
     </div>
     <div class="col-md-3 col-sm-6 mb-2">
      <div class="card bg-black">
        <img src="<?= base_url('assets/frontend/') ?>img/bicara.jpg" class="card-img-top" alt="...">
        <div class="pt-3">
         <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
         <p class="card-text"><strong class="text-white">Rp52000</strong></p>
       </div>
     </div>
     <hr class="bg-dark">
   </div>
   <div class="col-md-3 col-sm-6 mb-2">
    <div class="card bg-black">
      <img src="<?= base_url('assets/frontend/') ?>img/dcdc.jpg" class="card-img-top" alt="...">
      <div class="pt-3">
       <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
       <p class="card-text"><strong class="text-white">Rp52000</strong></p>
     </div>
   </div>
   <hr class="bg-dark">
 </div>
 <div class="col-md-3 col-sm-6 mb-2">
  <div class="card bg-black">
    <img src="<?= base_url('assets/frontend/') ?>img/bicara.jpg" class="card-img-top" alt="...">
    <div class="pt-3">
      <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
      <p class="card-text"><strong class="text-white">Rp52000</strong></p>
    </div>
  </div>
  <hr class="bg-dark">
</div>
<div class="col-md-3 col-sm-6 mb-2">
  <div class="card bg-black">
    <img src="<?= base_url('assets/frontend/') ?>img/dcdc.jpg" class="card-img-top" alt="...">
    <div class="pt-3">
     <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
     <p class="card-text"><strong class="text-white">Rp52000</strong></p>
   </div>
 </div>
 <hr class="bg-dark">
</div>
<div class="col-md-3 col-sm-6 mb-2">
  <div class="card bg-black">
    <img src="<?= base_url('assets/frontend/') ?>img/bicara.jpg" class="card-img-top" alt="...">
    <div class="pt-3">
     <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
     <p class="card-text"><strong class="text-white">Rp52000</strong></p>
   </div>
 </div>
 <hr class="bg-dark">
</div>
<div class="col-md-3 col-sm-6 mb-2">
  <div class="card bg-black">
    <img src="<?= base_url('assets/frontend/') ?>img/dcdc.jpg" class="card-img-top" alt="...">
    <div class="pt-3">
     <h5 class="card-title"><a href="#">ADAIDE KickDenim!</a></h5>
     <p class="card-text"><strong class="text-white">Rp52000</strong></p>
   </div>
 </div>
 <hr class="bg-dark">
</div>
</div>
</div>


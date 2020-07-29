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
        <img src="<?=base_url('assets/frontend/img/')?>person.svg" class="img-thumbnail">
      </div>
      <div class="col-lg-8 col-md-6 col-sm-12 bg-black rounded px-4 mt-3">
        <div class="d-flex justify-content-between">
          <div class="text-left col-lg-8">
            <h5 class="font-weight-bold">Name</h5>
            <p><?= $user['nama_user'] ?></p>
            <h5 class="text-light font-weight-bold pt-2">Phone Number</h5>
            <p><?= $user['kontak'] ?></p>
            <h5 class="font-weight-bold"></h5>
            <p class="text-light"></p>
            <h5 class="font-weight-bold pt-2">Address</h5><p><?= $user['alamat'] ?></p>
            <h5 class="font-weight-bold pt-2">Email</h5><p><?= $user['email_user'] ?></p>
          </div>
          <div class="text-left col-lg-4">
            <h5 class="font-weight-bold">Event</h5>
            <?php foreach($order as $value){ ?>
              <p> <?= $value['jml_beli']." Ticket".$value['nama_event'] ?></p>
           <?php } ?>
            <a href="<?= base_url('order') ?>">
              <p class="font-weight-bold">Load More...</p>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div>
            
          </div>
        </div>
        <hr class="border-light">
      </div>
    </div>

  </div>
</body>

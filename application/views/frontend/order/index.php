<style type="text/css">
  .bg-img {
    background-image: linear-gradient(
      to right bottom,
      rgba(2, 2, 2, 0.8) 0%,
      rgba(46, 46, 46, 0.8)
      ),
    url('<?=base_url('assets/frontend/img/podcast.jpg')?>');
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
        <h1 class="display-4"><?= $user['nama_user'] ?></h1>
        <p class="lead">List ticket you have buys</p>
      </div>
    </div>
  </header>


  <div class="container mt-3">
    <div class="row">
      <div class="col-md-9">
        <h4>Order List</h4>
      </div>
    </div>
    <div class="row">
      <?php foreach($order as $value){ ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
        <ul class="list-group mb-3 border border-light rounded">
          <li class="list-group-item d-flex justify-content-between lh-condensed bg-black">
            <div>
              <h6 class="my-0">Order ID : <?= $value['id_pemesanan'] ?></h6>
              <h5 class="text-light"><?= "Rp.".number_format($value['total_harga'],0,".",",").",-" ?></h5>
              <p><?= $value['jml_beli']." Ticket @Rp.".$value['harga_tiket']?></p>
              <p class="text-muted"><?= $value['nama_event'] ?></p>
              <?php if($value['status_pemesanan']=="PENDING" || $value['status_pemesanan']=="FAILED"){ ?>
                <h3 class=" text-danger"> <?= $value['status_pemesanan'] ?></h3>
              <?php }elseif($value['status_pemesanan']=="SUCCESS"){ ?>
                <h3 class=" text-info"> <?= $value['status_pemesanan'] ?></h3>
              <?php }elseif($value['status_pemesanan']=="AWAITING"){ ?>
                <h3 class=" text-warning"> <?= $value['status_pemesanan'] ?></h3>
              <?php } ?>
              
            </div>
                <?php $id= "'".$value['id_pemesanan']."'";
                $status="'".$value['status_pemesanan']."'" ;
                ?>

                <span class="align-items-center">
                  <button class="btn btn-danger" onclick="cekStatus(<?= $id.','.$status ?>)">Open</button>
                </span>
                <!-- </form> -->

              </li>
            </ul>
          </div>
        <?php }?>

      </div>
    </div>
  </body>

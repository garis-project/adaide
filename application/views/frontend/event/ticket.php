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
            <img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
          </div>
        </div>
      </div>
      <div class="container-xl">
        <div class="row">
          <div class="col-sm-2">
            <img src="<?= base_url('assets/backend/img/events/').$events['banner']?>" class="card-img">
          </div>
          <div class="col-sm-10">
            <h1 class="display-4"><?= $events['nama_event']?></h1>
            <p class="lead"><?= $events['deskripsi']?></p>
            <h4 class="text-danger"><?= $events['nama_stage']?></h4>
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
          <?php foreach($ticket as $value){ ?>
          <div class="col-lg-6 col-md-6 mb-2 col-sm-6">
            <div class="item-tiket justify-content-between">
              <div class="item-tiket_event">
                <span class="font-weight-bold"><?= $value['jenis_tiket'] ?></span><br>
                <p class="text-danger"><?= "Rp.".number_format($value['harga_tiket'],0,".",",").",-"; ?></p>
                <?php if($value['status_tiket']==1){ ?>
                  <small><?= number_format($value['stok_tiket'])." Ticket Left" ?></small> 
                <?php }else{?>
                  <small>Stay Tuned</small>
                <?php } ?>
              </div>
              <div class="d-flex align-items-center" >
                <div id="buttonQty">
                  <?php if($value['status_tiket']==1){ ?>
                    <button class="btn btn-circle btn-danger" onclick="minus()"><i class="fas fa-minus"></i></button>
						        <span id="qtyTmp">0</span>
						        <button class="btn btn-danger btn-circle" onclick="plus()"><i class="fas fa-plus"></i></button>
                  <?php }elseif($value['status_tiket']==0){ ?>
                      <small class=text-center>Coming Soon</small>
                  <?php }elseif($value['status_tiket']==2){ ?>
                    <small class=text-center>Not Available</small>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-4">
        <p>Your Order</p>
        <div class="card bg-black border-light">
          <div class="card-body">
            <div>
              <h5 class="card-title">Ticket</h5>
              <p class="card-subtitle mb-2 text-muted">Ticket price<span class="float-right text-light" id="price"><?= "Rp".number_format($active['harga_tiket'],0,",",".").",-"; ?></span></p>
              <p class="card-subtitle mb-2 text-muted">Qty<span class="float-right text-light " id="qty1"></span></p>
              <hr class="bg-light">
              <p class="card-subtitle mb-2 text-muted">Total<span class="float-right text-light" id="totalTmp"></span></p>
            </div>
            <div class=""></div>
          </div>
        </div>
        <input type="hidden" id="stock_ticket" value="<?= $active['stok_tiket'] ?>" />
					<input type="hidden" id="harga_ticket" value="<?= $active['harga_tiket'] ?>" />
          <input type="hidden" id="id_event" value="<?= $events['id_event'] ?>" />
					<input type="hidden" id="id_ticket_type"  value="<?= $active['id_jenis_tiket'] ?>" />
					<input type="hidden" id="ticket_type"  value="<?= $active['jenis_tiket'] ?>" />
					<input type="hidden" id="total" id="total" />
					<input type="hidden" id="qty"  id="qty" />
					<button class="btn btn-danger px-3 py-2 mt-3 w-100" onclick="confirmOrder()">Confirmation</button>
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

<div class="modal fade" id="modalBayar" tabindex="-1" role="dialog" aria-labelledby="modalbayarLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-black">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Payment Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<img src="<?=base_url('assets/frontend/img/')?>money.svg" class="card-img" style="height: 100px; margin-bottom: 1rem;">
				<p class="lead">Amount Payment</p>
				<h4 id="payment"></h4>
        <hr class="bg-light">
        <div class="mt-3">
					<p>ORDER ID : <label id="orderId"></label><br>CONFIRMATION ID : <label id="confirmId"></p>
			
				</div>
				<p>Please transfer to the account below by confirming the confirmation id in the transfer information section</p>
				<h5 class="text-info">
					0032342 432<br>
					mandiri a/n Nugraha
				</h5>
				<h6>Before</h6>
        <h6 id="confirmDate"></h6>
        <p class="text-danger">Order will be autimatically canceled if the ticket stock runs out Or You Don't Confirm Before The Deadline</p>
			</div>
			<div class="modal-footer">
					<button class="btn btn-primary col-sm-8 col-lg-3" data-dismiss="modal" onclick="window.location.href='<?= base_url('order') ?>'">OK</button>
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

<style type="text/css">
	.bg-img {
		background-image: linear-gradient(
			to right bottom,
			rgba(2, 2, 2, 0.8) 0%,
			rgba(46, 46, 46, 0.8)
			),
		url('');
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
					<div class="col-sm-4">
						<img src="<?= base_url('assets/backend/img/events/').$events['banner']?>" class="card-img">
					</div>
					<div class="col-sm-8">
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
									<small class="font-weight-bold">Stock</small>
									<p><?= $value['stok_tiket'] ?></p>
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
				<h4>Your Order</h4>
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

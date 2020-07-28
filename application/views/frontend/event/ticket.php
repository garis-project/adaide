<body class="bg-black">
	<div class="container-xl py-5">
		<div class="nav navbar">
			<div class="justify-content-start">
				<h4 class="h4">/ticket</h4>
			</div>
			<div class="display-4 d-flex justify-content-end">
				<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
			</div>
		</div>
		<header class="text-left pt-5">
			<div class="row">
				<div class="col-md-2 mb-3">
					<img src="<?= base_url('assets/backend/img/events/').$events['banner']?>" class="card-img">
				</div>
				<div class="col-md-7">
					<h3 class="h3 font-weight-bold"><?= $events['nama_event']?></h3>
					<h6 class="h6 text-danger"><?= date("D,d F Y | h:i A",strtotime($events['tanggal_mulai'])); ?></h6>
					<h6 class="h6"><?= $events['nama_stage']?></h6>
					<?php $ticket=$this->db->get_where('tb_detail_event',['id_event'=>$events['id_event'],'status_tiket'=>1])->row_array(); ?>
					<h3 class="h3 font-weight-bold" ><?= number_format($ticket['stok_tiket'],0,",",".")." Ticket Remaining" ; ?></h3>
					<input type="hidden" id="stock_ticket" value="<?= $ticket['stok_tiket'] ?>" />
					<input type="hidden" id="harga_ticket" value="<?= $ticket['harga_tiket'] ?>" />
				</div>
				<div class="col-md-3 col-sx-4 pt-3">
					<p class="lead text-center">Select many ticket</p>
					<div class="d-flex justify-content-center ">
						<button class="btn btn-circle btn-danger mr-3" onclick="minus()"><i class="fas fa-minus"></i></button>
						<h3 class="h3" id="qtyTmp">0</h3>
						<button class="btn btn-danger btn-circle ml-3" onclick="plus()"><i class="fas fa-plus"></i></button>
					</div>
				</div>
			</header>
		</div>
	</div>

	<!-- tutup header -->
	<!-- MAIN -->
	<div class="container-xl">
		<hr class="border-light">
		<div class="row mt-5 h-100" id="ticket">
			<div class="col-md-8">
				<p class="lead">
					<?= $events['deskripsi']?>
				</p>
			</div>
			<div class="col-md-4">
				<p class="lead">Your Order</p>
				<div class="card bg-black border-light">
					<div class="card-body">
						<div>
							<h5 class="card-title">Ticket</h5>
							<p class="card-subtitle mb-2 text-muted">Ticket price<span class="float-right text-light" id="price"><?= "Rp".number_format($ticket['harga_tiket'],0,",",".").",-"; ?></span></p>
							<p class="card-subtitle mb-2 text-muted">Qty<span class="float-right text-light" id="qty1"></span></p>
							<hr class="bg-light">
							<p class="card-subtitle mb-2 text-muted">Total<span class="float-right text-light" id="totalTmp"></span></p>
						</div>
						<div class=""></div>
					</div>
				</div>
				<form action="<?= base_url('ticket/createOrder') ?>" method="post">
					<input type="hidden" name="id_event" value="<?= $events['id_event'] ?>" />
					<input type="hidden" name="ticket_type"  value="<?= $ticket['id_jenis_tiket'] ?>" />
					<input type="hidden" name="total" id="total" />
					<input type="hidden" name="qty"  id="qty" />
					<button type="submit" class="btn btn-danger px-3 py-2 mt-3 w-100" data-toggle="modal" data-target="#modalBayar">Confirmation</button>
				</form>
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


<!-- modal modal modol modal modol modal modol modal -->

<!-- Modal -->
<div class="modal fade" id="modalBayar" tabindex="-1" role="dialog" aria-labelledby="modalbayarLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-black">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<img src="<?=base_url('assets/frontend/img/')?>money.svg" class="card-img" style="height: 100px; margin-bottom: 1rem;">
				<p class="lead">Harga pembayaran</p>
				<h4 id="totalTmp"></h4>
				<hr class="bg-light">
				<p>Ke nomor rekening, dibawah ini dan pastikan untuk fotokan bukti pembayaran nya sebagai tanda bukti yang sah</p>
				<h5 class="text-info">
					0032342 432<br>
					mandiri a/n Nugraha
				</h5>
				<h6>Batas pembayaran <br>29 July 2020</h6>
				<div class="mt-3">
					<p>ORDER ID : xxxx<br>CONFIRMATION ID : XXXXX</p>
					<p class="text-danger">Cantumkan confirmation id pada keterangan transfer</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary col-sm-8 col-lg-3" data-dismiss="modal">OK</button>

			</div>
		</div>
	</div>
</div>

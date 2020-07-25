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
				<div>
					<dt class="mb-2">This event includes:</dt>
					<dd class="h6"><i class="fas fa-ticket-alt mr-3"></i>Ticket</dd>
					<dd class="h6"><i class="fas fa-cocktail mr-3"></i>First Drink on Us</dd>
					<dd class="h6"><i class="fas fa-door-open mr-3"></i>Preferred Entrance</dd>
					<dd class="h6"><i class="fas fa-headset mr-3"></i>Ambassador Support</dd>
				</div>
			</div>
			<div class="col-md-4">
				<p class="lead">You only buy 2 ticket?</p>
				<div class="card bg-black border-light">
					<div class="card-body">
						<div>
							<h5 class="card-title">Ticket</h5>
							<p class="card-subtitle mb-2 text-muted">Ticket price<span class="float-right text-light" id="price"><?= "Rp.".number_format($ticket['harga_tiket'],0,",",".").",-"; ?></span></p>
							<p class="card-subtitle mb-2 text-muted">Qty<span class="float-right text-light" id="qty1"></span></p>
							<hr class="bg-light">
							<p class="card-subtitle mb-2 text-muted">Total<span class="float-right text-light " id="totalTmp"></span></p>
						</div>
						<div class=""></div>
					</div>
				</div>
				<form action="<?= base_url('ticket/createOrder') ?>" method="post">
					<input type="hidden" name="id_event" value="<?= $events['id_event'] ?>" />
					<input type="hidden" name="ticket_type"  value="<?= $ticket['id_jenis_tiket'] ?>" />
					<input type="hidden" name="total" id="total" />
					<input type="hidden" name="qty"  id="qty" />
					<button type="submit" class="btn btn-danger px-3 py-2 mt-3 w-100">Confirmation</button>
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

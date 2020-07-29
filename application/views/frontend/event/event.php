<body class="bg-black">
	<div class="bg-cover page-holder">
		<div class="container-xl py-4">
			<div class="nav navbar">
				<div class="justify-content-start">
					<h4 class="h4">/ticket</h4>
				</div>
				<div class="display-4 d-flex justify-content-end ">
					<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
				</div>
			</div>	
				<header class="text-left">
				<?php
				foreach($events as $value){
					?>
					<div class="row py-5">
						<div class="col-md-4 col-lg-4 text-right">
							<img src="<?= base_url('assets/backend/img/events/').$value['banner']; ?>" class="card-img" alt="Banner" style="max-width: 100%;">
						</div>
						<div class="col-md-8 col-lg-8">
							<h1 class="display-4 font-weight-bold mb-4"><?= $value['nama_event'] ?></h1>
							<p class="lead text-danger"><?= date("D,d F Y | h:i A",strtotime($value['tanggal_mulai'])); ?></p>
							<p class="lead"><?= $value['deskripsi'] ?></p>
							<div class="d-flex justify-content-between">
								<h3 class="pr-5">Available only : <?= $value['total_stok'] ?> Ticket</h3>
								<form action="<?= base_url('ticket') ?>" method="post">
									<input type="hidden" name="id_event" value="<?= $value['id_event'] ?>" />
									<button class="btn btn-danger px-5 py-3 text-uppercase font-weight-bold" type="submit">get ticket</button>
								</form>
							</div>
						</div>
					</div>
					<!-- tutup header -->
					<!-- MAIN -->
					<div class="container-xl">
						<div class="row" id="ticket">
							<h5 class="h5 mb-3">Ticket is available on</h5>

							<div class="col-md-12 d-flex align-items-center">
								<?php $detail=$this->ticket->byIdEvent($value['id_event']);
								foreach($detail as $ticket){
									?>
									<div class="card mb-3 bg-black" style="max-width: 440px;">
										<div class="row no-gutters">
											<div class="col-md-4">
												<img src="<?=base_url('assets/frontend') ?>/img/idefest.jpg" height="100%" class="card-img" alt="...">
											</div>
											<div class="col-md-8">
												<div class="pl-3">
													<h5 class="card-title"><?= $ticket['jenis_tiket']; ?></h5>
													<p class="card-text text-warning"><h4><?= "Rp.".number_format($ticket['harga_tiket'],0,",",".").",-"; ?></h4></p>
													<p class="card-text text-warning"><?= number_format($ticket['stok_tiket'],0,",",".")." Remaining" ; ?></strike></p>
													<p class="card-text"><small class="text-muted"><?php if($ticket['status_tiket']==0){echo "Ticket is not available";}else{echo "Ticket is available";} ?></small></p>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<!-- form pengisian data diri -->
					</div>

				<?php }?>
			</header>

			<!-- // nu baru -->
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
								<img src="<?= base_url('assets/frontend/')?>/img/idefest.jpg" class="card-img">
							</div>
							<div class="col-md-7">
								<h3 class="h3 font-weight-bold">Adaide event Go</h3>
								<h6 class="h6">Live Concert</h6>
								<h6 class="h6 text-danger">Tuesday, October 6, 2020 7:30 PM</h6>
								<h6 class="h6">Siliwangi Food, Tasikmalaya</h6>
							</div>
						</header>
					</div>
				</div>

				<!-- tutup header -->
				<!-- MAIN -->
				<div class="container-xl">
					<hr class="border-light">
					<div class="row mt-5 h-100" id="ticket">
						<div class="col-md-12">
							<h3>Popular Event</h3>
							<div class="row">
								<div class="col-lg-6 col-md-6 mb-2">
									<div class="item-tiket">
										<div class="item-tiket_button">
											<span class="text-center"><a href="/ticket">Get Ticket</a></span>
										</div>
										<div class="item-tiket_event">
											<span class="font-weight-bold">HUT tasikmalaya 2020</span><br>
											<p class="text-danger">Venue : Rock Am RING</p>
											<small>Tanggal : 28 July 2020</small>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mb-2">
									<div class="item-tiket">
										<div class="item-tiket_button">
											<span class="text-center"><a href="/ticket">Get Ticket</a></span>
										</div>
										<div class="item-tiket_event">
											<span class="font-weight-bold">Avenged Seven Fold</span><br>
											<p class="text-danger">Rock Am RING</p>
											<small>28 July 2020</small>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mb-2">
									<div class="item-tiket">
										<div class="item-tiket_button">
											<span class="text-center"><a href="/ticket">Get Ticket</a></span>
										</div>
										<div class="item-tiket_event">
											<span class="font-weight-bold">Avenged Seven Fold</span><br>
											<p class="text-danger">Rock Am RING</p>
											<small>28 July 2020</small>
										</div>
									</div>
								</div>
							</div>
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

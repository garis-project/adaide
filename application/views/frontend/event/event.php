			<!-- // nu baru -->
			<body class="bg-black">
				<div class="container-xl py-5">
					<div class="nav navbar">
						<div class="justify-content-start">
							<h4 class="h4">/event</h4>
						</div>
						<div class="display-4 d-flex justify-content-end">
							<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
						</div>
					</div>
					<header class="text-left pt-5">
						<div class="row">
							<div class="col-md-2 mb-3">
								<img src="<?= base_url('assets/frontend/')?>img/idefest.jpg" class="card-img">
							</div>
							<div class="col-md-7">
								<h3 class="h3 font-weight-bold">Adaide Event Organizer</h3>
								<h6 class="h6">Manage The Events</h6>
								<h6 class="h6 text-danger">Stay Tuned To Get Happines From Our Events</h6>
								<h6 class="h6">For Now and Tomorrow</h6>
							</div>
						</header>
					</div>
				</div>

				<!-- tutup header -->
				<!-- MAIN -->
				<div class="container-xl">
					<hr class="border-light"></hr>
					<div class="row mt-5 h-100" id="ticket">
						<div class="col-md-12">
							<h3>Popular Event</h3>
							<div class="row">
							<?php foreach($events as $value){ ?>
								<div class="col-lg-6 col-md-6 mb-2">
									<div class="item-tiket">
										<div class="item-tiket_button col-sm-5">
											<form action="<?= base_url('ticket') ?>" method="post">
												<input type="hidden" name="id_event" value="<?= $value['id_event'] ?>" />
												<button class="btn btn-danger px-5 py-3 text-uppercase font-weight-bold" type="submit">
													<span class="text-center">Get Ticket</a></span>
												</button>
											</form>
										</div>
										<div class="item-tiket_event col-sm-7">
											<span class="font-weight-bold"><?= $value['nama_event'] ?></span><br>
											<p class="text-danger"><?= $value['nama_stage'] ?></p>
											<small><?= date("D,d F Y | h:i A",strtotime($value['tanggal_mulai'])); ?></small>
											<br>
											<span class="badge badge-<?php if($value['status_event']=='Onprogress'){ echo 'warning';}elseif($value['status_event']=='Processed'){ echo 'danger';} ?>"><?= $value['status_event'] ?></span><br>
										</div>
									</div>
								</div>
								<?php } ?>
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

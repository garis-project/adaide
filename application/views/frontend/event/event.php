<!-- // nu baru -->
<body class="bg-black">
	<div class="container-xl py-5">
		<div class="nav navbar">
			<div class="justify-content-start">
				<h4 class="h4"></h4>
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
								<div class="item-tiket_button align-items-center">
									<?php if($value['status_event']=='Processed'){ ?>
									<form action="<?= base_url('ticket') ?>" method="post">
										<input type="hidden" name="id_event" value="<?= $value['id_event'] ?>" />
										<button class="text-uppercase font-weight-bold" type="submit">
											<span class="text-center">Get <br>Ticket</a></span>
										</button>
									</form>
									<?php }else{ ?>
										<button class="text-uppercase font-weight-bold">
											<span class="text-center">Completed</span>
										</button>
									<?php } ?>
								</div>
								<div class="item-tiket_event">
									<span class="font-weight-bold"><?= $value['nama_event'] ?></span><br>
									<span class="text-danger"><?= $value['nama_stage'] ?></span>
									<p><?= date("D,d F Y | h:i A",strtotime($value['tanggal_mulai'])); ?></p>
									<span class="badge badge-<?php if($value['status_event']=='Completed'){ echo 'info';}elseif($value['status_event']=='Processed'){ echo 'danger';} ?>"><?= $value['status_event'] ?></span><br>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal -->

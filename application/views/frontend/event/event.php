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


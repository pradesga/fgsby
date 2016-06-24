<?php require("inc/frontend.php"); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

	<title>FemaleGeek Surabaya</title>

	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<center>
		<a class="logofg" href="/"><img src="img/fg.png"></a>
	</center>

	<div class="container">
		<div class="page-header">
			<h1 id="">Timeline Registrations</h1>
		</div>
		<div id="timeline">
			<div class="row timeline-movement timeline-movement-top">
				<div class="timeline-badge timeline-future-movement">
					<a href="#"><span class="glyphicon glyphicon-plus"></span></a>
				</div>
				<div class="timeline-badge timeline-filter-movement">
					<a href="#"><span class="glyphicon glyphicon-time"></span></a>
				</div>
			</div>

			<div class="row timeline-movement">
				<div class="timeline-badge">
					<span class="timeline-balloon-date-day">27</span>
					<span class="timeline-balloon-date-month">JUN</span>
				</div>

				<div class="col-sm-6  timeline-item">
					<div class="row">
						<div class="col-sm-11">
							<div class="timeline-panel credits">
								<ul class="timeline-panel-ul">
									<li><span class="importo">PANITIA</span></li>
									<li><span class="causale">Registrasi dibuka. </span> </li>
									<li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 27-06-2016 00:00:00</small></p> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php foreach ($datearr as $dateday) { ?>
			<div class="row timeline-movement">
				<div class="timeline-badge">
					<span class="timeline-balloon-date-day"><?php echo tglku($dateday, 'd'); ?></span>
					<span class="timeline-balloon-date-month"><?php echo strtoupper(tglku($dateday, 'M')); ?></span>
				</div>

				<div class="col-sm-offset-6 col-sm-6  timeline-item">
					<?php foreach ($datarr as $datrow) { ?>
					<?php if( tglku($dateday, 'd-m-Y') == tglku($datrow['tgl'], 'd-m-Y') ){ ?>
					<div class="row timeline-day">
						<div class="col-sm-offset-1 col-sm-11">
							<div class="timeline-panel debits">
								<ul class="timeline-panel-ul">
									<li><span class="importo">REGISTER</span></li>
									<li><span class="causale"><b><?php echo strtoupper($datrow['nama']); ?>. </b></span> </li>
									<li><span class="causale"><?php echo strtoupper($datrow['kota']); ?></span></li>
									<li>
										<span class="causale">
											<h4><?php echo $datrow['kode']; ?></h4>
											<img alt='testing' src="barcode.php?text=<?php echo $datrow['kode']; ?>" width="150" height="50" />
										</span>
									</li>
									<li><span class="causale"><?php echo ($datrow['konfirm'] == 0) ? '<font color="red"><b>Waiting... </b></font>' : '<font color="blue"><b>CONFIRMED </b></font>'; ?></span></li>
									<li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo tglku($datrow['tgl'], 'd-m-Y H:i:s'); ?></small></p> </li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
			<!--due -->
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>
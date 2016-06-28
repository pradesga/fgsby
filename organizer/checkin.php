<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Event Checkin</h1>
				<div class="row">
					<div class="col-sm-5">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h2 class="panel-title">Scanner</h2>
							</div>
							<div class="panel-body">
								<div  class="center" id="scanreader" style="width:300px;height:250px;margin:auto;"></div>
								<form class="form-horizontal">
									<div class="form-group">
										<label for="scanread" class="col-sm-5 control-label">Kode Registrasi</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="scanread" name="scanread" placeholder="Kode Registrasi">
										</div>
									</div>
									<div class="form-group">
										<center id="scanerror"></center>
									</div>
									<div class="form-group">
										<center id="scanreport"></center>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-5 col-sm-7">
											<a id="btncheckin" href="#" class="btn btn-default">Checkin</a>
										</div>
									</div>
								</form>
								<br>
							</div>
						</div>
					</div>
					<div class="col-sm-7" id="data-attendee">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h2 class="panel-title">Information</h2>
							</div>
							<div class="panel-body">
								<div class="alert alert-danger alert-dismissible" id="errbox" style="display:none;" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Warning!</strong> <span id="errmsg">Data tidak ditemukan.</span>
								</div>
								<form class="form-horizontal" method="post">
									<div class="form-group">
										<label for="tgl" class="col-sm-4 control-label">Tanggal Registrasi</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="tgl"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="Nama" class="col-sm-4 control-label">Nama</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="nama"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-4 control-label">Email</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="email"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="alamat" class="col-sm-4 control-label">Alamat</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="alamat"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="kota" class="col-sm-4 control-label">Kota</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="kota"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="nohp" class="col-sm-4 control-label">Nomor Telepon</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="nohp"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="status" class="col-sm-4 control-label">Status Registrasi</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="statreg"></p>
										</div>
									</div>
									<div class="form-group">
										<label for="tglbayar" class="col-sm-4 control-label">Tanggal Pembayaran</label>
										<div class="col-sm-8">
											<p class="form-control-static" id="tglbayar"></p>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php include('footer.php'); ?>
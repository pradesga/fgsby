<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee Edit Data</h1>

				<?php updateattendee(); $atten = getattendeebyid(); ?>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Attendee Information</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<div class="form-group">
								<label for="Nama" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo $atten['nama']; ?>" name="nama" id="nama" placeholder="Nama" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" value="<?php echo $atten['email']; ?>" name="email" id="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo $atten['alamat']; ?>" name="alamat" id="alamat" placeholder="Alamat" required>
								</div>
							</div>
							<div class="form-group">
								<label for="kota" class="col-sm-2 control-label">Kota</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo $atten['kota']; ?>" name="kota" id="kota" placeholder="Kota" required>
								</div>
							</div>
							<div class="form-group">
								<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo $atten['hp']; ?>" name="nohp" id="nohp" placeholder="Nomor Telepon" required>
								</div>
							</div>
							<div class="form-group">
								<label for="kode" class="col-sm-2 control-label">Kode Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['kode']; ?></p>
									<input type="hidden" name="kodereg" id="kodereg" value="<?php echo $atten['kode']; ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="hidden" name="attid" value="<?php echo $atten['id']; ?>">
									<button type="submit" class="btn btn-default">Simpan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php include('footer.php'); ?>
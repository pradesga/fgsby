<?php include('header.php'); $atten = getattendeebyid(); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee Edit Data</h1>
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="Nama" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo $atten['nama']; ?>" name="nama" id="nama" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" value="<?php echo $atten['email']; ?>" name="email" id="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo $atten['alamat']; ?>" name="alamat" id="alamat" placeholder="Alamat">
						</div>
					</div>
					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">Kota</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo $atten['kota']; ?>" name="kota" id="kota" placeholder="Kota">
						</div>
					</div>
					<div class="form-group">
						<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo $atten['hp']; ?>" name="nohp" id="nohp" placeholder="Nomor Telepon">
						</div>
					</div>
					<div class="form-group">
						<label for="kode" class="col-sm-2 control-label">Kode Registrasi</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $atten['kode']; ?></p>
							<input type="hidden" name="kode" id="kodereg" value="">
							<button class="btn btn-default">Generate New</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Simpan</button>
						</div>
					</div>
				</form>
			</div>

<?php include('footer.php'); ?>
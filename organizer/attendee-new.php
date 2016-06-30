<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Submit New Attendee</h1>

				<?php echo newattendee(); ?>

				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="Nama" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
						</div>
					</div>
					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">Kota</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" required>
						</div>
					</div>
					<div class="form-group">
						<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Telepon" required>
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
<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee Edit Data</h1>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Attendee Information</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<div class="form-group">
								<label for="tgl" class="col-sm-2 control-label">Tanggal Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="Nama" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="kota" class="col-sm-2 control-label">Kota</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="kode" class="col-sm-2 control-label">Kode Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">Status Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="tglbayar" class="col-sm-2 control-label">Tanggal Pembayaran</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="tglkonfirm" class="col-sm-2 control-label">Tanggal Konfirmasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="qrundangan" class="col-sm-2 control-label">QR Undangan</label>
								<div class="col-sm-10">
									<p class="form-control-static"></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Edit Data</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Kirim Email Notifikasi</h2>
					</div>
					<div class="panel-body">
						<form class="form-inline" method="post">
							<div class="form-group">
								<select id="action" name="action">
									<option value="registrasi">Notifikasi Regsitrasi</option>
									<option value="pembayarangagal">Notifikasi Pembayaran Gagal</option>
									<option value="pembayaranberhasil">Notifikasi Pembayaran Berhasil</option>
									<option value="kirimundangan">Notifikasi Undangan</option>
									<option value="kirimundangan">Notifikasi Konfirmasi Kehadiran</option>
								</select>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="hidden" name="aid" id="aid" value="">
									<button type="submit" class="btn btn-default">Kirim Email</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php include('footer.php'); ?>
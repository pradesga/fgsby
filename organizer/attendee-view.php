<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee View Data</h1>

				<?php generateticket(); kirimemailnotif(); gantistatus(); $atten = getattendeebyid(); ?>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Attendee Information</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<div class="form-group">
								<label for="tgl" class="col-sm-2 control-label">Tanggal Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo tglku($atten['tgl'], 'd-m-Y H:i:s'); ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="Nama" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['nama']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['email']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['alamat']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="kota" class="col-sm-2 control-label">Kota</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['kota']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['hp']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="kode" class="col-sm-2 control-label">Kode Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $atten['kode']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">Status Registrasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo statusattendee($atten['konfirm']); ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="tglbayar" class="col-sm-2 control-label">Tanggal Pembayaran</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo ($atten['tglbayar'] == "") ? "" : tglku($atten['tglbayar'], 'd-m-Y H:i:s'); ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="tglkonfirm" class="col-sm-2 control-label">Tanggal Konfirmasi</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo ($atten['tglkonfirm'] == "") ? "" : tglku($atten['tglkonfirm'], 'd-m-Y H:i:s'); ?></p>
								</div>
							</div>
							<div class="form-group">
								<label for="qrundangan" class="col-sm-2 control-label">QR Undangan</label>
								<div class="col-sm-10">
									<p class="form-control-static"><img src="/qrcode.php?size=120&data=<?php echo urlencode(base64_encode($atten['kode'])); ?>"></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<a href="attendee-edit.php?id=<?php echo $atten['id']; ?>" class="btn btn-default">Edit Data</a>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Ganti Status</h2>
					</div>
					<div class="panel-body">
						<form class="form-inline" method="post">
							<input type="hidden" name="aid" id="aid" value="<?php echo $atten['id']; ?>">
							
							<?php $stat = array(
								'0' => 'Validasi Pembayaran', 
								'1' => 'Pembayaran Lunas', 
								'2' => 'Batal Daftar', 
								'3' => 'Konfirmasi Hadir', 
								'4' => 'Batal Hadir',
								'5' => 'Hadir'
							); 
							foreach ($stat as $k => $v) { 
								if($k == $atten['konfirm']){
									if($k == '2' || $k == '4') {
										$clss = 'danger';
									} else {
										$clss = 'info';
									}
								} else { 
									$clss = 'default'; 
								} ?>

							<div class="form-group">
								<button type="submit" name="ganti" id="ganti" value="<?php echo $k; ?>" class="btn btn-<?php echo $clss; ?>"><?php echo $v; ?></button>
							</div>

						<?php } ?>

						</form>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Kirim Email Notifikasi</h2>
					</div>
					<div class="panel-body">
						<form class="form-inline" method="post">
							<input type="hidden" name="aid" id="aid" value="<?php echo $atten['id']; ?>">
							<div class="form-group">
								<button type="submit" name="emailnotif" value="0" class="btn btn-<?php echo ($atten['email_confirm'] == 0) ? 'default' : 'warning'; ?>">Reset</button>
							</div>

							<?php $emnot = array("Notifikasi Registrasi", "Pembayaran Berhasil", "Pembayaran Gagal", "Kirim Undangan", "Konfirmasi Hadir"); ?>
							<?php foreach ($emnot as $enk => $env) { 
								$cllss = "";
								switch ($enk) {
									
									default:
										if( $enk == $atten['email_confirm'] ){ 
											$cllss = 'success'; 
										} else {
											$cllss = 'default'; 
										}
										break;
								} ?>

							<div class="form-group">
								<button type="submit" name="emailnotif" value="<?php echo $enk+1; ?>" class="btn btn-<?php echo $cllss; ?>"><?php echo $env; ?></button>
							</div>

							<?php } ?>
							<div class="form-group">
								<label><input type="checkbox" name="notsend"> Tandai saja</label>
							</div>
							<div class="form-group">
								<label><input type="checkbox" name="sendsmsto"> Kirim SMS</label>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Undangan</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<input type="hidden" name="aid" id="aid" value="<?php echo $atten['id']; ?>">
							<div class="form-group">
								<label for="urlundangan" class="col-sm-2 control-label">URL Undangan</label>
								<div class="col-sm-10">
									<p class="form-control-static"><?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/tickets/'.$atten['urlundangan']; ?></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-info">Generate Undangan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php include('footer.php'); ?>
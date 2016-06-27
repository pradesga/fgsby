<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Submit New Attendee</h1>

				<?php 
				if($_POST != null){ 
					if(newattendee()){ 
						echo msgbox('Data peserta baru telah tersimpan!', 'success'); 
					} else {
						echo msgbox('Data tidak tersimpan, koreksi dan ulangi beberapa saat lagi!', 'danger'); 
					}
				} 
				?>

				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="Nama" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" require>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" require>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" require>
						</div>
					</div>
					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">Kota</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" require>
						</div>
					</div>
					<div class="form-group">
						<label for="nohp" class="col-sm-2 control-label">Nomor Telepon</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Telepon" require>
						</div>
					</div>
					<div class="form-group">
						<label for="pembayaran" class="col-sm-2 control-label">Pembayaran</label>
						<div class="col-sm-10">
							<input type="checkbox" name="pembayaran"> Sudah Bayar
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
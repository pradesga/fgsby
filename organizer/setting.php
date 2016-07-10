<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Application Settings</h1>
				<?=msgsettingpages(); ?>
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="email-from" class="col-sm-4 control-label">Administration Email</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-from" id="email-from" value="<?=getoption('email-from'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-subject-registration" class="col-sm-4 control-label">Subject Registration</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-subject-registration" id="email-subject-registration" value="<?=getoption('email-subject-registration'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-template-registration" class="col-sm-4 control-label">Email Template Registration</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="email-template-registration" id="email-template-registration" rows="5"><?=getoption('email-template-registration'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="sms-template-registration" class="col-sm-4 control-label">SMS Template Registration</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="sms-template-registration" id="sms-template-registration" rows="5"><?=getoption('sms-template-registration'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="email-subject-invitation" class="col-sm-4 control-label">Subject Invitation</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-subject-invitation" id="email-subject-invitation" value="<?=getoption('email-subject-invitation'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-template-invitation" class="col-sm-4 control-label">Email Template Invitation</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="email-template-invitation" id="email-template-invitation" rows="5"><?=getoption('email-template-invitation'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="sms-template-invitation" class="col-sm-4 control-label">SMS Template Invitation</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="sms-template-invitation" id="sms-template-invitation" rows="5"><?=getoption('sms-template-invitation'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="email-subject-pembayaran-berhasil" class="col-sm-4 control-label">Subject Pembayaran Berhasil</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-subject-pembayaran-berhasil" id="email-subject-pembayaran-berhasil" value="<?=getoption('email-subject-pembayaran-berhasil'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-template-pembayaran-berhasil" class="col-sm-4 control-label">Email Template Pembayaran Berhasil</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="email-template-pembayaran-berhasil" id="email-template-pembayaran-berhasil" rows="5"><?=getoption('email-template-pembayaran-berhasil'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="sms-template-pembayaran-berhasil" class="col-sm-4 control-label">SMS Template Pembayaran Berhasil</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="sms-template-pembayaran-berhasil" id="sms-template-pembayaran-berhasil" rows="5"><?=getoption('sms-template-pembayaran-berhasil'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="email-subject-pembayaran-gagal" class="col-sm-4 control-label">Subject Pembayaran Gagal</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-subject-pembayaran-gagal" id="email-subject-pembayaran-gagal" value="<?=getoption('email-subject-pembayaran-gagal'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-template-pembayaran-gagal" class="col-sm-4 control-label">Email Template Pembayaran Gagal</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="email-template-pembayaran-gagal" id="email-template-pembayaran-gagal" rows="5"><?=getoption('email-template-pembayaran-gagal'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="sms-template-pembayaran-gagal" class="col-sm-4 control-label">SMS Template Pembayaran Gagal</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="sms-template-pembayaran-gagal" id="sms-template-pembayaran-gagal" rows="5"><?=getoption('sms-template-pembayaran-gagal'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="email-subject-konfirmasi-kehadiran" class="col-sm-4 control-label">Subject Konfirmasi Kehadiran</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="email-subject-konfirmasi-kehadiran" id="email-subject-konfirmasi-kehadiran" value="<?=getoption('email-subject-konfirmasi-kehadiran'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email-template-konfirmasi-hadir" class="col-sm-4 control-label">Email Template Konfirmasi Kehadiran</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="email-template-konfirmasi-hadir" id="email-template-konfirmasi-hadir" rows="5"><?=getoption('email-template-konfirmasi-hadir'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="sms-template-konfirmasi-hadir" class="col-sm-4 control-label">SMS Template Konfirmasi Kehadiran</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="sms-template-konfirmasi-hadir" id="sms-template-konfirmasi-hadir" rows="5"><?=getoption('sms-template-konfirmasi-hadir'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-info">Simpan</button>
						</div>
					</div>
				</form>
			</div>

<?php include('footer.php'); ?>
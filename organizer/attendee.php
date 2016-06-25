<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee Registration</h1>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telepon</th>
								<th>Kota</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (getattendee() as $attk) { ?>
							<tr>
								<td><?php echo $attk['id']; ?></td>
								<td><?php echo $attk['nama']; ?></td>
								<td><?php echo $attk['email']; ?></td>
								<td><?php echo $attk['hp']; ?></td>
								<td><?php echo $attk['kota']; ?></td>
								<td>sit</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

<?php include('footer.php'); ?>
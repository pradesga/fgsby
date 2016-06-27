<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Attendee Registration <a href="attendee-new.php" class="btn btn-small btn-info">new</a></h1>

				<?php delattendee(); ?>
				
				<div class="table-responsive">
					<table class="table table-striped" id="attendee-lists">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telepon</th>
								<th>Kota</th>
								<th>Kode</th>
								<th>Status</th>
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
								<td><?php echo $attk['kode']; ?></td>
								<td><?php echo statusattendee($attk['konfirm']); ?></td>
								<td>
									<a href="?action=del&id=<?php echo $attk['id']; ?>" class="btn btn-small btn-danger">delete</a> 
									<a href="attendee-edit.php?id=<?php echo $attk['id']; ?>" class="btn btn-small btn-info">edit</a> 
									<a href="attendee-view.php?id=<?php echo $attk['id']; ?>" class="btn btn-small btn-info">view</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

<?php include('footer.php'); ?>
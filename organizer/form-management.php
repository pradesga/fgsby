<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Form Management <a href="form-management-new.php" class="btn btn-small btn-info">new</a></h1>
				
				<div class="table-responsive">
					<table class="table table-striped" id="attendee-lists">
						<thead>
							<tr>
								<th>#</th>
								<th>Form Title</th>
								<th>Form Description</th>
								<th>Form Location</th>
								<th>Author</th>
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
								<td><?php echo $attk['kode']; ?></td>
								<td><?php echo statusattendee($attk['konfirm']); ?></td>
								<td>
									<a href="?action=del&id=<?php echo $attk['id']; ?>" class="btn btn-xs btn-danger">delete</a> 
									<a href="attendee-edit.php?id=<?php echo $attk['id']; ?>" class="btn btn-xs btn-warning">edit</a> 
									<a href="attendee-view.php?id=<?php echo $attk['id']; ?>" class="btn btn-xs btn-primary">view</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Form Location <a href="form-location-new.php" class="btn btn-small btn-info">new</a></h1>
				
				<div class="table-responsive">
					<table class="table table-striped" id="attendee-lists">
						<thead>
							<tr>
								<th>#</th>
								<th>Location</th>
								<th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (getformlocation() as $attk) { ?>
							<tr>
								<td><?php echo $attk['idloc']; ?></td>
								<td><?php echo $attk['locname']; ?></td>
								<td><?php echo $attk['locdesc']; ?></td>
								<td><?php echo funcstatus($attk['status']); ?></td>
								<td>
									<a href="?action=del&id=<?php echo $attk['idloc']; ?>" class="btn btn-xs btn-danger">delete</a> 
									<a href="form-location-edit.php?id=<?php echo $attk['idloc']; ?>" class="btn btn-xs btn-warning">edit</a> 
									<a href="form-location-view.php?id=<?php echo $attk['idloc']; ?>" class="btn btn-xs btn-primary">view</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

<?php include('footer.php'); ?>
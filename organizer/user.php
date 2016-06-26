<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Users</h1>
				<div class="table-responsive">
					<table class="table table-striped" id="userlogin-lists">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<?php foreach (getuserlogin() as $user) { ?>
							
							<tr>
								<td><?php echo $user['id'] ?></td>
								<td><?php echo $user['username'] ?></td>
								<td><?php echo $user['email'] ?></td>
								<td><a href="">Change Password</a></td>
							</tr>

							<?php } ?>

						</tbody>
					</table>
				</div>
			</div>

<?php include('footer.php'); ?>
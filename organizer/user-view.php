<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Create New User</h1>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">User Information</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<div class="form-group">
								<label for="username" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input name="username" id="username" type="text" class="form-control" value="" placeholder="Username" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">email</label>
								<div class="col-sm-10">
									<input name="email" id="email" type="email" class="form-control" value="" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password1" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input name="password1" id="password1" type="password" class="form-control" value="" placeholder="Password" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password2" class="col-sm-2 control-label">Password Lagi</label>
								<div class="col-sm-10">
									<input name="password2" id="password2" type="password" class="form-control" value="" placeholder="Password Lagi" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Edit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
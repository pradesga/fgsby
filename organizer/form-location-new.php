<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Submit New Location</h1>

				<?php echo newformlocation(); ?>

				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="Nama" class="col-sm-2 control-label">Location Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="locname"  placeholder="Location name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea name="locdesc" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Main Table</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="maintable" placeholder="Main table name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">Main Table Fields</label>
						<div class="col-sm-10">
							<textarea name="maintablefields" placeholder="Separate them by comma." class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="nohp" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-10">
							<select name="status" class="form-control">
								<option value="1">Active</option>
								<option value="0">Non-Active</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Save</button>
						</div>
					</div>
				</form>
			</div>

<?php include('footer.php'); ?>
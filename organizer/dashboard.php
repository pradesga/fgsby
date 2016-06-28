<?php include('header.php'); ?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Dashboard</h1>
				<div class="row">
					<div class="col-sm-6" id="piechart01"></div>
					<div class="col-sm-6" id="piechart02"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Status', 'Jumlah'],
			<?php foreach (pembayaranpeserta() as $pk) { ?>
			['<?php echo $pk["konfirm"]; ?>', <?php echo $pk["jmlkonf"]; ?>],
			<?php } ?>
		]);

		var options = {
			title: 'Status Peserta',
			height: 280
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart01'));
		chart.draw(data, options);

		var data02 = google.visualization.arrayToDataTable([
			['Kota', 'Jumlah'],
			<?php foreach(attendeeperkota() as $kk){ ?>
			['<?php echo $kk['kota']; ?>', <?php echo $kk['jmlkota']; ?>],
			<?php } ?>
		]);

		var options02 = {
			title: 'Kota Peserta',
			height: 280
		};

		var chart02 = new google.visualization.PieChart(document.getElementById('piechart02'));
		chart02.draw(data02, options02);
	}
</script>
				</div>

				<h2 class="sub-header">Section title</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1,001</td>
								<td>Lorem</td>
								<td>ipsum</td>
								<td>dolor</td>
								<td>sit</td>
							</tr>
							<tr>
								<td>1,002</td>
								<td>amet</td>
								<td>consectetur</td>
								<td>adipiscing</td>
								<td>elit</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>Integer</td>
								<td>nec</td>
								<td>odio</td>
								<td>Praesent</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>libero</td>
								<td>Sed</td>
								<td>cursus</td>
								<td>ante</td>
							</tr>
							<tr>
								<td>1,004</td>
								<td>dapibus</td>
								<td>diam</td>
								<td>Sed</td>
								<td>nisi</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

<?php include('footer.php'); ?>
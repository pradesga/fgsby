<?php require("inc/frontend.php"); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

	<title>FemaleGeek Surabaya</title>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
	<center>
    	<a class="logofg" href="/"><img src="img/fg.png"></a>
	</center>

	<div class="container">
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<h3 class = "panel-title"><center><b>Form Registrasi</b></center></h3>
			</div><!-- heading -->
			<div class = "panel-body">
				<div class="container">
					<div class="row">
						<form role="form" class="col-md-9 go-right" method="post">
							<h2>Isian Registrasi FemaleGeek</h2>
							<p>Isikan sesuai data anda.</p>
							<?php echo $msg; ?>
							<div class="form-group">
								<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Anda" value="<?php echo $nama; ?>" required>
								<label for="nama">Nama Anda</label>
							</div>
							<div class="form-group">
								<input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat Anda" value="<?php echo $alamat; ?>" required>
								<label for="alamat">Alamat Anda</label>
							</div>
							<div class="form-group">
								<input id="nohp" name="nohp" type="text" class="form-control" placeholder="Nomor Handphone Anda" value="<?php echo $nohp; ?>" required>
								<label for="nohp">Nomor Handphone Anda</label>
							</div>
							<div class="form-group">
								<input id="email" name="email" type="email" class="form-control" placeholder="Alamat Email Anda" value="<?php echo $email; ?>" required>
								<label for="email">Alamat Email Anda</label>
							</div>
							<div class="form-group">
								<input id="kota" name="kota" type="text" class="form-control" placeholder="Kota Asal Anda" value="<?php echo $kota; ?>" required>
								<label for="kota">Kota Asal Anda</label>
							</div>
							<div class="form-group">
								<input type="submit" value="Register" name="B1" class="btn btn-primary">
							</div>
							<p class="bg-success" style="padding:10px;margin-top:20px;"><small>Anda akan mendapatkan notifikasi melalui email, silahkan cek email anda.<br/>Email maksimal kami respon max 1X24jam</small></p>
						</form>
					</div>
				</div>
			</div><!-- body -->	
		</div><!-- info -->	
	</div> 

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require("coresystem.php");

function islogin(){
	if(isset($_SESSION['islogin'])){
		if($_SESSION['islogin'])
			return true;
	}
	else
		return false;
}

function hashpwd($pwdstr){
	return password_hash($pwdstr, PASSWORD_BCRYPT, array('cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)));
}

function checklogin(){
	$msg = '';
	if($_POST != null){
		$username = $_POST['username'];
		$pwdstr = $_POST['pwdstr'];

		$sql = "SELECT id, username, password, email FROM userlogin WHERE username = '$username'";
		$qry = mysql_query($sql);
		$rows = mysql_fetch_array($qry);

		if($rows == FALSE){
			$msg = msgbox('<strong>Error!</strong> pastikan anda adalah administrator!', 'danger');
		} else {
			if(password_verify($pwdstr, $rows['password'])){
				$_SESSION['islogin'] = true;
				$_SESSION['uloginid'] = $rows['id'];
				$msg = '<script>window.location = "/organizer/login.php";</script>';
			} else {
				$msg = msgbox('<strong>Error!</strong> password yang anda masukan salah!', 'danger');
			}
		}
	}
	return $msg;
}

function msgbox($msgstr, $alert = 'default'){
	$msg  = '<div class="alert alert-'.$alert.'" role="alert">';
	$msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$msg .= $msgstr;
	$msg .= '</div>';
	return $msg;
}

function activemenu($curr){
	if($_SERVER['PHP_SELF'] == $curr){
		echo ' class="active"';
	} else {
		 echo '';
	}
}

function getuserlogin(){
	$sql = "SELECT id, username, password, email FROM userlogin";
	$qry = mysql_query($sql);
	$rows = array();
	while ($row = mysql_fetch_array($qry)) {
		$thisrow = array();
		foreach ($row as $k => $v) {
			if(!is_int($k))
				$thisrow[$k] = $v;
		}
		$rows[] = $thisrow;
	}
	return $rows;
}

function getdatatablejs($files, $id){
	$jsstr  = '';
	if($_SERVER['PHP_SELF'] == $files){
		$jsstr  = '<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>' . "\n";
		$jsstr .= "\t" . '<script type="text/javascript">' . "\n";
		$jsstr .= "\t\t" . '$(document).ready(function(){' . "\n";
		$jsstr .= "\t\t\t" . '$("#'.$id.'").DataTable();' . "\n";
		$jsstr .= "\t\t" . '});' . "\n";
		$jsstr .= "\t" . '</script>' . "\n";
	}
	echo $jsstr;
}

function getscannerjs($files = '/organizer/checkin.php'){
	$jsstr  = '';
	if($_SERVER['PHP_SELF'] == $files){
		$jsstr  = '<script src="../js/html5-qrcode.min.js" type="text/javascript"></script>' . "\n";
		$jsstr .= "\t" . '<script type="text/javascript">' . "\n";
		$jsstr .= "\t\t" . '$(document).ready(function(){' . "\n";
		$jsstr .= "\t\t\t" . '$("#reader").html5_qrcode(function(data){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#read").html(data);' . "\n";
		$jsstr .= "\t\t\t" . '}, function(error){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#read_error").html(error);' . "\n";
		$jsstr .= "\t\t\t" . '}, function(videoError){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#vid_error").html(videoError);' . "\n";
		$jsstr .= "\t\t\t" . '});' . "\n";
		$jsstr .= "\t\t" . '});' . "\n";
		$jsstr .= "\t" . '</script>' . "\n";
	}
	echo $jsstr;
}

function getattendee(){
	$str = "SELECT id, nama, email, hp, kota, kode, konfirm FROM register ORDER BY id ASC";
	$qry = mysql_query($str);
	$datrow = array();
	while ($rows = mysql_fetch_array($qry)) {
		$thisrow = array();
		foreach ($rows as $k => $v) {
			if(!is_int($k))
				$thisrow[$k] = $v;
		}
		$datrow[] = $thisrow;
	}
	return $datrow;
}

function getattendeebyid(){
	$msg = array();
	if(isset($_GET['id'])){
		$attid = $_GET['id'];
		$sql = "SELECT * FROM register WHERE id = '$attid'";
		$qry = mysql_query($sql);
		while ($row = mysql_fetch_array($qry)) {
			foreach ($row as $k => $v) {
				if(!is_int($k))
					$msg[$k] = $v;
			}
		}
	}
	return $msg;
}

function delattendee(){
	$msg = "";
	if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){
		if(isset($_GET['action'])){
			if($_GET['action'] == 'del'){
				$attid = $_GET['id'];
				$sql = "DELETE FROM register WHERE id = '$attid'";
				if(mysql_query($sql)){
					$msg = msgbox('<strong>Berhasil!</strong> hapus peserta event berhasil.', 'warning');
				}
			}
		}
	}
	echo $msg;
}

function updateattendee(){
	$msg = "";
	if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){
		if(isset($_GET['action'])){
			if($_GET['action'] == 'update'){
				$attid = $_GET['id'];
				$sql = "UPDATE FROM register WHERE id = '$attid'";
				if(mysql_query($sql)){
					$msg = msgbox('<strong>Berhasil!</strong> hapus peserta event berhasil.', 'warning');
				}
			}
		}
	}
	echo $msg;
}

function newattendee(){
	$cid = generatekode();
	$cid = cekexistskode($cid);
	$tgl = date("Y-m-d H:i:s");

	$newdata = array(
		'nama' => $_POST['nama'],
		'alamat' => $_POST['alamat'],
		'hp' => $_POST['nohp'],
		'email' => $_POST['email'],
		'kota' => $_POST['kota'],
		'kode' => $cid,
		'tgl' => $tgl,
		'konfirm' => 0
	);

	$redi = implode(', ', array_map(function ($v, $k) { return sprintf("%s='%s'", $k, $v); }, $newdata, array_keys($newdata)));
	$sql = "INSERT INTO register SET $redi";
	if( mysql_query($sql) ){
		$emailfrom = 'FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>';
		$emailto = $newdata['nama'] . ' <'.$newdata['email'].'>';
		$subject = 'Konfirmasi Registrasi Event';

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>";
		$headers[] = "Reply-To: FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>";
		$headers[] = "Subject: {$subject}";
		$headers[] = "X-Mailer: PHP/".phpversion();
		
		$msgregis  = 'Pendaftaran anda berhasil, dengan data sebagai berikut' . "\n";
		$msgregis .= 'Nama: ' . $newdata['nama'] . "\n";
		$msgregis .= 'Email: ' . $newdata['email'] . "\n";
		$msgregis .= 'Alamat: ' . $newdata['alamat'] . "\n";
		$msgregis .= 'Kota: ' . $newdata['kota'] . "\n";
		$msgregis .= 'Nomor Handphone: ' . $newdata['hp'] . "\n";
		$msgregis .= 'Kode Registrasi: ' . $newdata['kode'] . "\n";
		$msgregis .= '===================================' . "\n\n";
		$msgregis .= 'Silahkan melakukan pembayaran melalui nomor rekening sebagai berikut' . "\n";
		$msgregis .= 'Biaya Registrasi : Rp 50.000 (Lima Puluh Ribu Rupiah)' . "\n";
		$msgregis .= 'Nomor Rekening: BCA 325 1222 400 an. Kiki Indah Novitasari' . "\n\n";
		$msgregis .= '===================================' . "\n\n";
		$msgregis .= 'Setelah melakukan pembayaran silahkan melakukan konfirmasi dengan menghubungi nomor telepon atau Line sebagai berikut' . "\n";
		$msgregis .= 'Atau alamat email sebagai berikut' . "\n";
		$msgregis .= 'Illa 085810187939 / line @illarhs' . "\n";
		$msgregis .= 'Kiki 081289846568 / line @ivonesarii' . "\n\n";
		$msgregis .= '===================================' . "\n";
		$msgregis .= 'Panitia Event FemaleGeek Surabaya' . "\n";

		if( mail($emailto, $subject, $msgregis, implode("\r\n", $headers) ) ){
			return true;
		} else {
			return;
		}
	} else {
		return;
	}
}

function generatekode(){
	$a1 = array ("A","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");
	$random_keys= array_rand($a1, 6);
	$kode1 = $a1[$random_keys[0]];
	$kode2 = $a1[$random_keys[1]];
	$kode3 = $a1[$random_keys[2]];
	$kode4 = $a1[$random_keys[3]];
	$kode5 = $a1[$random_keys[4]];
	$kode6 = $a1[$random_keys[5]];
	return $kode1.''.$kode2.''.$kode3.''.$kode4.''.$kode5.''.$kode6;
}

function cekexistskode($kode){
	$sql = "SELECT kode FROM register WHERE kode = '$kode'";
	$qry = mysql_query($sql);
	$row = mysql_fetch_array($qry);

	$cid = '';
	if(!$row){
		$cid = $kode;
	} else {
		$cid = generatekode();
		cekexistskode($cid);
	}

	return $cid;
}

function cekemailexist($email){
	$sql = "SELECT email FROM register WHERE email = '$email'";
	$qry = mysql_query($sql);
	$row = mysql_fetch_array($qry);

	if(!$row){
		return;
	} else {
		return true;
	}
}

function statusattendee($sti){
	$stat = array(
		'0' => 'Validasi Pembayaran', 
		'1' => 'Pembayaran Lunas', 
		'2' => 'Batal Daftar', 
		'3' => 'Konfirmasi Hadir', 
		'4' => 'Batal Hadir',
		'5' => 'Hadir'
	);

	return $stat[$sti];
}
<?php
require("coresystem.php");
require('../qrcode.php');

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
		$jsstr .= '<script src="../js/jquery.base64.min.js" type="text/javascript"></script>' . "\n";
		$jsstr .= "\t" . '<script type="text/javascript">' . "\n";
		$jsstr .= "\t\t" . '$(document).ready(function(){' . "\n";
		$jsstr .= "\t\t\t" . 'var atteid;' . "\n";
		$jsstr .= "\t\t\t" . '$("#scanreader").html5_qrcode(function(kod){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#scanread").val($.base64.decode(kod));' . "\n";
		$jsstr .= "\t\t\t\t" . "$.post('', {kodereg: $.base64.decode(kod)}, 'json').done(function(getatten){" . "\n";
		$jsstr .= "\t\t\t\t\t" . "$('#errbox').hide();";
		$jsstr .= "\t\t\t\t\t" . "var atten = $.parseJSON(getatten);" . "\n";
		$jsstr .= "\t\t\t\t\t" . "if(!atten.error){" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "atteid = atten.res.id;" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#tgl').html(atten.res.tgl);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#nama').html(atten.res.nama);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#email').html(atten.res.email);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#alamat').html(atten.res.alamat);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#kota').html(atten.res.kota);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#nohp').html(atten.res.hp);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#statreg').html(atten.res.statreg);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#tglbayar').html(atten.res.tglbayar);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#btncheckin').removeClass('btn-default');" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#btncheckin').addClass('btn-success');" . "\n";
		$jsstr .= "\t\t\t\t\t" . "} else {" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#errmsg').html(atten.msg);" . "\n";
		$jsstr .= "\t\t\t\t\t\t" . "$('#errbox').show();" . "\n";
		$jsstr .= "\t\t\t\t\t" . "}" . "\n";
		$jsstr .= "\t\t\t\t" . "});" . "\n";
		$jsstr .= "\t\t\t" . '}, function(error){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#scanerror").html("Scanner ready! hadapkan QR pada camera!");' . "\n";
		$jsstr .= "\t\t\t" . '}, function(videoError){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#scanerror").html(videoError);' . "\n";
		$jsstr .= "\t\t\t" . '});' . "\n";
		$jsstr .= "\t\t\t" . '$("#btncheckin").click(function(e){' . "\n";
		$jsstr .= "\t\t\t\t" . "e.preventDefault();" . "\n";
		$jsstr .= "\t\t\t\t" . '$.post("", {aid: atteid, kodereg: $("#scanread").val(), doact: "update"}, "json").done(function(dt){' . "\n";
		$jsstr .= "\t\t\t\t\t" . "var dtres = $.parseJSON(dt);" . "\n";
		$jsstr .= "\t\t\t\t\t" . "$('#scanreport').html(dtres.msg);" . "\n";
		$jsstr .= "\t\t\t\t\t" . '$("#btncheckin").removeClass("btn-success");' . "\n";
		$jsstr .= "\t\t\t\t\t" . '$("#btncheckin").addClass("btn-default");' . "\n";
		$jsstr .= "\t\t\t\t" . '});' . "\n";
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

function getattendeebyid($atid = ""){
	$msg = array();
	if(isset($_GET['id']))
		$attid = $_GET['id'];

	if($atid != ""){
		$attid = $atid;
		$sql = "SELECT * FROM register WHERE id = '$attid'";
	} else {
		$sql = "SELECT * FROM register";
	}

	$qry = mysql_query($sql);
	while ($row = mysql_fetch_array($qry)) {
		foreach ($row as $k => $v) {
			if(!is_int($k))
				$msg[$k] = $v;
		}
	}

	$ur = '';
	
	if(!empty($msg['tglbayar']) && $msg['tglbayar'] != '0000-00-00 00:00:00'){
		$ur .= tglku($msg['tgl'], 'dmYHis') . tglku($msg['tglbayar'], 'dmYHis') . '.pdf';
	}

	$qrimg = get_image(urlencode(base64_encode($msg['kode'])), $size = 256);
	$qrimg = 'data:image/png;base64,' . base64_encode($qrimg);

	$hashkonf = base64_encode(base64_encode(base64_encode($msg['kode'])));

	$mysit = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];

	$msg['undangan'] = $ur;
	$msg['urlundangan'] = $mysit.'/tickets/'.$ur;
	$msg['qrimage'] = $qrimg;
	$msg['linkkonfirmasi'] = $mysit.'/regkey='.urlencode($hashkonf).'&do=confirm';
	$msg['linkunkonfirmasi'] = $mysit.'/regkey='.urlencode($hashkonf).'&do=unconfirm';
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
				} else {
					$msg = msgbox('<strong>Server Error!</strong> data peserta event gagal dihapus.', 'danger');
				}
			}
		}
	}
	echo $msg;
}

function gantistatus(){
	$msg = "";
	if(isset($_POST['ganti'])){
		if($_POST['ganti'] != ""){
			$attid = $_POST['aid'];
			if($_POST['ganti'] == 'emailkonfirm'){
				$from = $_POST['ganti'];
			} else {
				$from = (int)$_POST['ganti'];
			}
			$tgl = date("Y-m-d H:i:s");

			if(!is_integer($from)){
				$sql = "UPDATE register SET email_confirm = '1' WHERE id = '$attid'";
			} elseif($from == 0){
				$sql = "UPDATE register SET konfirm = '$from', tglbayar = NULL, tglkonfirm = NULL WHERE id = '$attid'";
			} elseif($from == 1){
				$sql = "UPDATE register SET konfirm = '$from', tglbayar = '$tgl', tglkonfirm = NULL WHERE id = '$attid'";
			} elseif($from == 3 || $from == 4) {
				$sql = "UPDATE register SET konfirm = '$from', tglkonfirm = '$tgl' WHERE id = '$attid'";
			} else {
				$sql = "UPDATE register SET konfirm = '$from' WHERE id = '$attid'";
			}

			if(mysql_query($sql)){
				$msg = msgbox('<strong>Update Berhasil!</strong> status peserta event berhasil diganti.', 'success');
			} else {
				$msg = msgbox('<strong>Server Error!</strong> status peserta event gagal diganti.', 'danger');
			}
		} else {
			$msg = msgbox('<strong>System Error!</strong> status peserta event gagal diganti.', 'danger');
		}
	}
	echo $msg;
}

function updateattendee(){
	$msg = "";
	if(isset($_POST['attid'])){
		$attid = $_POST['attid'];
		$newdata = array(
			'nama' => $_POST['nama'],
			'email' => $_POST['email'],
			'alamat' => $_POST['alamat'],
			'kota' => $_POST['kota'],
			'hp' => $_POST['nohp'],
			'kode' => $_POST['kodereg']
		);
		$redi = implode(', ', array_map(function ($v, $k) { return sprintf("%s='%s'", $k, $v); }, $newdata, array_keys($newdata)));
		$sql = "UPDATE register SET  $redi WHERE id = '$attid'";
		if(mysql_query($sql)){
			$msg = msgbox('<strong>Update Berhasil!</strong> data peserta event berhasil dirubah.', 'success');
		} else {
			$msg = msgbox('<strong>System Error!</strong> status peserta event gagal diganti.', 'danger');
		}
	}
	echo $msg;
}

function newattendee(){
	$mmssgg = "";
	if($_POST != null){ 
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

		if(mysql_query($sql)){
			$lid = mysql_insert_id();
			emailregistrant($lid, 'email-template-registration', 'email-subject-registration');
			smsregistrant($lid, 'sms-template-registration');
			$mmssgg = msgbox('Data peserta baru telah tersimpan!', 'success');
		} else {
			$mmssgg = msgbox('Data tidak tersimpan, koreksi dan ulangi beberapa saat lagi!', 'danger'); 
		}
	}
	return $mmssgg;
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

function tglku($datestr, $format){
	$datestr = new DateTime($datestr);
	return date_format($datestr, $format);
}

function getattendeebykodereg(){
	$msg = array();
	if(isset($_POST['kodereg'])){
		$attid = $_POST['kodereg'];
		$sql = "SELECT * FROM register WHERE kode = '$attid'";
		$qry = mysql_query($sql);
		while ($row = mysql_fetch_array($qry)) {
			foreach ($row as $k => $v) {
				if(!is_int($k) || $k == 0 )
					$msg[$k] = $v;
				if('konfirm' == $k){
					$msg[$k] = $v;
					$msg['statreg'] = statusattendee($v);
				}
				
			}
		}
	}
	return $msg;
}

if(isset($_POST['kodereg'])){
	if($_SERVER['PHP_SELF'] == '/organizer/checkin.php'){
		if(isset($_POST['doact'])){
			$from = '5';
			$kr = $_POST['kodereg'];
			$sql = "UPDATE register SET konfirm = '$from' WHERE kode = '$kr'";
			if(mysql_query($sql)){
				echo json_encode(array('error' => false, 'res' => true, 'msg' => 'Checkin Berhasil!'));
				die();
			} else {
				echo json_encode(array('error' => true, 'res' => null, 'msg' => 'Checkin gagal, silahkan coba lagi!'));
				die();
			}
		} else {
			$att = getattendeebykodereg();
			if($att != null){
				echo json_encode(array('error' => false, 'res' => $att, 'msg' => 'data suskses'));
				die();
			} else {
				echo json_encode(array('error' => true, 'res' => null, 'msg' => 'Data tidak ditemukan!'));
				die();
			}
		}
	}
}

function attendeeperkota(){
	$sql = "SELECT kota, COUNT( kota ) AS jmlkota FROM register GROUP BY kota HAVING ( COUNT( kota ) >=1 )";
	$qry = mysql_query($sql);

	$resul = array();
	while ($rows = mysql_fetch_array($qry)) {
		$tr = array();
		foreach ($rows as $k => $v) {
			if(!is_integer($k))
				$tr[$k] = $v;
		}
		$resul[] = $tr;
	}
	return $resul;
}

function pembayaranpeserta(){
	$sql = "SELECT konfirm, COUNT( konfirm ) AS jmlkonf FROM register GROUP BY konfirm HAVING( COUNT( konfirm ) >= 1 )";
	$qry = mysql_query($sql);

	$stat = array(
		'0' => 'Validasi Pembayaran', 
		'1' => 'Pembayaran Lunas', 
		'2' => 'Batal Daftar', 
		'3' => 'Konfirmasi Hadir', 
		'4' => 'Batal Hadir',
		'5' => 'Hadir'
	);

	$resul = array();
	while ($rows = mysql_fetch_array($qry)) {
		$tr = array();
		foreach ($rows as $k => $v) {
			if(!is_integer($k)){
				if("konfirm" == $k){
					$tr[$k] = $stat[$v];
				} else {
					$tr[$k] = $v;
				}
			}
		}
		$resul[] = $tr;
	}
	return $resul;
}

function kirimemailnotif(){
	if(isset($_POST['emailnotif'])){
		if($_POST['emailnotif'] != ""){
			$en = (int)$_POST['emailnotif'];
			$attid = $_POST['aid'];
			$sql = "UPDATE register SET email_confirm = '$en' WHERE id = '$attid'";

			if(mysql_query($sql)){
				if(!isset($_POST['notsend'])){
					switch ($en) {
						case 1 :
							emailregistrant($attid, 'email-template-registration', 'email-subject-registration');
							if(isset($_POST['sendsmsto']))
								smsregistrant($attid, 'sms-template-registration');
							break;
						case 2 :
							emailregistrant($attid, 'email-template-pembayaran-berhasil', 'email-subject-pembayaran-berhasil');
							if(isset($_POST['sendsmsto']))
								smsregistrant($attid, 'sms-template-pembayaran-berhasil');
							break;
						case 3 :
							emailregistrant($attid, 'email-template-pembayaran-gagal', 'email-subject-pembayaran-gagal');
							if(isset($_POST['sendsmsto']))
								smsregistrant($attid, 'sms-template-pembayaran-gagal');
							break;
						case 4 :
							emailregistrant($attid, 'email-template-invitation', 'email-subject-invitation');
							if(isset($_POST['sendsmsto']))
								smsregistrant($attid, 'sms-template-invitation');
							break;
						case 5 :
							emailregistrant($attid, 'email-template-konfirmasi-hadir', 'email-subject-konfirmasi-hadir');
							if(isset($_POST['sendsmsto']))
								smsregistrant($attid, 'sms-template-konfirmasi-hadir');
							break;
						default:
							break;
					}
				}

				$msg = msgbox('<strong>Update Berhasil!</strong> status peserta event berhasil diganti.', 'success');
			} else {
				$msg = msgbox('<strong>Server Error!</strong> status peserta event gagal diganti.', 'danger');
			}
		} else {
			$msg = msgbox('<strong>System Error!</strong> status peserta event gagal diganti.', 'danger');
		}
	}
}

function emailregistrant($att, $tpl, $sbj){
	$dtem = getattendeebyid($att);

	$subjemail = getoption($sbj);
	
	$tempemail = getoption($tpl);
	$tempemail = extracttext($tempemail, $dtem);
	
	return emailer([$dtem['nama'] => $dtem['email']], $subjemail, $tempemail);
}

function smsregistrant($att, $tpl){
	$dtem = getattendeebyid($att);
	
	$tempsms = getoption($tpl);
	
	$tempsms = extracttext($tempsms, $dtem);
	
	return smssender($dtem['hp'], $message);
}

function msgsettingpages(){
	$msg = "";
	if($_POST != null){
		$data = $_POST;
		$err = 0;
		foreach ($data as $k => $v) {
			if($v != ""){
				if(!updateoption($k, $v)){
					$err = $err++;
				}
			}
		}
		if($err == 0){
			$msg = msgbox('<strong>Update Berhasil!</strong> pengaturan telah tersimpan.', 'success');
		} else {
			$msg = msgbox('<strong>Update Berhasil!</strong> sebagian pengaturan tidak tersimpan.', 'warning');
		}
	}
	return $msg;
}

function generateticket(){
	$msg = "";
	if($_POST != null){
		$att = (isset($_POST['aid'])) ? (int)$_POST['aid'] : 0;
		if($att != 0){
			createticket($att);
			$msg = msgbox('<strong>Generate Tiket Berhasil!</strong> file pdf tiket tersimpan.', 'success');
		} else {
			$msg = msgbox('<strong>Generate Tiket Gagal!</strong> file pdf tiket tidak tersimpan.', 'danger');
		}
	}
	echo $msg;
}

function createticket($att){
	$datpdf = getattendeebyid($att);
	$pathf = $datpdf['undangan'];
	if((int)$datpdf['konfirm'] >= 1 ){
		if(!file_exists($pathf)){
			$tempdf = file_get_contents('../inc/ticket/template.html');
			$datpdf = getattendeebyid($att);
			$tempdf = extracttext($tempdf, $datpdf);

			return createpdf($tempdf, $pathf);
		} else {
			return unlink($pathf);
		}
	} else {
		return unlink($pathf);
	}
}

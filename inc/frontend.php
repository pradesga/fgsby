<?php
require("coresystem.php");

switch (str_replace('/', '', $_SERVER['PHP_SELF'])) {
	case 'registrasi.php':
		$msg = "";
		$nama = '';
		$alamat = '';
		$nohp = '';
		$email = '';
		$kota = '';
		
		if($_POST != null){
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$nohp = $_POST['nohp'];
			$email = $_POST['email'];
			$kota = $_POST['kota'];

			if(!array_search('', $_POST)){
				if(cekemailexist($email)){
					$msg = '<div class="alert alert-warning" role="alert">Error! Data tidak tersimpan. Alamat email Anda telah terdaftar, silahkan coba menggunakan alamat email lain.</div>';
				} else {
					if(emailregistrasi()){
						$msg  = '<div class="alert alert-success" role="alert">';
						$msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
						$msg .= 'Terima kasih! Registrasi Anda berhasil, silahkan cek email konfirmasi dan silahkan lakukan pembayaran secepatnya.';
						$msg .= '</div>';

						$nama = '';
						$alamat = '';
						$nohp = '';
						$email = '';
						$kota = '';
					} else {
						$msg = '<div class="alert alert-danger" role="alert">Mohon Maaf, data registrasi Anda tidak tersimpan. Ada masalah dengan system kami.</div>';
					}
				}
			} else {
				$msg = '<div class="alert alert-warning" role="alert">Error! Data tidak tersimpan. Silahkan lengkapi data registrasi anda.</div>';
			}
		}
		break;

	case 'konfirmasi.php':
		break;

	case 'timeline.php':
		$datarr = array();
		$datearr = array();
		$gs = "(SELECT id, nama, tgl, kota, kode, 0 AS konfirm FROM register) UNION (SELECT id, nama, tglbayar, kota, kode, 1 AS konfirm  FROM register WHERE tglbayar != '') ORDER BY tgl DESC";

		$fs = mysql_query($gs);
		
		while($row = mysql_fetch_array($fs)){
			$rowarr = array();
			$datearr[] = tglku($row['tgl'], 'd-m-Y');
			foreach ($row as $rkey => $rvalue) {
				$rowarr[$rkey] = $rvalue;
			}
			$datarr[] = $rowarr;
		}
		$datearr = array_unique($datearr);
		break;

	case 'index.php':
		break;

	default:
		break;
}

function emailregistrasi(){
	$cid = generatekode();
	$cid = cekexistskode($cid);
	$tgl = date("Y-m-d H:i:s");

	$bnama = $_POST['nama'];
	$balamat = $_POST['alamat'];
	$bnohp = $_POST['nohp'];
	$bemail = $_POST['email'];
	$bkota = $_POST['kota'];

	$gs = "INSERT INTO register SET nama='$bnama',alamat='$balamat',tgl='$tgl',hp='$bnohp',email='$bemail',kota='$bkota',kode='$cid',konfirm='0'";

	if(mysql_query($gs)){
		$lid = mysql_insert_id();
		emailregistrant($lid, 'email-template-registration', 'email-subject-registration');
		smsregistrant($lid, 'sms-template-registration');
		return true;
	} else {
		return;
	}
}

function getattendeebyid($atid = ""){
	$msg = array();
	if(isset($_GET['id']))
		$attid = $_GET['id'];

	if($atid != "")
		$attid = $atid;

	$sql = "SELECT * FROM register WHERE id = '$attid'";
	$qry = mysql_query($sql);
	while ($row = mysql_fetch_array($qry)) {
		foreach ($row as $k => $v) {
			if(!is_int($k))
				$msg[$k] = $v;
		}
	}

	$ur = '';
	
	if(!empty($msg['tglbayar']) && $msg['tglbayar'] != '0000-00-00 00:00:00'){
		$ur  = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/tickets/';
		$ur .= tglku($msg['tgl'], 'dmYHis') . tglku($msg['tglbayar'], 'dmYHis') . '.pdf';
	}
	
	$msg = $msg + array('urlundangan' => $ur);
	return $msg;
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

function tglku($datestr, $format){
	$date = date_create($datestr);
	return date_format($date, $format);
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
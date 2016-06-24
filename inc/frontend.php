<?php
date_default_timezone_set('Asia/Jakarta');
session_name('FGSBYSID');
session_start();

$dbHost = "localhost";
// $dbUser = "fgsby_root";
// $dbPass = "200677";
$dbUser = "root";
$dbPass = "";
$dbName = "fgsby_fg";
mysql_connect($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName) or die(mysql_error());

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
			} else {
				$msg = '<div class="alert alert-warning" role="alert">Error! Data tidak tersimpan. Silahkan lengkapi data registrasi anda.</div>';
			}
		}
		break;

	case 'konfirmasi.php':
		break;

	case 'timeline.php':
		$datarr = array();
		$gs = "SELECT DAY(tgl) AS tanggal, MONTH(tgl) AS bulan, nama, tgl, kota, kode, konfirm FROM register ORDER BY id DESC";
		$fs = mysql_query($gs);
		while($row = mysql_fetch_array($fs)){
			$rowarr = array();
			foreach ($row as $rkey => $rvalue) {
				$rowarr[$rkey] = $rvalue;
			}
			$datarr[] = $rowarr;
		}
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

	$gs = "INSERT INTO register SET nama='$bnama' , alamat='$balamat' , tgl='$tgl' , hp='$bnohp', email='$bemail', kota='$bkota', kode='$cid', konfirm=0";
	$str = mysql_query($gs) or die ("Gagal query".mysql_error());

	if($str == TRUE){
		$emailadm = 'eventorg@des.org';
		$msgregis = 'Pendaftaran anda berhasil';
		if(mail($emailadm, 'Konfirmasi Registrasi', $msgregis)){
			return true;
		} else
			return;
	} else
		return;
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
	$cid = '';
	$sqlkod = "SELECT kode FROM register WHERE kode = $kode";
	$kodindb = mysql_query($sqlkod);
	$row = mysql_fetch_array($kodindb);

	if($row['kode'] == $kode){
		$cid = generatekode();
		cekexistskode($cid);
	} else {
		$cid = $kode;
	}

	return $cid;
}
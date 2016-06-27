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
		$gs = "SELECT id, nama, tgl, kota, kode, konfirm FROM register ORDER BY id DESC";
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
	$str = mysql_query($gs) or die ("Gagal query " . mysql_error() );

	if($str == TRUE){
		$emailfrom = 'FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>';
		$emailto = $bnama . ' <'.$bemail.'>';
		$subject = 'Konfirmasi Registrasi Event';

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>";
		$headers[] = "Reply-To: FemaleGeek Surabaya <noreply@femalegeek-sby.dev.php.or.id>";
		$headers[] = "Subject: {$subject}";
		$headers[] = "X-Mailer: PHP/".phpversion();
		
		$msgregis  = 'Pendaftaran anda berhasil, dengan data sebagai berikut' . "\n";
		$msgregis .= 'Nama: ' . $bnama . "\n";
		$msgregis .= 'Email: ' . $bemail . "\n";
		$msgregis .= 'Alamat: ' . $balamat . "\n";
		$msgregis .= 'Kota: ' . $bkota . "\n";
		$msgregis .= 'Nomor Handphone: ' . $bnohp . "\n";
		$msgregis .= 'Kode Registrasi: ' . $cid . "\n";
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
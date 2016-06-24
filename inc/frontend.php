<?php
session_name('FGSBYSID');
session_start();

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
		}

		if(!array_search('', $_POST)){
			if(emailregistrasi()){
				$nama = '';
				$alamat = '';
				$nohp = '';
				$email = '';
				$kota = '';

				$msg  = '<div class="alert alert-success" role="alert">';
				$msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				$msg .= 'Terima kasih! Registrasi Anda berhasil, silahkan cek email konfirmasi dan silahkan lakukan pembayaran secepatnya.';
				$msg .= '</div>';
			} else {
				$msg = '<div class="alert alert-danger" role="alert">Mohon Maaf, data registrasi Anda tidak tersimpan. Ada masalah dengan system kami.</div>';
			}
		} else {
			$msg = '<div class="alert alert-warning" role="alert">Error! Data tidak tersimpan. Silahkan lengkapi data registrasi anda.</div>';
		}
		break;

	case 'konfirmasi.php':
		break;

	case 'timeline.php':
		break;

	case 'index.php':
		break;

	default:
		break;
}

function emailregistrasi(){
	$emailadm = 'eventorg@des.org';
	$msgregis = 'Pendaftaran anda berhasil';
	if(mail($emailadm, 'Konfirmasi Registrasi', $msgregis)){
		return true;
	} else
		return;
}
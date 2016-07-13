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

require 'vendor/autoload.php';
use Dompdf\Dompdf;

function getoption($keyoption, $echo = false){
	$sql = "SELECT value FROM settings WHERE name = '$keyoption'";
	$qry = mysql_query($sql);
	$res = mysql_fetch_array($qry);

	if(!$res)
		return;
	else {
		if(!$echo){
			return $res['value'];
		} else
			echo $res['value'];
	}
}

function updateoption($keyoption, $value){
	$sql = "SELECT value FROM settings WHERE name = '$keyoption'";
	$qry = mysql_query($sql);
	$res = mysql_fetch_array($qry);

	if(!$res){
		$sqli = "INSERT INTO settings SET name = '$keyoption', value = '$value', autoload = '1'";
		if(mysql_query($sqli)){
			return true;
		} else {
			return;
		}
	} else {
		$sqlu = "UPDATE settings SET value = '$value' WHERE name = '$keyoption'";
		if(mysql_query($sqlu)){
			return true;
		} else {
			return;
		}
	}
}

function emailer($mailto, $subject, $msg, $from = array('FemaleGeek Surabaya', 'fgsby@phpindonesia.or.id'), $bcc = null, $htmlview = false, $attach = null){
	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->SMTPDebug = 3;

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'ssl://smtp.gmail.com';
	$mail->Username = getoption('mailer-username'); 
	$mail->Password = getoption('mailer-password');
	$mail->SMTPSecure = 'sll';
	$mail->Port = 465;

	$mail->setFrom($from[1], $from[0]);

	if(is_array($mailto)){
		foreach ($mailto as $toname => $tomail) {
			$mail->addAddress($tomail, $toname);
		}
	}

	$mail->addReplyTo($from[1], $from[0]);

	if($bcc != null){
		foreach ($bcc as $bccname => $bccmail){
			$mail->addCC($bccmail, $bccname);
		}
	}

	if($htmlview){
		$mail->isHTML(true);
	}

	if($attach != null){
		foreach ($attach as $doc) {
			$mail->addAttachment($doc);
		}
	}

	$mail->Subject = $subject;
	$mail->Body = $msg;

	if(!$mail->send()){
		return;
	} else {
		return true;
	}
}

function createpdf($texthtml, $filename, $read = false){
	$dompdf = new Dompdf();
	$dompdf->set_paper('A5', 'landscape');
	$dompdf->loadHtml($texthtml);
	$dompdf->render();

	if($read){
		$dompdf->stream('ticket', array('Attachment' => 0));
	} else {
		file_put_contents('../tickets/'.$filename, $dompdf->output());
	}
}

function smssender($telepon, $message){
	$userkey = getoption('zenziva-userkey');
	$passkey = getoption('zenziva-passkey');

	$url = "https://reguler.zenziva.net/apps/smsapi.php";
	$dt = "userkey=$userkey&passkey=$passkey&nohp=$telepon&pesan=".urlencode($message);
	$curlHandle = curl_init();
	curl_setopt($curlHandle, CURLOPT_URL, $url .'?'.$dt);
	curl_setopt($curlHandle, CURLOPT_HEADER, 0);
	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 0);
	$results = curl_exec($curlHandle);
	curl_close($curlHandle);

	return $results;
}

function extracttext($texts, $data = null){
	$regex = "/\[(.*?)\]/";
	preg_match_all($regex, $texts, $matches);

	for($i = 0; $i < count($matches[1]); $i++){
		$match = $matches[1][$i];
		if(isset($data[$match]))
			$texts = str_replace($matches[0][$i], $data[$match], $texts);
	}
	return $texts;
}

function encrypt($decrypted, $password, $salt='!kQm*fF3pXe1Kbm%9') {
	// Build a 256-bit $key which is a SHA256 hash of $salt and $password.
	$key = hash('SHA256', $salt . $password, true);
	// Build $iv and $iv_base64.  We use a block size of 128 bits (AES compliant) and CBC mode.  (Note: ECB mode is inadequate as IV is not used.)
	srand(); $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND);
	if (strlen($iv_base64 = rtrim(base64_encode($iv), '=')) != 22) return false;
	// Encrypt $decrypted and an MD5 of $decrypted using $key.  MD5 is fine to use here because it's just to verify successful decryption.
	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $decrypted . md5($decrypted), MCRYPT_MODE_CBC, $iv));
	// We're done!
	return $iv_base64 . $encrypted;
}

function decrypt($encrypted, $password, $salt='!kQm*fF3pXe1Kbm%9') {
	// Build a 256-bit $key which is a SHA256 hash of $salt and $password.
	$key = hash('SHA256', $salt . $password, true);
	// Retrieve $iv which is the first 22 characters plus ==, base64_decoded.
	$iv = base64_decode(substr($encrypted, 0, 22) . '==');
	// Remove $iv from $encrypted.
	$encrypted = substr($encrypted, 22);
	// Decrypt the data.  rtrim won't corrupt the data because the last 32 characters are the md5 hash; thus any \0 character has to be padding.
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($encrypted), MCRYPT_MODE_CBC, $iv), "\0\4");
	// Retrieve $hash which is the last 32 characters of $decrypted.
	$hash = substr($decrypted, -32);
	// Remove the last 32 characters from $decrypted.
	$decrypted = substr($decrypted, 0, -32);
	// Integrity check.  If this fails, either the data is corrupted, or the password/salt was incorrect.
	if (md5($decrypted) != $hash) return false;
	// Yay!
	return $decrypted;
}
?>
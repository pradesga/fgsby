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

function emailer($mailto, $subject, $msg, $from = array('FemaleGeek Surabaya', 'fgsby@phpindonesia.or.id'), $bcc = null, $htmlview = false, $attach = null){
	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->SMTPDebug = 3;

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'ssl://smtp.gmail.com';
	$mail->Username = 'femalegeeksurabaya@gmail.com'; 
	$mail->Password = 'icha200677';
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
		file_put_contents('../tickets/' . $filename, $dompdf->output());
	}
}

function smssender($telepon, $message){
	$userkey = "9kpaeh";
	$passkey = "icha200677";

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
?>
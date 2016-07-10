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

function sendemail($from, $to, $subject, $body){
	$mgclient = new \Http\Adapter\Guzzle6\Client();
	$mailgun = new Mailgun("key-223e5dfea0fa99dddc1160bf99fe9b6a", $mgclient);

	$mailgun->sendMessage("sandboxa3639126f70745549a6e880d41fc276c.mailgun.org", 
		array(	'from'    => $from,
				'to'      => $to, 
				'subject' => $subject, 
				'text'    => $body));
	return true;
}

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

function creatpdf(){
	try {
		ob_start();
		include '/../ticket.php';
		$content = ob_get_clean();
		$html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
		$html2pdf->pdf->SetDisplayMode('fullpage');
		$html2pdf->writeHTML($content);
		$html2pdf->Output('ticket.pdf');
	} catch (Html2PdfException $e) {
		$formatter = new ExceptionFormatter($e);
		echo $formatter->getHtmlMessage();
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
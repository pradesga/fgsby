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
	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;

	$mail->isSMTP();
	$mail->Host = 'mail.phpindonesia.or.id';
	$mail->SMTPAuth = true;
	$mail->Username = 'fgsby@phpindonesia.or.id';
	$mail->Password = 'fgsby2016';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

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

?>
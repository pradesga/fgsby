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
use Mailgun\Mailgun;

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
?>
<?php
// test();
require("inc/coresystem.php");

// var_dump(emailer(array("Eko Prasetyo" => "prasetyodesign@gmail.com"), "Test Email", "masuk apa ngga"));
// creatpdf();

// var_dump(smssender('085695404253', 'test sms zenziva'));
// var_dump(zsendsms());

// var_dump(extracttext('The people are very nice [nama], the people are very nice [alamat]', array('nama' => 'Eko Prasetyo', 'alamat' => 'Ponorogo')));

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
	return $msg;
}

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

function emailregistrasi($att){
	$tempemail = getoption('email-template-registration');
	$subjemail = getoption('email-subject-registration');
	$tempsms = getoption('sms-template-registration');
	$dtem = getattendeebyid($att);

	$tempemail = extracttext($tempemail, $dtem);

	return emailer([$dtem['nama'] => $dtem['email']], $subjemail, $tempemail);
}

// var_dump(emailregistrasi(1));

var_dump(1>=1);
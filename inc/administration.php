<?php
require("coresystem.php");

function islogin(){
	if(isset($_SESSION['islogin'])){
		if($_SESSION['islogin'])
			return true;
	}
	else
		return false;
}

function hashpwd($pwdstr){
	return password_hash($pwdstr, PASSWORD_BCRYPT, array('cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)));
}

function checklogin(){
	$msg = '';
	if($_POST != null){
		$username = $_POST['username'];
		$pwdstr = $_POST['pwdstr'];

		$sql = "SELECT id, username, password, email FROM userlogin WHERE username = '$username'";
		$qry = mysql_query($sql);
		$rows = mysql_fetch_array($qry);

		if($rows == FALSE){
			$msg = msgbox('<strong>Error!</strong> pastikan anda adalah administrator!', 'danger');
		} else {
			if(password_verify($pwdstr, $rows['password'])){
				$_SESSION['islogin'] = true;
				$_SESSION['uloginid'] = $rows['id'];
				$msg = '<script>window.location = "/organizer/login.php";</script>';
			} else {
				$msg = msgbox('<strong>Error!</strong> password yang anda masukan salah!', 'danger');
			}
		}
	}
	return $msg;
}

function msgbox($msgstr, $alert = 'default'){
	$msg  = '<div class="alert alert-'.$alert.'" role="alert">';
	$msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$msg .= $msgstr;
	$msg .= '</div>';
	return $msg;
}

function activemenu($curr){
	if($_SERVER['PHP_SELF'] == $curr){
		echo ' class="active"';
	} else {
		 echo '';
	}
}

function getattendee(){
	$str = "SELECT id, nama, email, hp, kota, kode, konfirm FROM register ORDER BY id ASC";
	$qry = mysql_query($str);
	$datrow = array();
	while ($rows = mysql_fetch_array($qry)) {
		$thisrow = array();
		foreach ($rows as $k => $v) {
			if(!is_int($k))
				$thisrow[$k] = $v;
		}
		$datrow[] = $thisrow;
	}
	return $datrow;
}

function getuserlogin(){
	$sql = "SELECT id, username, password, email FROM userlogin";
	$qry = mysql_query($sql);
	$rows = array();
	while ($row = mysql_fetch_array($qry)) {
		$thisrow = array();
		foreach ($row as $k => $v) {
			if(!is_int($k))
				$thisrow[$k] = $v;
		}
		$rows[] = $thisrow;
	}
	return $rows;
}

function getdatatablejs($files, $id){
	$jsstr  = '';
	if($_SERVER['PHP_SELF'] == $files){
		$jsstr  = '<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>' . "\n";
		$jsstr .= "\t" . '<script type="text/javascript">' . "\n";
		$jsstr .= "\t\t" . '$(document).ready(function(){' . "\n";
		$jsstr .= "\t\t\t" . '$("#'.$id.'").DataTable();' . "\n";
		$jsstr .= "\t\t" . '});' . "\n";
		$jsstr .= "\t" . '</script>' . "\n";
	}
	echo $jsstr;
}

function getscannerjs($files = '/organizer/checkin.php'){
	$jsstr  = '';
	if($_SERVER['PHP_SELF'] == $files){
		$jsstr  = '<script src="../js/html5-qrcode.min.js" type="text/javascript"></script>' . "\n";
		$jsstr .= "\t" . '<script type="text/javascript">' . "\n";
		$jsstr .= "\t\t" . '$(document).ready(function(){' . "\n";
		$jsstr .= "\t\t\t" . '$("#reader").html5_qrcode(function(data){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#read").html(data);' . "\n";
		$jsstr .= "\t\t\t" . '}, function(error){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#read_error").html(error);' . "\n";
		$jsstr .= "\t\t\t" . '}, function(videoError){' . "\n";
		$jsstr .= "\t\t\t\t" . '$("#vid_error").html(videoError);' . "\n";
		$jsstr .= "\t\t\t" . '});' . "\n";
		$jsstr .= "\t\t" . '});' . "\n";
		$jsstr .= "\t" . '</script>' . "\n";
	}
	echo $jsstr;
}

function delattendee(){
	$msg = "";
	if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){
		if(isset($_GET['action'])){
			$attid = $_GET['id'];
			$sql = "DELETE FROM register WHERE id = '$attid'";
			if(mysql_query($sql)){
				$msg = msgbox('<strong>Berhasil!</strong> hapus peserta event berhasil.', 'warning');
			}
		}
	}
	echo $msg;
}

function updateattendee(){
	$msg = "";
	if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){
		if(isset($_GET['action'])){
			$attid = $_GET['id'];
			$sql = "DELETE FROM register WHERE id = '$attid'";
			if(mysql_query($sql)){
				$msg = msgbox('<strong>Berhasil!</strong> hapus peserta event berhasil.', 'warning');
			}
		}
	}
	echo $msg;
}
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
				header('Location: /organizer/');
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
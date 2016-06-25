<?php
header('Content-Type: image/png');
if($_GET != NULL){
	$data = $_GET['data'];
	if(isset($_GET['size'])){
		echo get_image($data, $_GET['size']);
	}elseif(isset($_GET['level'])){
		echo get_image($data, $_GET['size'], $_GET['level']);
	}elseif(isset($_GET['margin'])){
		echo get_image($data, $_GET['size'], $_GET['level'], $_GET['margin']);
	} else {
		echo get_image($data);
	}
}

function get_image($data, $size = 250, $EC_level = 'L', $margin = '0'){
	$ch = curl_init();
	$data = urlencode($data);
	curl_setopt($ch, CURLOPT_URL, 'http://chart.apis.google.com/chart');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'chs='.$size.'x'.$size.'&cht=qr&chld='.$EC_level.'|'.$margin.'&chl='.$data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}
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

?>
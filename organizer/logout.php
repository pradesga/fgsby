<?php 
require("../inc/administration.php"); 
if(islogin()) { session_destroy(); header('Location: /organizer'); }
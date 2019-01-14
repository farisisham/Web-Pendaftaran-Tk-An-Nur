<?php
if(empty($_SESSION['SES_LOGIN'])) {
	echo "";
		  
	include_once "login.php";
	exit;
}
?>
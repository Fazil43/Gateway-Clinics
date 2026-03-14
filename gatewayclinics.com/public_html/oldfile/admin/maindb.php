<?php

error_reporting(0);
@ob_start();
 @session_start(); 
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: login-form.php");
		exit();
	}
	
	?>
	
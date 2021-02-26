<?php
if(!isset( $_SESSION["myusername"] ))  
{
ob_start();
	//create database login info
	include_once("../functions.php");
	include_once("../config.php");
	$home_url = get_home_url_PCE();
    header("location: ../password_protect/main_login.php?redirect=".urlencode(curPageURL()));
exit();
}
?>
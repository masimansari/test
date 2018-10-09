<?php
session_start();
require_once('recaptchalib.php');
$publickey = "6Le0jikTAAAAADwnxJBBM8aTuXxTQWpGFvpjWv7P"; // you got this from the signup page

if (isset($_REQUEST['cmdSubmit']))
{
	define("RECAPTCHA_VERIFY_SERVER", "74.125.227.48");
	
	$privatekey = "6Le0jikTAAAAANP0dfGCwRMetc-xkXoefz-r1q_I";
	$resp = recaptcha_check_answer ($privatekey,
								$_SERVER["REMOTE_ADDR"],
								$_POST["recaptcha_challenge_field"],
								$_POST["recaptcha_response_field"]);
	
	if (!$resp->is_valid) {
		// What happens when the CAPTCHA was entered incorrectly
		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
			 "(reCAPTCHA said: " . $resp->error . ")");
	} else {
		// Your code here to handle a successful verification
		echo "verify";
	}
	
}
?>
<html>
	<head>
    	<script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>
    </head>
    <body> <!-- the body tag is required or the CAPTCHA may not show on some browsers -->
      <!-- your HTML content -->

      <form method="post" action="captchatest.php">
        
        
        <label>User Name: </label>&nbsp;&nbsp;&nbsp;<input type="text" id="txtUserName" name="txtUserName" /> <br /><br />
        <label>Password: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="txtPassword" name="txtPassword" /> <br />
        
        <?php echo recaptcha_get_html($publickey); ?>
        
        <input type="submit" id="cmdSubmit" name="cmdSubmit" value="Enter"/>
      </form>

      <!-- more of your HTML content -->
    </body>
  </html>
  
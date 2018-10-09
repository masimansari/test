<?php
//ini_set('session.cookie_httponly', True);
session_start();
require_once('recaptchalib.php');
require_once('datacenter.php');
$publickey = "6Le0jikTAAAAADwnxJBBM8aTuXxTQWpGFvpjWv7P"; // you got this from the signup page
//echo recaptcha_get_html($publickey);
if (isset($_REQUEST['cmdSubmit']))
{
	//echo "submit";
	
	$dc = new DataCenter();
	
	$txtUserName = $_REQUEST['txtUserName'];
	$txtPassword = $_REQUEST['txtPassword'];
	
	$response = $dc->Login($txtUserName, $txtPassword);
	
	if (is_array($response))
	{
		
		$_SESSION['Name'] = $response[0];
		$_SESSION['user'] = $response[1];
		$_SESSION['pass'] = $response[2];
		
		header("Location: test2.php");
	}
	else
	{
		echo "Invalid user.<br />";
	}
	
	
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
	
	
	
	//echo "submit";
}
?>
<html>
	<head>
    	<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body> <!-- the body tag is required or the CAPTCHA may not show on some browsers -->
      <!-- your HTML content -->

      <form method="post" action="index.php">
        
        
        <label>User Name: </label>&nbsp;&nbsp;&nbsp;<input type="text" id="txtUserName" name="txtUserName" /> <br /><br />
        <label>Password: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="txtPassword" name="txtPassword" /> <br />
        
        <?php echo recaptcha_get_html($publickey); ?>
        
        <input type="submit" id="cmdSubmit" name="cmdSubmit" value="Enter"/>
      </form>

      <!-- more of your HTML content -->
    </body>
  </html>
  
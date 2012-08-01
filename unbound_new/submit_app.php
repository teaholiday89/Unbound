

<? ob_start(); ?>

<?php
  require_once('recaptchalib.php');
  $privatekey = "6Le7bMwSAAAAAAq5xgv2XuFLiMZ0DuV0WdUnNGij";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    echo ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else { 
    // Your code here to handle a successful verification



$check = array();

if (!$_REQUEST['name']) {
	$check['error'] = true;
	$check['name'] = true;
}

if (!$_REQUEST['email']) {
	$check['error'] = true;
	$check['email'] = true;
}

if (!$_REQUEST['phone']) {
	$check['error'] = true;
	$check['phone'] = true;
}

if (!$_REQUEST['year']) {
	$check['error'] = true;
	$check['year'] = true;
}

if (!$_REQUEST['graduation']) {
	$check['error'] = true;
	$check['graduation'] = true;
}

if (!$_REQUEST['major']) {
	$check['error'] = true;
	$check['major'] = true;
}

if (!$_REQUEST['section']) {
	$check['error'] = true;
	$check['section'] = true;
}

if (!$_REQUEST['relevant']) {
	$check['error'] = true;
	$check['relevant'] = true;
}

if (!$_REQUEST['message']) {
	$check['error'] = true;
	$check['message'] = true;
}

if ($check['error']) { ?>

<? require 'application.inc'; ?>

<? } else {

$to = "unboundlit@gmail.com";
$subject = "Application to work";
$message = "Name: " . $_POST['name'] . 
		   "\nE-mail: " . $_POST['email'] .
		   "\nPhone Number: " . $_POST['phone'] .
		   "\nYear in School: " . $_POST['year'] .
		   "\nExpected Graduation: " . $_POST['graduation'] .
		   "\nMajor: " . $_POST['major'] . 
		   "\nMinor (if applicable): " . $_POST['minor'] . 
		   "\nDesired section (art, fiction, poetry): " . $_POST['section'] .
			"\nRelevant Course Work: \n" . $_POST['relevant'] . 
			"\nOther Experience: \n" . $_POST['other'] . 
			"\nWhy do you want to join Unbound?\n" . $_POST['message'] 
			;
$from = $_POST['email'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Your application has been submitted.";

}

}?> 


<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Apply";
$_TEMPLATE['css'] = "work.css";

ob_end_clean(); 

require("template.php");
 
?>
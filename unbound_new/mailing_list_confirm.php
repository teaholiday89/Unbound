<?

$check = array();

$check['name'] = "testName";

if (!$_POST['name']) {
	$check['error'] = true;
	$check['name'] = true;
} 

if (!$_POST['email']) {
	$check['error'] = true;
	$check['email'] = true;
}

if ($check['error']) { 

	$check['success'] = "false";

} else {

$to = "unboundlit@gmail.com";
$subject = "Mailing List Signup";
$message = "Name: " . $_POST['name'] . 
		   "\nE-mail: " . $_POST['email'];
$from = $_POST['email'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

$check['success'] = "true";

}

//$check = array("success" => "true");

echo json_encode($check);

?> 
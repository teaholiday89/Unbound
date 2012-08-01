<? ob_start(); ?>

<style>

	#content img {
		height: 150px;
	}

</style>

<img src="images/staff/ASH bio.jpg" />
<img src="images/staff/WILLIE bio.jpg" />
<img src="images/staff/KAT bio.jpg" />
<img src="images/staff/MOLLY bio.jpg" />
<img src="images/staff/BRI bio.jpg" />
<img src="images/staff/ROB bio.jpg" />
<img src="images/staff/BRYAN bio.jpg" />
<br/>
<img src="images/staff/SAM D bio.jpg" />
<img src="images/staff/MEREDITH bio.jpg" />
<img src="images/staff/LILY bio.jpg" />
<img src="images/staff/KIMBER bio.jpg" />
<img src="images/staff/SAM M bio.png" />
<img src="images/staff/JACLYN bio.jpg" />
<img src="images/staff/MARK bio.jpg" />
<img src="images/staff/CHELSEA bio.jpg" />

<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Editing Staff";

ob_end_clean(); 

require("template.php");
 
?>

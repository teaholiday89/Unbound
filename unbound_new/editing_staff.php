<? ob_start(); ?>

<style>

#content div {
	text-align: center;
	margin: 20px;
}

#content h3 {
	font-size: 1.0em !important;
	margin-bottom: 0px !important;
}


#extras {
	margin-top: 40px !important;
}

</style>
<br/>
<div id="chief">
	<h3>Editor-in-Chief</h3>
	<p>Ashlee Jacobson</p>
</div>

<div id="staff">
	<div id="art">
		<h3>Senior Art Editor</h3>
		<p>Chase Cranor</p>
	</div>
	
	<div id="fiction">
		<h3>Senior Fiction Editor</h3>
		<p>Rob Rich</p>
	</div>
	
	<div id="fiction">
		<h3>Fiction Staff</h3>
		<p>Bryan Atkinson<br/>
		Samantha Dalton<br/>
		Meredith Darnell<br/>
		Alex Fus<br/>
		Lily Leach<br/>
		Kimberlyn Magee<br/>
		Samantha Mitchell<br/>
		Jaclyn Morris<br/>
		Mark Plumlee<br/>
		Chelsea Woodworth</p>
	</div>
	
	<div id="poetry">
	  <h3>Senior Poetry Editor</h3>			
		<p>Willie VerSteeg</p>
	</div>
	
	<div id="poetry">
	  <h3>Poetry Staff</h3>			
		<p>Kat Fergerson<br/>
		Molly Gruber<br/>
		Sarah Hagy<br/>
		Ashlee Jacobson<br/>
		Colin Keating<br/>
		Kyle Long<br/>
		Alaric Lopez<br/>
		Brianna Persons</p>
	</div>
</div>

<div id="web">
	<h3>Web Editor</h3>
	<p>Todd Holiday</p>
</div>

<div id="extras">
	<a href="staff_bios.php"><h3 class="header_color">Staff Bios</h3></a>
	<a href="former_staff.php"><h3 class="header_color">Former Staff</h3></a>
	<a href="apply.php"><h3 class="header_color">Work for Unbound</h3></a>
</div>

<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Editing Staff";

ob_end_clean(); 

require("template.php");
 
?>

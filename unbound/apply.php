<? ob_start(); ?>

<style>



#content > form {
	width: fill;
	margin-left:;
}

table td {
	text-align: right;
}

#content .form-top {
	float: left;
	width: 50%;
	display: inline;
	margin-bottom: 30px;
}

input[type="text"] {
	border: 1px solid #333;
	font-size: 1.3em;
	width: 95%;
	padding: 2px;
}

textarea {
	width: 99%;
	border: 1px solid #333;
}

#verify {
	width: 320px;
	margin: auto;
}

</style>
<br/>
<p>Do you love the literary arts? Do you want experience in the editing and publishing world? Unbound is currently accepting applications for Art, Fiction, and Poetry editors! Please review the below information before applying.</p>

<blockquote>
	<p>Fall 2011 Application Deadline: September 22nd, 2011<br />
	Winter 2012 Application Deadline: January 5th, 2012<br />
	Spring 2012 Application Deadline: March 29th, 2012</p>
</blockquote>

<p>Please apply online below or send an e-mail to unboundlit@gmail.com with information corresponding to the application below. All applicants will be contacted in the week prior of the start of the term for which they applied. </p>

<p>Being on Unbound staff entails weekly all-staff and weekly section meetings (depending on submission load) plus participation in Unbound events (e.g., bake sales, book swaps, open mics, etc.). All-staff meetings range between 20-45 minutes; section meetings range 45 to 60 minutes and will not exceed an hour. Meetings may be cancelled during slow times (e.g., midterm weeks) and added during heavy ones (e.g., deadline week). All Unbound staff members are expected to participate in fundraiser events and attend meetings. Two meetings may be missed per term without prior notification or consequence. Those who repeatedly miss meetings and/or events will be asked to resign from their position on staff.</p>

<p>Please send any questions or inquiries to<br />
unboundlit@gmail.com.</p>

<br/>

<? require 'includes/application.inc' ?>


<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Editorial Positions";
$_TEMPLATE['css'] = "work.css";

ob_end_clean(); 

require("template.php");
 
?>
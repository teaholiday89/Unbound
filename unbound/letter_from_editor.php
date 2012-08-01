<? ob_start(); ?>
 
<br/>

<img src="images/staff/ashlee.jpg" class="black_border" style="width:190px;float:left;margin: 0 15px 10px 0;" />
<p><? require("includes/letter_from_editor_beginning.inc"); ?></p>

<p>Because of our continued success&mdash;all thanks to the talented students who continue to submit and the dedicated, passionate staff who continue to make our magazine flourish&mdash;I'm proud to announce that Unbound is able to publish our first ever print issue this spring! We're currently in the process of selecting pieces from our past issues for an annual anthology print issue to be released mid-term. We hope the addition of an annual anthology print issue in conjunction with a more interactive and aesthetically pleasing website will inspire student artists and authors to become more involved in Unbound and the creative community on campus. We have an amazing Creative Writing department here&mdash;currently ranked 8th in the nation&mdash;with some incredible opportunities, and encourage students to take advantage of all the University and Unbound have to offer. </p>
<img src="images/ashlee-signature.png" style="width:200px"/>
<br/>
<p class="bold">Ashlee Jacobson<br/>
Editor-in-Chief</p>

<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Letter From the Editor";

ob_end_clean(); 

require("template.php");
 
?>
<? ob_start(); ?>

<style>

#content > div {
	text-align: center;
}	

#content ul {
	list-style: none;
	margin: 0;
}

</style>

<div>
<br/>
<br/>
<section>
<h3>University Programs & Affiliations</h3>
	<ul>
			<li><a href="http://pages.uoregon.edu/crwrweb/">U of O Creative Writing Program</a></li>
			<li><a href="http://www.facebook.com/pages/The-Kidd-Tutorials/94942419745?ref=ts">The Kidd Tutorial</a></li>
			<li><a href="http://www.literary-arts.org/pal/">Portland Literary Arts</a></li>
			<li><a href="http://art-uo.uoregon.edu">U of O Art Department</a></li>
	</ul>
	<br/>
</section>
<section>
<h3>Art & Literary Journals</h3>
	<ul>
			<li><a href="http://pages.uoregon.edu/nwreview/">The Northwest Review</a></li>
			<li><a href="https://www.aprweb.org/">The American Poetry Review</a>
			<li><a href="http://iowareview.uiowa.edu/">The Iowa Review</a></li>
			<li><a href="http://www.juxtapoz.com/">Juxtapoz</a></>
			<li><a href="http://www.theparisreview.org">The Paris Review</a></li>
			<li><a href="http://www.narrativemagazine.com">Narrative Magazine</a></li>
			<li><a href="http://www.poets.org">Academy of American Poets</a></li>
			<li><a href="http://www.americanshortfiction.org">American Short Fiction</a></li>
	</ul>															
</section>
</div>
<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Links";

ob_end_clean(); 

require("template.php");
 
?>

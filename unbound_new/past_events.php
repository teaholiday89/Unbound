<? ob_start(); ?>

<section id="events">
	<h2>Readings &amp; Events</h2>
	<div class="scrollable">
		<article>
			<h3>Tina Boscha, Miriam Gershow, &amp; Pete Hoffmeister Read</h3>
			<p>Authors Tina Boscha, Miriam Gershow, and Pete Hoffmeister read at Tsunami Books. Thursday, January 19th, 2012 at 7 p.m., Tsunami Books</p>
		</article>
		<article>
			<h3>Author Jason Brown Reading at UO</h3>
			<p>Thursday, January 26th, 2012 at 8:00 p.m., Knight Library Browsing Room</p>
		</article>
		<article>
			<h3>Unbound Hosts First Open Mic of Winter Term</h3>
			<p>Thursday, February 2nd, 2012 from 6:30-8:30 p.m., The Buzz Caf&eacute; (EMU)</p>
		</article>
		<article>
			<h3>Unbound Information Table in EMU</h3>
			<p>Wednesday, February 15th, 2012 from 8:30-5:00 p.m., EMU Main Lobby</p>
			<p>Thursday, February 16th, 2012 from 8:30-5:00 p.m., EMU Main Lobby</p>
		</article>
		<article>
			<h3>Poet Geri Doran Reading at UO</h3>
			<p>Thursday, February 23rd, 2012 at 8:00 p.m., Knight Library Browsing Room</p>
		</article>
		<article>
			<h3>Unbound Hosted Open Mic</h3>
			<p>Thursday, March 1st, 2012 from 6:30-8:30 p.m., The Buzz Caf&eacute; (EMU)</p>
		</article>
		<article>
			<h3>Poet Andrew Hudgins Reads at UO</h3>
			<p>Thursday, April 26th, 2012 at 8:00 p.m., Knight Library Browsing Room</p>
		</article>
		<article>
			<h3>Author Randall Kenan Reads at UO</h3>
			<p>Thursday, May 10th, 2012 at 8:00 p.m., Gerlinger Hall Alumni Lounge</p>
		</article>					
	</div>
</section>

<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Former Staff";

ob_end_clean(); 

require("template.php");
 
?>
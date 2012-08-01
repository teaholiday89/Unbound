<? ob_start(); ?>

<style>

#content > div {
	margin-left: -30px;
}


#content > div p {
	text-align: center;
}

ul {
	list-style: disc;
}

</style>

<div>

<br/>

<p style="font-size: 1.5em; text-align:cente">Submit to: <a href="mailto:unboundlit@gmail.com">unboundlit@gmail.com</a></p>

<p style="font-size: 1.2em;">Unbound accepts submissions from University students only.</p>

<br/>

<h3>Literature Guidelines</h3>
<ul>
	 <li>Unbound accepts submissions of short stories, poetry, nonfiction, and plays.</li>
	 <li>There are no restrictions on style or subject.</li>
	 <li>Please limit Fiction and Non-Fiction to no more than 25 pages.</li>
	 <li>Please limit Poetry submissions to 5 poems.</li>
	 <li>Multiple submissions are encouraged, but please separate submissions by genre</li>
	 <li>Submissions should be in .DOC or .PDF email attachments, and should be saved as the title of the piece and the author&rsquo;s name (e.g. filename = PoemTitle.JoeSmith.doc).</li>
	 <li>Put the title, genre (Fiction/Non-Fiction, Poetry, or Art), in the subject line of the email.</li>
	 <li>The body of the email MUST include the author&rsquo;s information (major, year in school, previous publications, etc).</li> 
	 <li>Feel free to provide additional information about your submission in body of the email.</li>
	 <li>Fiction and Non-Fiction pieces should be double-spaced, with the author&rsquo;s last name and page number in the header.</li>
	 <li>Poetry pieces should be formatted as the poet would like to see it published (this includes punctuation, spelling, and white space).</li>
	 <li>Please include any past or current creative writing classes taken at the UO.</li>
</ul>

<br/>

<h3>Art Guidelines</h3>
<ul>
	 <li>Unbound accepts artwork in every medium (e.g. drawing, sculpture, photography, printmaking, fibers, etc).</li>
	 <li>You do not need to be an art major for your artwork to be considered; all students are encouraged to submit.</li>
	 <li>Artwork should be complete (not in progress).</li>
	 <li>Please include the medium of your submission in the subject line and your name, 
	 the title, original size/dimensions, and a brief description of each piece in the body of the e-mail.</li>
	 <li>Please limit your submission to no more than ten pieces.</li>
	 <li>Send your submissions in JPG or PNG format (we will not look at your website or open word documents), 200 dpi, and at least 800x600.</li>
</ul>

</div>
<br />
													 
<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Submission Guidelines";

ob_end_clean(); 

require("template.php");
 
?>
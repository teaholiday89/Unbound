<?php
function ae_detect_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Unbound: Online Literary Arts Magazine</title>
	<meta http-equiv="expires" content="Tue, 11 Sep 2001 08:00:00 GMT">
	<meta name="description" content="Official Literary Arts Magazine for the University of Oregon" />
	<link rel="shortcut icon" href="images/icon.jpg" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<!--<link rel="stylesheet" type="text/css" href="css/flexcroll.css" />
	<script type="text/javascript" src="js/flexcroll.js"></script>-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	
	<script type="text/javascript">
	
		$(document).ready(function() {
			
			console.log("test");
			headerImageRotate();
			galleryImageRotate();
		});
		
		
	
	</script>
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25546777-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div id="wrap">
	
	<?php  if (ae_detect_ie()) {  ?>
<div style="padding:10px; font-size: 1.3em;"> Our website is not supported in Internet Explorer and requires another browser to be able to view it. For this reason, as well as your safety as a web user, we highly recommend using a different browser such as <a class="header_color" href="http://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a> or <a class="header_color" href="https://www.google.com/chrome">Chrome</a>. Internet Explorer does not follow many modern web standards, so some changes will have to be made before the site is fully compatible with it. We apologize for the inconvenience and are working to make it accessible to those using Internet Explorer as soon as possible. In the meantime you can find us on <a href="http://www.facebook.com/unboundmagazine">Facebook</a> and send any inquiries or questions to unboundlit@gmail.com. </div>
<hr/>
<?php }  ?>
		
		<? require("includes/header.inc"); ?>
		
		<? require("includes/nav.inc"); ?>
		
		<div id="main">
			<section id="image-rotator">
				<article id="event_image"><img src=""/><img src=""/></article>
				
				<article id="art_image"><img src=""/><img src=""/></article>
				
				<article id="lit_image"><img src=""/><img src=""/></article>
				
				<a href="issue.php?iss=Current Issue"><article id="current_issue"><img src="images/issues/vol_5_iss_3.png" alt="Unbound Current Issue" /></article></a>
				
			</section>
		
			<div id="left_column">

				<section id="library">
					<h2>Past Issues</h2>
						<div>
							<a href="issue.php?iss=Volume 5, Issue 2"><img src="images/issues/vol_5_iss_2.jpg" /></a>
							<a href="issue.php?iss=Volume 5, Issue 1"><img src="images/issues/vol_5_iss_1.jpg" /></a>
							<a href="issue.php?iss=Volume 4, Issue 3"><img src="images/issues/vol_4_iss_3.png" /></a>						
						</div>
						<div>
						  <a href="issue.php?iss=Volume 4, Issue 2"><img src="images/issues/vol_4_iss_2.png" />	</a>
							<a href="issue.php?iss=Volume 4, Issue 1"><img src="images/issues/vol_4_iss_1.jpg" /></a>
							<a href="issue.php?iss=Volume 3, Issue 3"><img src="images/issues/vol_3_iss_3.jpg" /></a>
						</div>
				</section>								

				<? require("includes/news.inc"); ?>
				
				<section id="editor">	
					<h2>Letter from the Editor</h2>
					<img src="images/staff/ashlee.jpg" class="black_border" style="width:180px;float:left;margin: 0 15px 10px 0;" />
					<p class="indent"><? require("includes/letter_from_editor_beginning.inc"); ?></p>
				<p class="right"><a href="letter_from_editor.php">Read More</a></p>	
			</section>
			
			</div> <!-- end left column -->
			
			<div id="middle_column">	
				
				<? require("includes/readings_and_events.inc"); ?>
				
				<? require("includes/spotlight.inc"); ?>
				
				<section id="about">
					<h2>Unbound</h2>
					<p>Unbound is a student run online literary arts magazine at the University of Oregon that publishes undergraduate and graduate student work in the areas of art, fiction, and poetry. Unbound was founded in 2008 as a Clark Honors College thesis project and evolved into an online student publication after its founding members' experiences with University of Oregon's Literary Editing course and the University's long-running literary journal <em>The Northwest Review</em>. Since it's debut publication in Spring 2008, Unbound has been publishing one online issue per Fall, Winter, and Spring terms. Unbound's mission is to offer all University students a platform for their creative work and a community that allows students to share, grow, and intellectually engage in the fields of art, literature, editing, and publishing.
					<br/><br/></p>
				</section>
				
					
			</div> <!-- end middle column -->
			
			
			<div id="right_column">				
				
				<section id="supporters">
					<h2>Supporters</h2>
					<p>Click on the header above to find out more about our supporters, our first ever print issue, and the 2012 Kickstarter project that helped fund it!</p>
				</section>
				
				<? require("includes/mailing_list_form.inc"); ?>
				
				<section id="gallery">
					<h2>Gallery</h2>
					<article><img /><img /></article>
					<article><img /><img /></article>
					<article><img /><img /></article>
					<article><img /><img /></article>
					<!--<article><img /><img /></article>-->
				</section>	
			</div> <!-- end right column -->
			
		</div>  <!-- end main -->
		<br style="clear:both">
		<section id="staff">
			<div>
				<h2><a href="staff_bios.php">Unbound Editing Staff</a></h2>
			</div>
			<div>
				<a href="staff_bios.php#ashlee"><img src="images/staff/ASH bio.jpg" /></a>
				<a href="staff_bios.php#willie"><img src="images/staff/WILLIE bio_thumb.jpg" /></a>
				<a href="staff_bios.php#kat"><img src="images/staff/KAT bio.jpg" /></a>
				<a href="staff_bios.php#molly"><img src="images/staff/MOLLY bio.jpg" /></a>
				<a href="staff_bios.php#sarah"><img src="images/staff/SARAH bio_thumb.jpg" /></a>
				<a href="staff_bios.php#colin"><img src="images/staff/COLIN bio.jpg" /></a>
				<a href="staff_bios.php#bri"><img src="images/staff/BRI bio.jpg" /></a>
				<a href="staff_bios.php#rob"><img src="images/staff/ROB bio_thumb.jpg" /></a>
				<a href="staff_bios.php#bryan"><img src="images/staff/BRYAN bio_thumb.jpg" /></a>
				<br/>
				<a href="staff_bios.php#samd"><img src="images/staff/SAM D bio.jpg" /></a>
				<a href="staff_bios.php#meredith"><img src="images/staff/MEREDITH bio.jpg" /></a>
				<a href="staff_bios.php#alex"><img src="images/staff/ALEX bio.jpg" /></a>
				<a href="staff_bios.php#lily"><img src="images/staff/LILY bio.jpg" /></a>
				<a href="staff_bios.php#kimber"><img src="images/staff/KIMBER bio.jpg" /></a>
				<a href="staff_bios.php#samm"><img src="images/staff/SAM M bio.png" /></a>
				<a href="staff_bios.php#jaclyn"><img src="images/staff/JACLYN bio.jpg" /></a>
				<a href="staff_bios.php#mark"><img src="images/staff/MARK bio_thumb.jpg" /></a>
				<a href="staff_bios.php#chelsea"><img src="images/staff/CHELSEA bio_thumb.jpg" /></a>
				<a href="staff_bios.php#chase"><img src="images/staff/CHASE bio_thumb.jpg" /></a>
			</div>
			 			 
		</section>
	
		<footer>
			&copy; Unbound 2012
		</footer>
		
	</div> <!-- end wrap --> 

</body>
</html>

		
		
		
		
		
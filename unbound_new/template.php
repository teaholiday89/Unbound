<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Unbound: Online Literary Arts Magazine</title>
	<meta http-equiv="expires" content="Tue, 11 Sep 2001 08:00:00 GMT">
	<meta name="description" content="Official Literary Arts Magazine for the University of Oregon" />
	<link rel="shortcut icon" href="images/icon.jpg" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/flexcroll.css" />
	<script type="text/javascript" src="js/flexcroll.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
	<!--
  /*var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25546777-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();*/
	-->
	</script>

</head>

<body>
	<div id="wrap">
		
		<? require("includes/header.inc"); ?>
		
		<? require("includes/nav.inc"); ?>
		
		<div id="main">
			<aside id="left">
				<? require("includes/important_dates.inc"); ?>
			</aside>
			
			<aside id="right">
				<? require("includes/past_issues.inc"); ?>
			</aside>
			
			<div id="content">
				<h2><?=$_TEMPLATE['title']?></h2>
				
				<?=$_TEMPLATE['body']?>
				
			</div>			
		</div>  <!-- end main -->
		<br style="clear:both">
		
	
		<footer>
			&copy; Unbound 2012
		</footer>
		
	</div> <!-- end wrap -->

</body>
</html>

		
		
		
		
		
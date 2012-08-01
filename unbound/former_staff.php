<? ob_start(); ?>

<style>

.col {	
	-moz-column-count: 2;
	-moz-column-gap: 35px;
	-webkit-column-count: 2;
	-webkit-column-gap: 35px;
	column-count: 2;
	column-gap: 35px;
	margin-left: 40px;
}

.col article {
	margin-bottom:30px;
}

.col h3 {
	font-size: 1.3em;
	font-variant: small-caps;
	text-transform: none;
	text-align: left;
	margin-bottom: 5px;
}

.col article p {
	margin: 0;
}

</style>
<br/>
<div class="col">
		<article>
      <h3>Kevin Armstrong</h3>
      <p>Fiction Editor (Fall 08-Spring 10)</p>
      <p>Layout Editor (Spring 09-Spring 10)</p>
    </article>
    <article>
    	<h3>Jonoton Marcus Booze</h3>
    	<p>Art Editor (Spring 11)</p>
    	<p>Design Coordinator (Winter 12)</p>
    </article>
    <article>  
      <h3>Kira Burge</h3>
      <p>Senior Art Editor (Spring 08-Fall 08)</p>
    </article>
    <article>
      <h3>Mary Campbell</h3>
      <p>Art Editor (Fall 10)</p>
		</article>
		<article>	
			<h3>Kelsey Connell</h3>
			<p>Founding Editor (Spring 08)</p>
      <p>Editor-in-Chief (Fall 08-Spring 09)</p>
      <p>Layout Design (Winter 09-Spring 09)</p>
    </article>
    <article>  
      <h3>Eva DeBoer</h3>
      <p>Art Editor (Spring 09)</p>
		</article>
		<article>	
			<h3>Austin Diamond</h3>
      <p>Poetry Editor (Fall 10-Winter 11)</p>
    </article>
    <article>  
      <h3>Todd Disher</h3>
      <p>Fiction Editor (Spring 08)</p>
    </article>
    <article>
    	<h3>Kelly Edyburn</h3>
    	<p>Poetry Editor (Winter 10-Spring 11)</p>
    </article>
    <article>  
      <h3>Jane Elliot</h3>
      <p>Fiction Editor (Winter 09-Spring 10)</p>
      <p>Co-Editor-in-Chief (Fall 09-Spring 10)</p>
    </article>
    <article>  
      <h3>Emma Gordon</h3>
      <p>Senior Poetry Editor (Fall 08-Winter 09)</p>
    </article>
    <article>  
      <h3>Jackie Hamm</h3>
      <p>Fiction Editor (Winter 09-Spring 10)</p>
      <p>Senior Fiction Editor (Fall 09-Spring 10)</p>
		</article>
		<article>
			<h3>Laura Hanson</h3>
			<p>Fiction Editor (Fall 09-Spring 10)</p>
		</article>
		<article>
			<h3>Desirhea Katzenmeyer</h3>
			<p>Fiction Editor (Fall 10-Spring 11)</p>
		</article>
		<article>	
			<h3>Rayan Khayat</h3>
      <p>Art Editor (Winter 10-Spring 10</p>
			<p>Senior Art Editor (Fall 10)</p>
    </article>
    <article>  
      <h3>Jenna Lechner</h3>
      <p>Art Editor (Fall 08-Spring 10)</p>
			<p>Senior Art Editor (Spring 09)</p>
			<p>Layout Design (Spring 09-Winter 10)</p>
    </article>															 
		<article>
			<h3>Garrett Marco</h3>
			<p>Fiction Editor (Fall 09-Spring 10)</p>
			<p>Senior Fiction Editor (Fall 10-Spring 11)</p>
		</article>
		<article>
		  <h3>Ryan McConnell</h3>
      <p>Fiction Editor (Fall 09-Spring 10)</p>
		</article>
    <article>		
      <h3>Lindsay McInerny</h3>
      <p>Poetry Editor (Fall 08-Spring 09)</p>
			<p>Senior Poetry Editor (Fall 09-Spring 10)</p>
			<p>Layout Editor (Spring 09)</p>
    </article>
    <article>		
			<h3>Lauren Merge</h3>
      <p>Fiction Editor (Fall 10-Winter 11)</p>
    </article>
    <article>    
      <h3>Max Miller</h3>
      <p>Poetry Editor (Fall 09-Spring 10)</p>
			<p>Senior Poetry Editor (Fall 10-Spring 11)</p>
    </article>
    <article>    
      <h3>Luke Nelson</h3>
      </p>Poetry Editor (Winter 09-Spring 10)</p>
			<p>Co-Editor-in-Chief (Fall 09-Spring 10)</p>
    </article>
    <article>    
      <h3>Allise Penning</h3>
     	<p>Poetry Editor (Spring 09-Spring 10)</p>
    </article>
    <article>    
      <h3>Sara Raposso</h3>
      <p>Fiction Editor (Fall 08-Spring 09)</p>
			<p>Layout Editor (Fall 08-Spring 09)</p>
    </article>
    <article>    
      <h3>Rachel Rassmussen</h3>
      <p>Poetry Editor (Winter 09)</p>
    </article>
    <article>    
      <h3>MacKenzie Ross</h3>
      <p>Senior Fiction Editor (Fall 08-Spring 09)</p>
    </article>
    <article>
    	<h3>Sammy Shaw</h3>
    	<p>Editor-in-Chief (Fall 10-Spring 11)</p>
			<p>Poetry Editor (Spring 09-Spring 10)</p>
    </article>
    <article>    
      <h3>Kristina Stipetic</h3>
      <p>Art Editor (Winter 09-Spring 09)</p>
			<p>Senior Art Editor (Fall 09-Spring 10)</p>
    </article>
    <article>    
      <h3>Erin Stutesman</h3>
      <p>Fiction Editor (Fall 08-Spring 10)</p>			
    </article>
    <article>
    	<h3>Jenni Thompson</h3>
			<p>Senior Art Editor (Winter 10-Spring 11)</p>
    </article>
    <article>    
      <h3> Annie Tittiger</h3>
      <p>Fiction Editor (Spring 09-Spring 10)</p>
    </article>
    <article>
    	<h3>Aaron Wilmarth</h3>
			<p>Fiction Editor (Spring 11)</p>
    </article>
    <article>		
			<h3>Emma Whitman</h3>
      <p>Poetry Editor (Fall 10)</p>
    </article>
    <article>
    	<h3>Megan Woodie</h3>
    	<p>Poetry Editor (Fall 10-Fall 11)</p>
    </article>
</div>
<br/>
<br/>


<? 

$_TEMPLATE = array();
$_TEMPLATE['body'] = ob_get_contents(); 
$_TEMPLATE['title'] = "Former Staff";

ob_end_clean(); 

require("template.php");
 
?>

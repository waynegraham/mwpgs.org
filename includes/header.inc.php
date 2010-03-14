<?php
	/**
	 * Global header file
	 */

	// determine page for tabs across top
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Mt. Washington and Pairpoint Glass Society</title>
	
	<?php
		if($page == 'home' || $page == 'gallery'){
			echo('<link rel="stylesheet" href="/styles/screen2.css" type="text/css" media="screen" />');
			echo('
				<style type="text/css">
				#myGallerySet {
					width: 525px !important;
					height: 400px !important;
				}
				
				.jdGallery .slideInfoZone p {
					color: #eee;
					font-size: 100%;
					margin: 2px 5px;
					padding: 0;
				}
				
				
			</style>
			');
			
			echo('<script src="scripts/mootools.v1.11.js" type="text/javascript"></script>
<script src="scripts/jd.gallery.js" type="text/javascript"></script>
<script src="scripts/jd.gallery.set.js" type="text/javascript"></script>
<link rel="stylesheet" href="/styles/jd.gallery.css" type="text/css" media="screen" /> 


<script type="text/javascript">
function startGallery() {
	var myGallerySet = new gallerySet($(\'myGallerySet\'), {
		timed: false,
		useThumbGenerator: true 
	});
}
window.addEvent(\'domready\', startGallery);
</script> 
');
			
		} else if($page == 'contact'){
			echo('<script src="/scripts/jquery.js" type="text/javascript"></script>');
			echo('<script src="/scripts/jquery.metadata.js" type="text/javascript"></script>');
			echo('<script src="/scripts/jquery.validate.js" type="text/javascript"></script>');
			echo('<script src="/scripts/jquery.form.js" type="text/javascript"></script>
			<script type="text/javascript">
			$().ready(function(){
				$("#contact").validate({
					rules: {
						email: {
							required: true,
							email: true
						},
						name: "required",
						comments: "required"
					},
					messages: {
						email: "Please enter a valid email address.",
						name: "Please enter your name.",
						comments: "Please enter some comments."
					}
				});
			});
			</script>
			');
			echo('<link rel="stylesheet" href="/styles/screen.css" type="text/css" media="screen" />');
		} else {
			echo('<link rel="stylesheet" href="/styles/screen.css" type="text/css" media="screen" />');
		}
		
		//echo('<link rel="stylesheet" href="/styles/screen.css" type="text/css" media="screen" />');
	?>
	
	
</head>
<body>
<div id="box">
	<div id="top">
		<div id="global_nav">
			
			<?php include('header_nav.inc.php'); ?>

    		<div class="search">
      <!-- <form style="padding:0px;" action="" id="search_form" method="get">
        <input type="text" onblur="if (this.value == '') {this.value = 'Type and hit enter to search';}" onfocus="if (this.value == 'Type and hit enter to search') {this.value = '';}" id="s2" name="s2" value="Type and hit enter to search" class="search_input"/>
        <input type="hidden" value="Search" id="searchsubmit"/>
      </form> -->
    		</div>
  		</div>
  		
		<div id="header">
			<h1>
				<a href="/">Mt. Washington <br/>
				and Pairpoint Glass Society </a>
	  		</h1>
    		<em>Appreciating a National Treasure</em> 
		</div>
		
  		<div id="top_article">
			<a href="/" rel="bookmark" title="Permanent Link to Mt. Washington and Pairpoint Glass Society Gallery">
				<img src="images/logo.jpg" alt="Mt. Washington/Pairpoint Glass Logos" id="leadpic" />
			</a> 
			<!-- <small>Joe heyman </small> -->
			<a href="/"><big>Mt. Washington &amp; Pairpoint Glass</big></a>
			
			<p>The <strong>Mt. Washington and Pairpoint Glass Society</strong> focuses on Mt. Washington Glassworks and its sucessors, the Pairpoint Companies who began
			manufacturing fine art glass in the mid-19<sup>th</sup> century. The Society <strong>promotes connoisseurship, study, research, history and preservation</strong> of the art glass wares made by Mt. Washington and Pairpoint.&hellip;</p>
			
			<div class="featuredbar"><a href="/">View the galleries </a> </div>
  		</div>
		
  		<br style="clear:both;" />
		
	</div>
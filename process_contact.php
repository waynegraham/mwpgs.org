<?php
	require_once('config/config.inc.php');
	require_once('lib/recaptchalib.php');
	
	if(sizeof($_POST) == 0){
		header("Location: contact.php");
	}
	
	$resp = recaptcha_check_answer($captcha_private, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);
	
	if($resp->is_valid){
		$message = wordwrap($_POST['comments']);
		
		$headers = "From: " . $_POST['email'] . "\r\n" .
			"Content-type: text/html; charset=iso-8859-1 " . "\n";
			'X-Mailer: PHP/' . phpversion() . "\n\n";
		
		mail("mwpgsociety@gmail.com", "MWPGS Feedback", $message, $headers);
		
		header("Location: thanks.php");
	}else {
		$message = urlencode("The reCAPTCHA wasn't entered correctly.");
		header("Location: contact.php?message=" . $message . "&email=" . $_POST['email'] . "&name=" . $_POST['name'] . "&comments=" . $_POST['comments']);
	}
	
	include('includes/header.inc.php');
?>

<div id="bgbox">

		<div id="content">

			<div class="entry">
			
			<?php 
				if(strlen($message) > 0){
					echo('
					<h5>Contact us</h5>
            
				<div class="line"></div>
				
				<form method="post" name="contact" id="contact" action="process_contact.php">
					<label for="email">Email Address:</label>
					<input type="text" name="email" id="email" />
					
					<br/>
					
					<label for="name">Your Name:</label>
					<input type="text" name="name" id="name" />
					
					<br/>
					<label for="comments">Comments:</label><br/>
					<textarea rows="10" cols="70" name="comments" id="comments"></textarea>
					
					<br/>
					<?php echo(recaptcha_get_html($captcha_public)) ?>
					
					<br/>
					<input type="submit" value="Send" />
				</form>
					');
				} else{
					echo('<h5>Thanks</h5>
						<p>Thanks for the feedback. Someone will get in touch with you shortly.</p>
					');
					
					
				}
				
				
			?>
		
				
			</div>
            
			<div class="left">		
				<div class="post" id="post-12" style="">
				
					<h2><a href="#" rel="bookmark" title="link title">top level info </a></h2>
					
					<small><abbr title="2008-02-10T07:45:36+0300">March 6, 2008</abbr> <!-- by admin --></small>

                	<div class="clear"></div>
			
					<p>This could be a place to put some important content if you so choose. </p>
					<div class="clear"></div>
				</div>	
			</div>
			
			<div class="right">		
				<div class="post">
				<h2><a href="#">more info </a></h2>
				
				<div class="clear"></div>
				
				<p>for a second item </p>
				<div class="clear"></div>
			</div>	
		
		</div>
		
		<div class="clear"></div>
		
		<div class="clear"></div>
		<div style="clear:both"></div>
		
		
		<div class="navigation">
			
	</div>
</div>
<?php include('includes/sidebar.inc.php'); ?>

<?php include('includes/footer.inc.php') ?>
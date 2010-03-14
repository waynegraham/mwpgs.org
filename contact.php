<?php
	require_once('config/config.inc.php');
	
	$page = "contact";
	
	require_once('lib/recaptchalib.php');
	
	// if post, check form fields
	
	if(!isset ($_GET['email'])) { 
		$_GET['email'] = ''; 
	}
	if(!isset ($_GET['name'])) { $_GET['name'] = ''; }
	if(!isset ($_GET['comments'])) { $_GET['comments'] = ''; }
	
//	if($_POST){
//		$resp = recaptcha_check_answer($captcha_private,
//			$_SERVER["REMOTE_ADDR"],
//			$_POST["recaptcha_challenge_field"],
//			$_POST["recaptcha_response_field"]);
//			
//		if(!$resp->is_valid){
//			die("the reCAPTCHA wasn't entered correctly. Go back and try again." . 
//				"(reCAPTCHA said: " . $resp->error . ")");
//			
//		} else {
//			// email
//		}
//	}
	
	include('includes/header.inc.php');
?>
	
	<div id="bgbox">

		<div id="content">

			<div class="entry">
		
				<h5>Contact us</h5>
            
				<div class="line"></div>
				
				<?php 
				if (isset($_GET['message'])){
					echo('<h4 class="error">' . $_GET['message'] . '</h4>');
				}
				?>
				
				<form method="post" name="contact" id="contact" action="process_contact.php">
					<label for="email">Email Address:</label>
					<input type="text" name="email" id="email" value="<?php echo($_GET['email']); ?>" />
					
					<br/>
					
					<label for="name">Your Name:</label>
					<input type="text" name="name" id="name" value="<?php echo($_GET['name']); ?>" />
					
					<br/>
					<label for="comments">Comments:</label><br/>
					<textarea rows="10" cols="70" name="comments" id="comments"><?php echo($_GET['comments']); ?>"</textarea>
					
					<br/>
					<?php echo(recaptcha_get_html($captcha_public)) ?>
					
					<br/>
					<input type="submit" value="Send" />
				</form>
			</div>
            
			<?php include('includes/info.inc.php'); ?>
		
		</div>
		
		<div class="clear"></div>
		
		<div class="clear"></div>
		<div style="clear:both"></div>
		
		
		<div class="navigation">
			
	</div>
</div>
<?php include('includes/sidebar.inc.php'); ?>

<?php include('includes/footer.inc.php') ?>

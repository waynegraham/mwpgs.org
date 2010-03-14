<?
	if(!isset($page)){
		$page = "home";
	}
		
	
?>

<ul class="nav">
	<li><a title="Home" href="/"<?php if($page == "home")echo (' class="active"'); ?>>Home</a></li>
	<li><a title="Membership" href="/membership.php"<?php if($page == "membership")echo (' class="active"'); ?>>Membership</a></li>
	<li><a title="History" href="/history.php"<?php if($page == "history")echo ('class="active"'); ?>>History</a></li>
	<li><a title="Annual Seminar" href="/seminar.php"<?php if($page == "seminar")echo ('class="active"'); ?>>Annual Seminar </a></li>
	<li><a title="Publications" href="/publications.php"<?php if($page == "publications")echo ('class="active"'); ?>>Publications</a></li>
  	<li><a title="Gallery" href="/gallery.php"<?php if($page == "gallery")echo ('class="active"'); ?>>Gallery</a></li> 
  	<li><a title="Contact" href="/contact.php"<?php if($page == "contact")echo ('class="active"'); ?>>Contact</a></li>
</ul>
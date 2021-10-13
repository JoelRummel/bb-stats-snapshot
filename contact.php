<!DOCTYPE html>
<html>
<head>
	<?php include 'headcode.php'; ?>
	<title>Contact - BayStats</title>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<h2>Contact</h2>
	<p>Questions? Comments? Concerns? Reach out to me and I'll respond to you as fast as I can.</p>
	<p>There are three main options for contacting me:</p>
	<ul>
		<li>If you have a Reddit account, send me a message at <a href="https://www.reddit.com/message/compose/?to=epicular">u/Epicular</a>.</li>
		<li>If you have an account on the Battle Bay Forums, you can send me a message at <a href="https://forum.battlebay.net/members/epicular.5879/">my profile</a>.</li>
		<li>Alternatively, you can email me - complete the reCAPTCHA below and hit submit in order to get the email address.</li>
	</ul>
	
	<form method="post" action="contact.php">
		<div class="g-recaptcha" data-sitekey="6Le4_GYUAAAAAFk7KUJdsjtJr_Kd8nrEAb4yZkbh"></div>
		<input type="submit" name="submit" value="Get Email Address">
	</form>
	
	<?php
		if(isset($_POST['g-recaptcha-response'])){
			$captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
			echo "<p style='color:red;'>Please complete the reCAPTCHA to get the email address</p>";
		} else {
			$secretKey = "6Le4_GYUAAAAACpIKXHHhWLsJfyAsVRMEAiYHa1g";
			$ip = $_SERVER['REMOTE_ADDR'];
			$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
			$responseKeys = json_decode($response,true);
			if(intval($responseKeys["success"]) !== 1) {
				echo "<p style='color:red;'>Error: You appear to be a bot!</p>";
			} else {
				echo "<h3 style='color:green;'>Contact Email Address: <a style='color:green;' href='mailto:contact@bb-stats.com'>contact@bb-stats.com</a></h3>";
			}
		}
	?>
	
	<?php include 'footer.php'; ?>
</body>
</html>
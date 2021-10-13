<!DOCTYPE html>
<html>
<head>
	<?php include 'headcode.php'; ?>
	<title>Mailing List - BayStats</title>
	<?php 
		$msg = "";
		$msgGood = false;
		if (isset($_POST["email"])) {
			//Login to MySQL database
			$con = mysqli_connect("localhost", "refbias2_user","Mfbztn&$9656", "refbias2_mailinglist");
			$email = $_POST["email"];
			
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			//Validate e-mail
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$msg = "That's not a valid email address! Please try again.";
			} else {
				if ($_POST["action"] == "subscribe") {
					//SUBSCRIBE
					$stmt = $con->prepare("SELECT `id` FROM `emails` WHERE `email` = ?");
					$stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'
					$stmt->execute();

					$result = $stmt->bind_result($id);
					$found = false;
					while ($stmt->fetch()) {
						$found = true;
					}
					if ($found == true) {
						//DO ERROR STATEMENT
						$msg = "This email address is already subscribed!";
					} else {
						//Success! Plug in the email.
						if ($_POST["option"] == "yes") {
							$more = 1;
						} else {
							$more = 0;
						}
						$stmt = $con->prepare("INSERT INTO `emails` (`email`,`moreupdates`) VALUES (?,?)");
						$stmt->bind_param('si',$email,$more);
						$stmt->execute();
						
						$msg = "Success! You will now receive emails about BayStats.";
						$msgGood = true;
					}
					//while ($row = $result->fetch_assoc()) {
						// do something with $row
					//}
				} else {
					//UNSUBSCRIBE
					$stmt = $con->prepare("SELECT `id` FROM `emails` WHERE `email` = ?");
					$stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'
					$stmt->execute();

					$result = $stmt->bind_result($id);
					$found = false;
					while ($stmt->fetch()) {
						$found = true;
					}
					if ($found == true) {
						//Success! Kick that guy out
						mysqli_query($con,"DELETE FROM `emails` WHERE `id`=".$id);
						//SHOW SUCCESS MESSAGE
						$msg = "Successfully unsubscribed.";
						$msgGood = true;
					} else {
						//SHOW ERROR - EMAIL NOT FOUND
						$msg = "No action taken - the email address wasn't found on our list.";
					}
				}
			}
		}
	?>
	
	<style>
		table {border:none;}
		tr {border:none;}
		td {
			border:none;
			padding-top:5px;
			padding-bottom:5px;
		}
		.boxy {
			display:inline-block;
			width:49%;
		}
		@media screen and (max-width:600px) {
			.boxy {
				width:100%;
			}
			#boxy2 {
				border-top:1px solid black;
				margin-top:20px;
			}
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>

	<?php 
	
		if ($msg != "") {
			$class = "badthing";
			if ($msgGood == true) {$class = "goodthing";}
			echo "
				<div class='".$class."'>".$msg."</div>
			";
		}
	
	?>
	
	<h2>Mailing List</h2>
	<p>Get email updates with each new blog post! Or just get emails for website updates - that's cool too. We promise that your
	email address is safe with us, and it won't be seen by any third parties.</p>
	<div class="boxy">
		<h3>Subscribe!</h3>
		<form method="post" action="mailinglist.php">
			Email Address: <input type="text" name="email"><br><br>
			<table>
				<tr><td>
				<input type="radio" name="option" value="yes" checked></td>
				<td>Send me emails for every new blog post (includes website updates)</td></tr>
				<tr><td>
				<input type="radio" name="option" value="no"></td>
				<td>Send me emails for important website updates only</td></tr>
			</table>
			<input type="hidden" name="action" value="subscribe">
			<input type="submit" value="Subscribe!">
		</form>
	</div>
	<div class="boxy" id="boxy2">
		<h3>Unsubscribe</h3>
		<form method="post" action="mailinglist.php">
			Email Address: <input type="text" name="email"><br><br>
			<input type="hidden" name="action" value="unsubscribe">
			<input type="submit" value="Unsubscribe">
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
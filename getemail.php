<!DOCTYPE html>
<html>
<head>
	<?php
	
	error_reporting(-1);
	ini_set('display_errors', 'On');
	set_error_handler("var_dump");
	
	$to = 'darthcyderfu2@gmail.com';

	$subject = "New BayStats Blog Post - The Interceptor has arrived!";

	$headers = "From: BayStats Mailing List <Do_Not_Reply@bb-stats.com>\n";
	$headers .= "Reply-To: BayStats <contact@bb-stats.com>\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\n";

	$message = "
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans' rel='stylesheet'>
	
		<div style=\"font-family: 'Open Sans', sans-serif;margin-left:6%;margin-right:6%;\">
		
		<h3 style=\"display:inline-block;font-family: 'Montserrat', sans-serif \">The Interceptor has arrived; how is it faring in the competitive metagame?</h3><span style='color:gray;font-size:14px;margin-left:10px;'>October 29, 2018</span>
		
		<p>For the first time in the game's history, a new ship has been added to Battle Bay. 
		Seeing as how we're moving from five ships to six, this has the potential to shake the meta 
		in ways we've never seen before.</p>

		<p>However, if any such \"shake\" has occurred yet, it's been relatively suppressed. 
		Over the past few days, the Interceptor's use rate in the Nightmare League has been stabilizing 
		around 4%, which is in 5th place - just above Defender.</p>

		<p>That's certainly not bad, given that many players may not yet have had enough of a chance to 
		sufficiently upgrade their Interceptors. But during the Interceptor CTF Event, we saw a peak 
		Interceptor use rate of 12.4%, which means that roughly two-thirds of the players who had unlocked 
		it have since shelved it for regular elimination play. While it's impossible to tell how much of 
		that drop is a direct result of underleveled Interceptors, it's also giving us some sort of a window 
		into the overall \"balanced-ness\" of the brand-new ship.</p>

		<p>In order to maintain relative balance within the realm of ships, 5th place out of 6 is probably 
		the perfect place for the Interceptor to land after its first few weeks of availability. Given the 
		consistent amount of usage that it's currently seeing in Nightmare League, it's clearly a 
		competitively viable ship - and I'll bet that, after a couple more opportunities for players to 
		collect ship pieces, it'll find itself hovering around 2nd or 3rd place.</p>

		<p>In terms of weapons, the Interceptor's presence hasn't exactly revolutionized any offensive 
		strategies - rather, it has strengthened the existing Fire-Cannon meta. Explosive Cannon and Blast 
		Cannon remain extremely popular choices for weapons, and are constantly being trailed by Flare Gun. 
		Fire Bomb still stands as the number one choice for a mortar-style weapon by a very large margin. 
		Most notably, Grenade Launcher has found a home as the most popular weapon for Interceptors, bringing 
		it to the impressive position of 2nd-most-popular weapon. Meanwhile, the rest of the mortar family, 
		finding no new targets in Interceptor players, continue to occupy the bottom of the usage charts, 
		alongside the poor Gatling Gun.</p>

		<p>What about yellow items? Nitro has seen a healthy boost in usage recently, in part due to the fact 
		that virtually every Interceptor player has chosen to use it for their single yellow slot. It also helps 
		that, with the reinforced presence of fast-moving cannon projectiles and grenades, players are valuing 
		more the ability to quickly jump away from incoming threats.</p>

		<p>I have no doubt that more trends and insights will present themselves in the future as the Interceptor is 
		given more time to settle!</p>

		<p><b>Bonus Website Update!</b></p>

		<p>If you've been paying very close attention lately, you'll notice that I've been regularly mentioning 
		usage-over-time charts, and how they'll be on the website soon. You'll also notice that I've been saying 
		that for months now. Don't worry, I promise that we will have historical usage charts within the next week! 
		I've been holding off on releasing this new feature because I want to release it alongside another new 
		feature that I'm excited about - the \"Popular Loadouts\" page!</p>

		<p>Basically, the \"Popular Loadouts\" page will be a fourth page of stats that list frequently re-occurring 
		combinations of red, yellow, blue, and green items for each of the six ships. For example, in the latest 
		snapshot, 33% of Speeders ran an Explosive Cannon/Flare Gun combo... 64% of Speeders ran a yellow-item set 
		consisting of Nitro + Overboost + Tesla Shield... and 76% of Speeders ran a blue-item set of Big Shield + 
		Turbo + Bandage!</p>
				
		<a href='https://bb-stats.com' style='color:black;text-decoration:none;'>
		<div style='display:inline-block;background-color:lightblue;padding:8px;margin-top:20px;border-radius:5px;'>BayStats Home</div>
		</a>
		
		</div>
		
		<div style='background-color:#2f2f2f;color:gray;padding-top:10px;padding-bottom:10px;margin-top:20px;font-size:14px;padding-left:5px;padding-right:5px;'>
		You are receiving this email because this email address is subscribed to the BayStats mailing list.<br>
		Don't want any more emails? <a href='https://bb-stats.com/mailinglist.php'>Unsubscribe</a>
		</div>
	";

	mail($to, $subject, $message, $headers);
	
	?>
</head>
<body>
	SENDING EMAIL TO <?php echo $to; ?>
</body>
</html>
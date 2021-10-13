<!DOCTYPE html>
<html>
<head>
	<?php include 'headcode.php'; ?>
	<title>Frequently Asked Questions - BayStats</title>
	<style>
	h3 {margin-top:30px;}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>

	<h2>Frequently Asked Questions</h2>
	<p>Got any questions that aren't on this page? Head over to the <a href="contact.php">Contact page</a> and I'll respond as fast as I can.</p>
	
	<h3>What players are you collecting data from?</h3>
	<p>All data comes from Nightmare League players who are in one of the world's top guilds. This is because 
	the in-game Guilds screen provides the greatest dataset available for top players. Each dataset includes more than 200 players.</p>
	
	<h3>Hey, this data doesn't seem accurate at all. It says Item X is the least used weapon, but I see Item X being used all the time!</h3>
	<p>Read the question directly above. The metagame for the Nightmare League is different from that of lower-level areas.
		It could be described as an 'exaggerated' version of the meta, where popular items are used even more, and less-popular items are used even less.
		For this reason, Nightmare League data can actually be better for providing insight on the strength of different items.</p>
	
	<h3>Why is the data only from Nightmare League players?</h3>
	<p>Because this is the only consistent set of player profiles that can be accessed through Battle Bay. All data collection
		occurs within an instance of the app, so it is limited to what the app allows.</p>

	<h3>How can an item have a use rate higher than 100%?</h3>
	<p>The percentage is calculated through simply dividing the total number of occurrences of an item within the dataset 
		by the total number of players in the dataset. This means that, if every player equips two Small Shields, then the use rate
		for Small Shields will be 200%.</p>
		
	<h3>I used all the most popular weapons and items, but I still keep losing. What gives?</h3>
	<p>Popularity data, while potentially very insightful, is not necessarily indicative of which items are
		"overpowered", and of which ones aren't. Ultimately, a player's success with a loadout depends far more on their skill level than on
		their specific choices for the items within it.</p>
		
	<h3>How are you monetizing this website?</h3>
	<p>There is no monetization occurring. I am personally covering the expenses of maintaining this website,
		and will continue to do so for the forseeable future.</p>
	
	<h3>How exactly is the data being collected?</h3>
	<p>I won't disclose the exact methodology. It is 90% automated - I have to explicitly initialize the 
	process daily. If, someday, I am unable to do this for whatever reason, then the stats will 
	become outdated until I can fix the issue. Luckily I don't forsee this becoming a major problem.</p>
	
	<h3>More to come...</h3>
	
	<?php include 'footer.php'; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Stats - BayStats</title>
	<?php include 'headcode.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<p style='text-align:center;'>Choose a set of stats!</p>
	<div style="display:flex;justify-content:space-evenly;flex-wrap:wrap;">
	
		<a href="itemstats.php" class="Delink">
		<div class="StatLinkBox">
			<img src="images/Items.png" style="width:350px;">
			<h3 style="text-align:center;">ITEMS</h3>
			<p style="text-align:center;">Overall, which items are people using?</p>
		</div>
		</a>
		
		<a href="shipstats.php" class="Delink">
		<div class="StatLinkBox">
			<img src="images/Ships.png" style="width:350px;margin-top:55px;">
			<h3 style="text-align:center;">SHIPS</h3>
			<p style="text-align:center;">Which ships are people using?</p>
		</div>
		</a>
		
		<a href="itembyship.php" class="Delink">
		<div class="StatLinkBox">
			<img src="images/ItemByShip.png" style="width:200px;display:block;margin-left:auto;margin-right:auto;margin-top:13px;">
			<h3 style="text-align:center;">ITEMS BY SHIP TYPE</h3>
			<p style="text-align:center;">Which items do each ship use the most?</p>
		</div>
		</a>
		
		<a href="popularloadouts.php" class="Delink">
		<div class="StatLinkBox">
			<img src="images/Loadout.png" style="border:2px solid black; border-radius:15px; width:275px;display:block;margin-left:auto;margin-right:auto;margin-top:13px;">
			<h3 style="text-align:center;">POPULAR LOADOUTS</h3>
			<p style="text-align:center;">What combinations of items are most popular?</p>
		</div>
		</a>
		
	</div>
	
	<?php include 'footer.php'; ?>
</body>
</html>
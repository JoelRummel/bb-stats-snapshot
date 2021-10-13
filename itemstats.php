<!DOCTYPE html>
<html>
<head>
	<title>Item Stats - BayStats</title>
	<?php include 'headcode.php'; ?>
	<style>
	img {
		vertical-align:middle;
		margin: 5px;
	}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Item Stats</h2>
	<p>Here, you can find the latest use rates for each category of item. The percentages represent how many people use the item on their ship.
		Yellow items only count players who are using ships that can equip them (Speeders, Enforcers, and, with the exception of Frost Launcher and Tesla Shield, Fixers). Green items only count players
		using Fixers. <i>Reminder: These stats are from Nightmare League players only!</i></p>
	<p><b>Click on an item to view more stats about it!</b></p>
	
	<div id="T_Outer">
	<div id="T_Biggie">
	<table>
		<tr>
			<th>#</th>
			<th>item</th>
			<th></th>
			<th>rate</th>
		</tr>
		<?php
		for ($i = 1; $i <= 20; $i ++) {
			echo "
			<tr class='RowLink' id='RL_Red_".$i."' onclick=\"document.location = 'item.php?i=Sniper Cannon';\">
				<td>".$i.".</td>
				<td id='NAME_Red_".$i."'></td>
				<td><img id='IMG_Red_".$i."' src='' style='width:50px;'></td>
				<td id='RATE_Red_".$i."'></td>
			</tr>
			";
		}
		?>
	</table>
	</div>
	
	<div id="T_Three">
	<table>
		<tr>
			<th>#</th>
			<th>item</th>
			<th></th>
			<th>rate</th>
		</tr>
		<?php 
		for ($i = 1; $i <= 4; $i ++) {
			echo "
			<tr class='RowLink' id='RL_Blue_".$i."' onclick=\"document.location = 'item.php?i=Standard Shield';\">
				<td>".$i.".</td>
				<td id='NAME_Blue_".$i."'></td>
				<td><img id='IMG_Blue_".$i."' src='' style='width:50px;'></td>
				<td id='RATE_Blue_".$i."'></td>
			</tr>
			";
		}
		?>
	</table>
	
	<table>
		<tr>
			<th>#</th>
			<th>item</th>
			<th></th>
			<th>rate</th>
		</tr>
		<?php 
		for ($i = 1; $i <= 6; $i ++) {
			echo "
			<tr class='RowLink' id='RL_Yellow_".$i."' onclick=\"document.location = 'item.php?i=Overboost';\">
				<td>".$i.".</td>
				<td id='NAME_Yellow_".$i."'></td>
				<td><img id='IMG_Yellow_".$i."' src='' style='width:50px;'></td>
				<td id='RATE_Yellow_".$i."'></td>
			</tr>
			";
		}
		?>
	</table>
	
	<table>
		<tr>
			<th>#</th>
			<th>item</th>
			<th></th>
			<th>rate</th>
		</tr>
		<?php 
		for ($i = 1; $i <= 4; $i ++) {
			echo "
			<tr class='RowLink' id='RL_Green_".$i."' onclick=\"document.location = 'item.php?i=Repair Bolt';\">
				<td>".$i.".</td>
				<td id='NAME_Green_".$i."'></td>
				<td><img id='IMG_Green_".$i."' src='' style='width:50px;'></td>
				<td id='RATE_Green_".$i."'></td>
			</tr>
			";
		}
		?>
	</table>
	</div>
	</div>
	<?php include 'footer.php'; ?>
	<script src="js_itemstats.php"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ship Stats - BayStats</title>
	<?php include 'headcode.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<h2>Ship Stats</h2>
	<p>Here, you can find what percentage of players use each ship. <i>Reminder: These stats are from Nightmare League players only!</i></p>
	<p><b>CLICK ON A SHIP TO VIEW A GRAPH OF ITS USAGE OVER TIME!</b></p>
	
	<div style="display:flex; justify-content:center;">
	<table>
		<tr>
			<th>#</th>
			<th>ship</th>
			<th></th>
			<th>rate</th>
		</tr>
		<?php 
		for ($i=1; $i<=7; $i++) {
			echo "
			<tr class='RowLink' id='LINK_".$i."' onclick=\"document.location = '#'\">
				<td>".$i.".</td>
				<td id='NAME_".$i."'></td>
				<td><img id='IMG_".$i."' src='' style='width:75px;'></td>
				<td id='RATE_".$i."'>0%</td>
			</tr>";
		}
		?>
		
	</table>
	</div>
	
	<?php include 'footer.php'; ?>
	<script src="js_shipstats.php"></script>
</body>
</html>
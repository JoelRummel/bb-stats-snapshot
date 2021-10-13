<!DOCTYPE html>
<html>
<head>
	<title>Popular Loadouts - BayStats</title>
	<?php include 'headcode.php'; ?>
	<style>
	img {
		vertical-align:middle;
		margin: 2px;
	}
	table {
		border: 2px solid gray;
	}
	td {
		padding-top:5px;
		padding-bottom:5px;
		border-top:0px;
		border-bottom:0px;
	}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Popular Loadouts</h2>
	<p>This page shows which sets of items are used together most often for each ship. If a ship doesn't show 
	a set of items for a certain color, that means that no single loadout appeared more than once in the dataset.
	<i>Reminder: These stats are from Nightmare League players only!</i></p>
	
	<div id="ALL_TABLES">
	
	<?php 
	 $ships = array("Shooter","Defender","Speeder","Enforcer","Fixer","Interceptor","Reaper");
	 foreach($ships as $ship) {
	 echo "
	 <div class='USEBOX' id='UB_".$ship."'>
		<a href='ship.php?s=".$ship."' class='Delink'>
	 	<div class='UB_Header RowLink'>
			<b style='margin-left:5px;'>".strtoupper($ship)."</b>
			<img src='images/ships/".$ship."MK6.png' class='UB_img'>
		</div>
		</a>
		<table id='T_".$ship."'>
		</table>
	 </div>";
	 }
	?>
	
	</div>
	<?php include 'footer.php'; ?>
	<script src="js_popularloadouts.php"></script>
</body>
</html>
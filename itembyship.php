<!DOCTYPE html>
<html>
<head>
	<title>Item Stats By Ship - BayStats</title>
	<?php include 'headcode.php'; ?>
	<style>
	img {
		vertical-align:middle;
		margin: 5px;
	}
	table {
		border: 2px solid gray;
	}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Item Stats By Ship Type</h2>
	<p>This page shows the popularity of items for each individual ship. If an item doesn't appear on a list,
	then that item has a 0% use rate for that ship. <i>Reminder: These stats are from Nightmare League players only!</i></p>
	<p><b>Click on an item to view more stats about it!</b></p>
	
	<div id="ALL_TABLES">
	
	<div class="USEBOX" id="UB_Shooter">
		<a href="ship.php?s=Shooter" class="Delink">
		<div class="UB_Header RowLink">
			<b>SHOOTER</b>
			<img src='images/ships/ShooterMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Shooter">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Defender">
		<a href="ship.php?s=Defender" class="Delink">
		<div class="UB_Header RowLink">
			<b>DEFENDER</b>
			<img src='images/ships/DefenderMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Defender">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Speeder">
		<a href="ship.php?s=Speeder" class="Delink">
		<div class="UB_Header RowLink">
			<b>SPEEDER</b>
			<img src='images/ships/SpeederMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Speeder">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Enforcer">
		<a href="ship.php?s=Enforcer" class="Delink">
		<div class="UB_Header RowLink">
			<b>ENFORCER</b>
			<img src='images/ships/EnforcerMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Enforcer">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Fixer">
		<a href="ship.php?s=Fixer" class="Delink">
		<div class="UB_Header RowLink">
			<b>FIXER</b>
			<img src='images/ships/FixerMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Fixer">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Interceptor">
		<a href="ship.php?s=Interceptor" class="Delink">
		<div class="UB_Header RowLink">
			<b>INTERCEPTOR</b>
			<img src='images/ships/InterceptorMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Interceptor">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	<div class="USEBOX" id="UB_Reaper">
		<a href="ship.php?s=Reaper" class="Delink">
		<div class="UB_Header RowLink">
			<b>REAPER</b>
			<img src='images/ships/ReaperMK6.png' class='UB_img'>
		</div>
		</a>
		<table id="T_Reaper">
			<tr>
				<th>#</th>
				<th>item</th>
				<th></th>
				<th>rate</th>
			</tr>
		</table>
	</div>
	
	</div>
	<?php include 'footer.php'; ?>
	<script src="js_itembyship.php"></script>
</body>
</html>
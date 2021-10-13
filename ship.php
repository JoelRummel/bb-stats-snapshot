<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET["s"]; ?> - BayStats</title>
	<?php include 'headcode.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div id="ItemBox">
		<div>
			<img src='images/ships/<?php echo $_GET["s"]; ?>MK6.png' style='width:150px;'>
		</div>
		
		<div>
			<h3><?php echo $_GET["s"]; ?></h3>
			<p id='Description'><i>
			<?php
			switch ($_GET["s"]) {
				case "Shooter": $str="Armed to the teeth, Shooters are built to deal as much damage as possible. They're the most dangerous ships in the bay, and have enough space to carry weapons suitable for any combat range.";break;
				case "Speeder": $str="The speed queen of the bay, Speeder gets you where you want to go or away from the things you want to avoid. She excels in hit and run tactics and can get to the capture point before anyone else. Watch out for the mines because this baby has no brakes!"; break;
				case "Enforcer": $str="With a great balance between damage, defense and speed, Enforcer is the Jack of all trades. Easily the most agile war machine in the Bay. Superior turret speed and acceleration make this ship particularly effective in short range battles. Float like a feather, sting like a bee."; break;
				case "Defender": $str="Slow and steady wins the race. The Defender can take a boatload of punishment and still keep dishing out impressive damage. No need to chase your targets, let them come to you. Big, mean and beautiful."; break;
				case "Fixer": $str="The Fixer changes the way battles play out. Fast and durable, she moves around the battle, applying damage here, repairing an ally there. Keeps her teammates alive and annoys the ship out the unfriends. Everybody loves a good fixer."; break;
				case "Interceptor": $str="A sort of Shooter/Speeder hybrid, the Interceptor combines speed and power into one unit."; break;
				case "Reaper": $str="The Reaper is essentially a combat medic; while it can't heal as much as a Fixer, it can pose a real threat to the unfriends if left ignored."; break;
				default: $str="ERROR- this ship is not defined. Were you messing with the URL parameters?"; break;
			}
			echo $str;
			?>
			</i></p>
		</div>
		
		<div>
			<p><span id='I_UseRate' style='font-size:24px'>...</span> use rate</p>
			<p><span id='I_Rank' style='font-size:24px'>...</span> most used ship</p>
		</div>
	</div>
	
	<h2>Usage Over Time</h2>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<div id="chart_div"></div>
	
	<?php include 'footer.php'; ?>
	<script src="js_ship.php?s=<?php echo $_GET['s']; ?>"></script>
</body>
</html>
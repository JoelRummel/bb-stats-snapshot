<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET["i"]; ?> - BayStats</title>
	<?php include 'headcode.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div id="ItemBox">
		<div>
			<img src='images/items/fullsize/<?php echo str_replace(' ','',strtolower($_GET["i"])); ?>.png' style='width:150px;'>
		</div>
		
		<div>
			<h3><?php echo $_GET["i"]; ?></h3>
			<p id='Description'><i>
			<?php
			switch ($_GET["i"]) {
				case "Blast Cannon": $str="This mighty cannon deals impressive damage, but takes a while to reload!";break;
				case "Cannon": $str="The cannon is your trusted companion in battle. Use it well and you will be victorious!"; break;
				case "Sniper Cannon": $str="This formidable cannon fires accelerated projectiles with considerable range and accuracy."; break;
				case "Explosive Cannon": $str="This heavy duty cannon fires cannonballs that explode on impact, damaging nearby ships."; break;
				case "Carronade": $str="A glorious close range weapon that tears enemies apart with a barrage of projectiles."; break;
				case "Grenade Launcher": $str="Launches devastating short range explosives. Sometimes sets enemies on fire for 5 seconds."; break;
				case "Standard Mortar": $str="With great range and large blast radius, the mortar can obliterate entire teams from far away."; break;
				case "Long Range Mortar": $str="Launch bombs at your enemies from far, far away. The range on this thing is just ridiculous."; break;
				case "Ballpark Mortar": $str="The ballpark mortar has an enormous blast radius for when you really don't want to miss."; break;
				case "Big Berta": $str="This humongous mortar launches an equally gigantic mortar shell that explodes upon impact."; break;
				case "Big Torpedo": $str="Fires a torpedo that explodes upon impact with terrain or ship!"; break;
				case "Swift Torpedo": $str="Torpedoes are deadly, but slow. This one is kind of like that, but faster."; break;
				case "Triple Torpedo": $str="Launches three torpedoes in an arc."; break;
				case "Railgun": $str="The ultimate weapon in terms of damage per hit. Reloading takes a while though, so try not to miss."; break;
				case "Missile Launcher": $str="Fires a volley of violently explosive missiles. What more could you possibly want from a weapon?"; break;
				case "Mine": $str="Drops a sneaky explosive surprise for your enemies to stumble into."; break;
				case "Flare Gun": $str="A nasty piece of work that sets fire to an enemy, dealing damage over time."; break;
				case "Napalm Launcher": $str="Sets the water on fire, dealing damage over time to all enemies foolish enough to get close."; break;
				case "Fire Bomb": $str="Launches a massive incendiary bomb that detonates on impact, setting enemies on fire."; break;
				case "Gatling Gun": $str="A rapid fire cannon, shooting multiple projectiles in rapid succession."; break;
				case "Standard Shield": $str="A giant plate of armor to protect your ship. Grants extra hitpoints."; break;
				case "Big Shield": $str="A colossal slab of armor to protect your ship. Grants extra hitpoints."; break;
				case "Turbo": $str="Supercharges your ship's engine for increased speed."; break;
				case "Overboost": $str="Increases ship speed for a few seconds. Great for covering long distances."; break;
				case "Nitro": $str="Gives your ship a short burst of speed, jumping you out of harm's way."; break;
				case "Tesla Bolt": $str="Stuns target ship, rendering it completely useless for a couple of seconds."; break;
				case "Tesla Shield": $str="Shields you from airborne projectiles. Stuns you for 4 seconds when broken."; break;
				case "Frost Blaster": $str="Freezes target enemy ship, slowing it down to a crawl and making it an easy target."; break;
				case "Frost Launcher": $str="Launches a bolt that freezes all opponents in an area."; break;
				case "Repair Box Launcher": $str="Leaves boxes in the water for friendly ships to pick up and regain lost HP."; break;
				case "Repair Pulse": $str="Repairs friendly ships in a radius around your ship. Also repairs your own ship for 50% effect."; break;
				case "Duct Tape": $str="A roll of nigh indestructible adhesive tape to repair your ship when needed."; break;
				case "Repair Bolt": $str="Repairs a single friendly target."; break;
				case "Bandage": $str="Repairs your ship slowly over time. Increases health every 5 seconds."; break;
				default: $str="ERROR- this item is not defined. Were you messing with the URL parameters?"; break;
			}
			echo $str;
			?>
			</i></p>
		</div>
		
		<div>
			<p><span id='I_UseRate' style='font-size:24px'>...</span> use rate</p>
			<p><span id='I_Rank' style='font-size:24px'>...</span> most used 
			<?php 
			switch ($_GET["i"]) {
				case "Repair Pulse": case "Repair Bolt": case "Repair Box Launcher": case "Duct Tape":
					echo "green item (out of 4)"; break;
				case "Big Shield": case "Standard Shield": case "Turbo": case "Bandage": case "Gear Lube": case "Rudder":
					echo "blue item (out of 4)"; break;
				case "Overboost": case "Frost Launcher": case "Frost Blaster": case "Nitro": case "Tesla Bolt": case "Tesla Shield":
					echo "yellow item (out of 6)"; break;
				default:
					echo "red item (out of 20)"; break;
			}
			?></p>
		</div>
	</div>
	
	<h2>How Often Do Ships Use <?php echo $_GET["i"]; ?>?</h2>
	
	<div style='display:flex;flex-wrap:wrap;justify-content:center;'>
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/ShooterMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>SHOOTER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/DefenderMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>DEFENDER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/SpeederMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>SPEEDER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/EnforcerMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>ENFORCER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/FixerMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>FIXER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/InterceptorMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>INTERCEPTOR</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
		
		<div class='FavoriteShipBox'>
			<div class='FSB_Header'>
				<img src='images/ships/ReaperMK6.png' style='width:100px;align-self:center;'>
				<span style='width:100%;'>REAPER</span>
			</div>
			<table class='FSB_Table'>
				<tr><td>0% use rate</td></tr>
				<tr><td></td></tr>
			</table>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>
	<script src="js_item.php?i=<?php echo $_GET['i']; ?>"></script>
</body>
</html>
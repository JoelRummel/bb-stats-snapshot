<?php header("Content-Type: application/javascript"); ?>

var obj = JSON.parse('<?php include 'json-ships.txt'; ?>');
for (var i=1; i<=7; i++) {
	var ship;
	for (var j=0; j<obj.ships.length; j++) {
		if (obj.ships[j].rank == i) {
			ship = obj.ships[j];
			break;
		}
	}
	
	document.getElementById("NAME_"+i).innerHTML = ship.name;
	document.getElementById("IMG_"+i).src = "images/ships/"+ship.img;
	document.getElementById("RATE_"+i).innerHTML = (Math.round(ship.userate * 10) / 10) + "%";
	document.getElementById("LINK_"+i).setAttribute("onClick","document.location = 'ship.php?s="+ship.name+"';");
}
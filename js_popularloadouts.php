<?php header("Content-Type: application/javascript"); ?>

var obj = JSON.parse('<?php include 'json-loadouts.txt'; ?>');

for (var i=0; i<obj.ships.length; i++) {
	var table = document.getElementById("T_" + obj.ships[i].name);
	var anything = false;
	for (var j=0; j<4; j++) { // colors my dude
		var firstColor = false;
		var alternation = false;
		for (var l=1; l<=obj.ships[i].loadouts.length; l++) { // RANK
			for (var k=0; k<obj.ships[i].loadouts.length; k++) { // LOADOUTS
				//j: color, l: rank, k: loadout index
				if (obj.ships[i].loadouts[k].color == j && obj.ships[i].loadouts[k].rank == l) {
					anything = true;
					if (!firstColor) {
						var row = table.insertRow(-1);
						row.style = "background-color: gray;";
						var cell1 = row.insertCell(0);
						var cell2 = row.insertCell(1);
						var cell3 = row.insertCell(2);
						var color;
						switch (j) {case 0: color = "RED"; break;
						case 1: color = "YELLOW"; break; case 2: color = "BLUE"; break;
						case 3: color = "GREEN"; break;}
						cell1.innerHTML = "<b>Rank</b>";
						cell2.innerHTML = "<b>" + color + "</b>";
						cell2.style = "text-align:center; padding-top: 10px; padding-bottom: 10px;";
						cell3.innerHTML = "<b>Rate</b>";
						
						firstColor = true;
					}
					var row = table.insertRow(-1);
					if (alternation) {
						row.style = "background-color:lightgray;";
						alternation = false;
					} else alternation = true;
					var cell1 = row.insertCell(0);
					var cell2 = row.insertCell(1);
					var cell3 = row.insertCell(2);
					cell1.innerHTML = (l) + ".";
					cell2.innerHTML = "<div>";
					cell3.innerHTML = (Math.round(obj.ships[i].loadouts[k].percentage * 10) / 10) + "%";
					for (var m=0; m<obj.ships[i].loadouts[k].items.length; m++) {
						cell2.innerHTML += "<img style='width:35px;' src='images/items/"+obj.ships[i].loadouts[k].items[m].img+"'>";
					}
					cell2.innerHTML += "</div>";
				}
			}
		}
	}
	if (!anything) {
		var row = table.insertRow(-1);
		row.style = "color: red";
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		
		cell2.innerHTML = "NO LOADOUTS FOUND";
	}
}
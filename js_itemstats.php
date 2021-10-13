<?php header("Content-Type: application/javascript"); ?>

var obj = JSON.parse('<?php include 'json-items.txt'; ?>');
for (var i=0; i<=3; i++) { //COLORS
	for (var j=1; j<21; j++) { //RANKINGS
		for (var k=0; k<obj.items.length; k++) { //ITEMS
			if (obj.items[k].rank == j && obj.items[k].color == i) {
				var colorstring;
				switch (i) {
					case 0: colorstring = "Red"; break;
					case 1: colorstring = "Yellow"; break;
					case 2: colorstring = "Blue"; break;
					case 3: colorstring = "Green"; break;
				}
				var item = obj.items[k];
				
				//console.log("ID String: "+ ("NAME_"+colorstring+"_"+i));
				//console.log("Item Name: "+item.name);
				
				document.getElementById("NAME_"+colorstring+"_"+j).innerHTML = item.name;
				document.getElementById("IMG_"+colorstring+"_"+j).src = "images/items/"+item.img;
				document.getElementById("RATE_"+colorstring+"_"+j).innerHTML = (Math.round(item.userate * 10) / 10) + "%";
				document.getElementById("RL_"+colorstring+"_"+j).setAttribute("onClick","document.location = 'item.php?i="+item.name+"';");
			}
		}
	}
}
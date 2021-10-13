<?php header("Content-Type: application/javascript"); ?>

var obj = JSON.parse('<?php include 'json-itemsbyship.txt'; ?>');

for (var i=0; i<obj.ships.length; i++) { //i = ship selector. 0=shooter, 1=defender, 2=speeder, 3=enforcer, 4=fixer
	for (var j=0; j<obj.ships[i].items.length; j++) { //j = item selector, for items list within selected ship
		if (obj.ships[i].items[j].name != "NULL") {
			var table = document.getElementById("T_" + obj.ships[i].name);
			var row = table.insertRow(-1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			row.setAttribute('class','RowLink');
			row.setAttribute('onclick',"document.location = 'item.php?i="+obj.ships[i].items[j].name+"';");
			cell1.innerHTML = (j + 1) + ".";
			cell2.innerHTML = obj.ships[i].items[j].name;
			cell3.innerHTML = "<img style='width:50px;' src='images/items/"+obj.ships[i].items[j].img+"'>";
			cell4.innerHTML = (Math.round(obj.ships[i].items[j].userate * 10) / 10) + "%";
		} else break;
	}
}
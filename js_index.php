<?php header("Content-Type: application/javascript"); ?>

//var xmlhttp = new XMLHttpRequest();
//xmlhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse('<?php include 'json-items.txt'; ?>');//this.responseText);
		for (var i=0; i<obj.items.length; i++) {
			if (obj.items[i].rank == 1) {
				var endStr;
				switch (obj.items[i].color) {
					case 0: endStr = "Red"; break;
					case 1: endStr = "Yellow"; break;
					case 2: endStr = "Blue"; break;
					case 3: endStr = "Green"; break;
					case 4: endStr = "GETOUT"; break;
				}
				if (endStr == "GETOUT") break;
				document.getElementById("MU_" + endStr).innerHTML = "Most Used " + endStr + " Item: " + obj.items[i].name;
				document.getElementById("MUI_" + endStr).src = "images/items/"+obj.items[i].img;
				document.getElementById("MUU_" + endStr).innerHTML = (Math.round(obj.items[i].userate*10) / 10) + "%";
				document.getElementById("MUL_" + endStr).setAttribute("href","item.php?i="+obj.items[i].name);
			}
		}
		
		var sobj = JSON.parse('<?php include 'json-ships.txt'; ?>');
		for (var i=0; i<sobj.ships.length; i++) {
			if (sobj.ships[i].rank == 1) {
				document.getElementById("MU_Ship").innerHTML = "Most Used Ship: " + sobj.ships[i].name;
				document.getElementById("MUI_Ship").src = "images/ships/" + sobj.ships[i].img;
				document.getElementById("MUU_Ship").innerHTML = (Math.round(sobj.ships[i].userate*10) / 10) + "%";
				document.getElementById("MUS").setAttribute("href","ship.php?s="+sobj.ships[i].name);
				break;
			}
		}
//    }
//};
//xmlhttp.open("GET", "json-items.txt", true);
//xmlhttp.send();
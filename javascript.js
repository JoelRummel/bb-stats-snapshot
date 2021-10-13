var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
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
			}
		}
    }
};
xmlhttp.open("GET", "json-items.txt", true);
xmlhttp.send();
<?php header("Content-Type: application/javascript"); ?>

var obj1 = JSON.parse('<?php include 'json-itemsbyship.txt'; ?>');
var obj2 = JSON.parse('<?php include 'json-items.txt'; ?>');
var subjectName = '<?php echo $_GET["i"]; ?>';

var item;

for (var i=0; i<obj2.items.length; i++) {
	if (obj2.items[i].name == subjectName) {
		item = obj2.items[i];
		break;
	}
}

document.getElementById('I_UseRate').innerHTML = (Math.round(item.userate*10)/10) + "%";

var suffix;
switch (item.rank) {
	case 1: suffix = "st"; break;
	case 2: suffix = "nd"; break;
	case 3: suffix = "rd"; break;
	default: suffix = "th"; break;
}

document.getElementById('I_Rank').innerHTML = item.rank + suffix;

var x = document.getElementsByTagName("TD");

for (var i=0; i<7; i++) { //FOR SHIPS
	//we gotta find this item boi
	var index = -1;
	for (var j=0;j<obj1.ships[i].items.length; j++) {
		if (obj1.ships[i].items[j] != null) {
			if (obj1.ships[i].items[j].name == subjectName) {
				index = j;
				break;
			}
		}
	}
	if (index != -1) {
		x[i*2].innerHTML = (Math.round(obj1.ships[i].items[index].userate * 10) / 10) + "% use rate";
		var suffix;
		switch (obj1.ships[i].items[index].rank) {
			case 1: suffix = "st"; break;
			case 2: suffix = "nd"; break;
			case 3: suffix = "rd"; break;
			default: suffix = "th"; break;
		}
		x[(i*2) + 1].innerHTML = obj1.ships[i].items[index].rank + suffix + " most used item";
	}
}

if (item.color != 0 && item.color != 2 && item.color != 4) {
	var d = document.getElementsByClassName("FavoriteShipBox");
	if (item.color == 3) {
		for (var i=0; i<4; i++) {d[i].setAttribute("style","display:none");}
		d[5].setAttribute("style","display:none");
	} else {
		//Definitely a yellow item (color 1)
		d[0].setAttribute("style","display:none");
		d[1].setAttribute("style","display:none");
	}
}
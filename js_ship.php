<?php header("Content-Type: application/javascript"); ?>

var obj = JSON.parse('<?php include 'json-ships.txt'; ?>');
var subjectName = '<?php echo $_GET["s"]; ?>';

var ship;

for (var i=0; i<obj.ships.length; i++) {
	if (obj.ships[i].name == subjectName) {
		ship = obj.ships[i];
		break;
	}
}

document.getElementById('I_UseRate').innerHTML = (Math.round(ship.userate*10)/10) + "%";

var suffix;
switch (ship.rank) {
	case 1: suffix = "st"; break;
	case 2: suffix = "nd"; break;
	case 3: suffix = "rd"; break;
	default: suffix = "th"; break;
}

document.getElementById('I_Rank').innerHTML = ship.rank + suffix;

google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'E');
      data.addColumn('number', 'Use Rate');

      data.addRows([
		<?php include 'graphs/graphData'.$_GET["s"].'.txt';?>
      ]);
	  
	var columnRange = data.getColumnRange(1);
	var yMin = columnRange.min;
	var yMax = columnRange.max;
	if ((yMax - yMin) < 30) {
		//This will trip in most, if not all, graphs.
		//We must take corrective action. Question is: what?
		if (yMax < 25) {
			//Low-ish use rate: anchor graph to zero and open up the top
			yMin = 0;
			if (yMax < 15) yMax = 25; else yMax = 30;
		} else if (yMin > 60) {
			//High use rate. Open up the bottom
			yMin -= 20;
			yMax += 5; //basically just for padding
		} else {
			//Just add some padding.
			yMax += 10;
			yMin -= 10;
			if (yMin < 0) yMin = 0; //this should never trigger
		}
	} else {
		//uncomment these for just a touch of padding on graphs with wide changes
		yMin -= 5; if (yMin < 0) yMin = 0;
		yMax += 5;
	}

      var options = {
		height: 300,
        hAxis: {
          format: 'MMM d'
        },
        vAxis: {
          title: 'Use Rate (%)',
		  viewWindow: {
			min: yMin,
			max: yMax
		  }
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    
window.addEventListener('resize', function(event){
  drawBasic();
});
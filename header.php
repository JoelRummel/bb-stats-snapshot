<div id="Header">
<div id="Title">
<h1 style="
	font-family: 'Montserrat', sans-serif; display:table-cell; vertical-align:middle;
	">BayStats</h1>
<div style="display:table-cell;width:5%;"></div>
<div id="Subtitle"><i>
the ultimate guide to the Battle Bay metagame</i></div>
</div>
<div id="BannerContainer">
<img id="Banner" src="images/banner3.jpg">
</div>
<div id="Navbar">
<a class="Navlink" href="/"><div class="Button">HOME</div></a>

<div class="DROPDOWN">
	<a class="Navlink" href="stats.php"><div class="ButtonDropdown">STATS</div></a>
	<div class="Dropdown" style="min-width:180px;">
		<a href="popularloadouts.php" class="Droplink">Popular Loadouts <span style="font-size:10px;">(new!)</span></a>
		<a href="itemstats.php" class="Droplink">Item Stats</a>
		<a href="shipstats.php" class="Droplink">Ship Stats</a>
		<a href="itembyship.php" class="Droplink">Item Stats by Ship</a>
	</div>
</div>

<a class="Navlink" href="blog.php"><div class="Button">BLOG</div></a>

<div class="DROPDOWN">
	<a class="Navlink" href="about.php"><div class="ButtonDropdown">ABOUT</div>
	<div class="Dropdown" style="min-width:120px;">
		<a href="faq.php" class="Droplink">FAQ</a>
		<a href="contact.php" class="Droplink">Contact</a>
		<a href="mailinglist.php" class="Droplink">Mailing List</a>
	</div>
</div>

</div>

<div id="StatusBar">
	Database last updated 
	<?php 
	//Calculate hours passed. YAAY!
	$fh = fopen('dateupdated.txt','r');
	$line = fgets($fh);
	
	$t2 = StrToTime ( $line );
	$t1 = time();
	$diff = $t1 - $t2;
	$hours = ($diff / ( 60 * 60 )) + 1;
	if (floor($hours) == 0)
		echo "less than an hour";
	else if (floor($hours) > 200)
		echo "a long time";
	else
		echo "" . floor($hours) . " hours";
	fclose($fh);
	?> ago
</div>

</div>

<div id="Content">
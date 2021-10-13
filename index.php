<!DOCTYPE html>
<html>
<head>
	<title>BayStats Home</title>
	<?php include 'headcode.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Welcome to BayStats!</h2>
	<p>Here, you will discover statistics on Battle Bay's most popular ships and items. 
		The database is updated regularly, so you've always got a fresh look at the latest developments in the meta.</p>
	<p>Check out the <a href="stats.php">Stats page</a> for a detailed breakdown on what the best players in the game are using.
		The <a href="blog.php">Blog page</a> has info about the latest website updates, as well as written reports on the current state of the metagame.
		Head over to the <a href="about.php">About page</a> for more info about the site.</p>
	
	<a id="MUS" class="Delink" href="#">
	<div class="MostUsedBox" style="width:100%; display:flex; align-items:center; height:100px; border:1px solid gray;">
		<h3 id="MU_Ship" style="display:inline-block;padding-left:20px;width:75%;">Most Used Ship: ...</h3>
		<img id="MUI_Ship" style="margin-left: auto;height: 80px;margin-right: 10px;">
		<div style="display:inline-block;"><h3 id="MUU_Ship" style="display:inline-block;margin:0px;">...</h3> use rate</div>
	</div>
	
	<a id="MUL_Red" class="Delink" href="#">
	<div class="MostUsedBox">
		<h3 id="MU_Red" style="display:inline-block;padding-left:20px;width:60%;">Most Used Red Item: ...</h3>
		<img id="MUI_Red" style="margin-left: auto;width: 75px;margin-right: 10px;">
		<div style="display:inline-block;width:20%;"><h3 id="MUU_Red" style="display:inline-block;margin:0px;">...</h3> use rate</div>
	</div>
	</a>
	
	<a id="MUL_Blue" class="Delink" href="#">
	<div class="MostUsedBox" style="float:right;">
		<h3 id="MU_Blue" style="display:inline-block;padding-left:20px;width:60%;">Most Used Blue Item: ...</h3>
		<img id="MUI_Blue" style="margin-left: auto;width: 75px;margin-right: 10px;">
		<div style="display:inline-block;width:20%;"><h3 id="MUU_Blue" style="display:inline-block;margin:0px;">...</h3> use rate</div>
	</div>
	</a>
	
	<a id="MUL_Yellow" class="Delink" href="#">
	<div class="MostUsedBox">
		<h3 id="MU_Yellow" style="display:inline-block;padding-left:20px;width:60%;">Most Used Yellow Item: ...</h3>
		<img id="MUI_Yellow" style="margin-left: auto;width: 75px;margin-right: 10px;">
		<div style="display:inline-block;width:20%;"><h3 id="MUU_Yellow" style="display:inline-block;margin:0px;">...</h3> use rate</div>
	</div>
	</a>
	
	<a id="MUL_Green" class="Delink" href="#">
	<div class="MostUsedBox" style="float:right;">
		<h3 id="MU_Green" style="display:inline-block;padding-left:20px;width:60%;">Most Used Green Item: ...</h3>
		<img id="MUI_Green" style="margin-left: auto;width: 75px;margin-right: 10px;">
		<div style="display:inline-block;width:20%;"><h3 id="MUU_Green" style="display:inline-block;margin:0px;">...</h3> use rate</div>
	</div>
	</a>
	
	<h2 style="display:inline-block;width:100%;">Latest Blog Post</h2>
	<?php 
		$myfile = fopen("blogpostindex.txt", "r"); //or die("Unable to open file blogpostindex.txt for reading!");
		$index = (int)fgets($myfile);
		fclose($myfile);
		include 'blogpost'.$index.'.html'; 
	?>
	
	<?php include 'footer.php'; ?>
	
	<script src="js_index.php"></script>
</body>
</html>
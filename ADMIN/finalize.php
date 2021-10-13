<!DOCTYPE html>
<html>
<head>
<?php

$myfile = fopen("http://bb-stats.com/blogpostindex.txt", "r") or die("Unable to open file blogpostindex.txt for reading!");
$index = (int)fgets($myfile);
echo "INDEX: ".$index;
fclose($myfile);

// FTP PATH: ftp://refbias2:Mfbztn&$9656@bb-stats.com/public_html/bb-stats.com/blogpostindex.txt

$index ++;
echo " -- NEW INDEX: ".$index;
$myfile = fopen(realpath(__DIR__ . '/../blogpostindex.txt'), "w") or die("Unable to open file blogpostindex.txt for writing!");
fwrite($myfile,$index);
fclose($myfile);

$path = '../blogpost'.$index.'.html';
echo " -- attempting to write at: " . $path . "<br>";
$blogpost = fopen($path, "w") or die("Unable to open file blogpost for writing!");
$body = "<h3 style='display:inline-block;'>".$_POST["title"]."</h3><span class='BlogDate'>".$_POST["date"]."</span><br>".$_POST["content"];
fwrite($blogpost,$body);
fclose($blogpost);

// SEND EMAILS

$emails = array("joelrummel@yahoo.com","seelen.mark@gmail.com","zeppelinmue@gmail.com","darthcyderfu2@gmail.com");

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

foreach($emails as $email) {
	
	
	$to = $email;

	$subject = $_POST["title"];

	$headers = "From: BayStats Mailing List <Do_Not_Reply@bb-stats.com>\n";
	$headers .= "Reply-To: BayStats <contact@bb-stats.com>\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\n";

	$message = "
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans' rel='stylesheet'>
	
		<div style=\"font-family: 'Open Sans', sans-serif;margin-left:6%;margin-right:6%;\">
		
		<h3 style=\"display:inline-block; font-family: 'Montserrat', sans-serif; \">".$_POST["title"]."</h3><span style='color:gray;font-size:14px;margin-left:10px;'>".$_POST["date"]."</span>
		<br>
		".$_POST["content"]."
		<br>
		<a href='https://bb-stats.com' style='color:black;text-decoration:none;'>
		<div style='display:inline-block;background-color:lightblue;padding:8px;margin-top:20px;border-radius:5px;'>BayStats Home</div>
		</a>
		
		</div>
		
		<div style='background-color:#2f2f2f;color:gray;padding-top:10px;padding-bottom:10px;margin-top:20px;font-size:14px;padding-left:5px;padding-right:5px;'>
		You are receiving this email because this email address is subscribed to the BayStats mailing list.<br>
		Don't want any more emails? <a href='https://bb-stats.com/mailinglist.php'>Unsubscribe</a>
		</div>
	";

	echo "EMAILING TO ".$to."<br>";
	mail($to, $subject, $message, $headers);
}

?>
</head>
<body>

</body>
</html>
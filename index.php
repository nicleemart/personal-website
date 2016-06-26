<!DOCTYPE html>
<?php $thisPage="Index"; ?>
<?php $directory_prefix=""; ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Nikki</title>
			<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id= "flex-container">
			<div id="flex1">
				<?php include("header.php"); ?>
			</div>
			<div id="flex2">
				<?php include("navigation.php"); ?>
			</div>
			<div id="flex3">
				<h2><?php date_default_timezone_set("America/Chicago");
				$Hour = date("G");
				if ( $Hour >= 5 && $Hour <= 10 ) {
    			echo "Mornin', sunshine.";} 
    			else if ( $Hour >= 11 && $Hour <= 13 ) {
    			echo "Lunch break!";}
    			else if ( $Hour >= 13 && $Hour <= 18 ) {
    			echo "Why, hello there.";}
    			else if ( $Hour >= 19 || $Hour <= 4 ) {
    			echo "Meow.";} ?></h2>
			<p>My name is Nikki. I grew up in rural Southwestern Iowa and currently live in Omaha, Nebraska. I really enjoy traveling, especially abroad. In my free time, I like to cook, read, play video games and hang out with my dog.</p>
			</div>
		</div>
	</body>
</html>
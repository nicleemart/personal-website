<?php $thisPage="Index"; ?>
<?php $directory_prefix=""; ?>
<?php $theme="default"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nikki</title>
<?php if ($theme == "default"){ ?>
    <link rel="stylesheet" type="text/css" href="style.css">
<?php } else { ?>
    <link rel="stylesheet" type="text/css" href="alt-style.css">
<?php } ?>
	</head>
	<body>
	<div id= "flex-container">
		<div id="flex1">
		<?php include("header.php"); ?>
		</div>
	<div id="flex2">
<?php include("navigation.php"); ?>
	</div>
	</div>
	<div id="Greeting">
	<?php
date_default_timezone_set("America/Chicago");
$Hour = date("G");
if ( $Hour >= 5 && $Hour <= 10 ) {
    echo "Mornin', sunshine.";
} else if ( $Hour >= 11 && $Hour <= 18 ) {
    echo "Why, hello there.";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Meow.";
}
?>
</div>
			<h2>Hello!</h2>
			<p>My name is Nikki. I grew up in rural Southwestern Iowa and currently live in Omaha, Nebraska. I really enjoy traveling, especially abroad. In my free time, I like to cook, read, play video games and hang out with my dog.</p>
	</body>
</html>
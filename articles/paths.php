<!DOCTYPE html>
<?php $thisPage="Paths"; ?>
<?php $directory_prefix="../"; ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paths and PHP</title>
			<link href="../style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="flex-container">
			<div id="flex1">
				<?php include("../header.php"); ?>
			</div>
			<div id="flex2">
				<?php include("../navigation.php"); ?>
			</div>
			<div id="flex3">
				<h2>Paths and PHP</h2>
				<p>Within a website, links work differently depending on where they are on that site and the different paths used to access them. Given the file structure below, I will explore some of the different ways in which links work.<br><br>
				personal_website/<br>
				- index.php<br>
				- goals.php<br>
				- dog.php<br>
				- articles/<br>
  				- hacking.php<br>
  				- web.php<br><br>
  				If I want to link to my goals page from my home page, index.php, there are a few different ways I can access that link depending on what I want to do with it.<br><br>
  				&lt;a href="goals.php"&gt;Goals&lt;/a&gt;<br>
				&lt;a href="/goals.php"&gt;Goals&lt;/a&gt;<br>
				&lt;a href="../goals.php"&gt;Goals&lt;/a&gt;<br>
				&lt;a href="http://localhost:8888/personal_website/goals.php"&gt;Goals&lt;/a&gt;
				</p>
			</div>
		</div>
	</body>
</html>
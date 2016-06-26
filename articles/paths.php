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
				<h3>Links</h3>
				<p>Within a website, links work differently depending on where they are on that site and the different paths used to access them. Given the file structure below, I will explore some of the different ways in which links work.<br><br>
				personal_website/<br>
				- index.php<br>
				- goals.php<br>
				- dog.php<br>
				- articles/<br>
  				- hacking.php<br>
  				- web.php<br><br>
  				If I want to link to my goals page from my home page, index.php, there are a few different ways I can access that link depending on what I want to do with it.
  				<ol>
  				<li>&lt;a href="goals.php"&gt;Goals&lt;/a&gt;</li>
				<li>&lt;a href="/goals.php"&gt;Goals&lt;/a&gt;</li>
				<li>&lt;a href="../goals.php"&gt;Goals&lt;/a&gt;</li>
				<li>&lt;a href="http://localhost:8888/personal_website/goals.php"&gt;Goals&lt;/a&gt;</li>
				</ol>
				Numbers one through three are all known as relative paths. These paths will all take you somewhere relative to where you are currently located. From index, number one will take you to straight to the goals page, as it is located in the same folder. Number two has a forward slash &quot;/&quot;, which refers to the root directory in this case. Three is used to move up a folder. In the case of moving from the index, there is nowhere else to go. The fourth link is an absolute link, which you can tell by the &quot;http://&quot;. No matter what page you are on, number four will always take you to the goals.php through the local server.<br><br>
				I will now move to articles/hacking.php and explain how these links would function from there. From this page, number one would attempt to take you to &quot;articles/goals.php&quot;, since this path only works within one folder. Unfortunately, that page does not exist. Number two . Number three would work this time- as &quot;../&quot; indicates moving up a folder. Number four would function in the same way because it is absolute and not relative.
				<br><br>
				Links on localhost vs deployed server
				<h3>PHP: Includes</h3>

				</p>
			</div>
		</div>
	</body>
</html>
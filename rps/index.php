<?php $thisPage="RPS"; ?>
<?php $directory_prefix="../"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Rock, Paper, Scissors</title>
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
		<h2>Play Rock, Paper, Scissors</h2>
		<p>Enter rock, paper or scissors.</p>
		<form action="outcome.php" method="get"><br>
 			Player 1 <input type="text" name="one" /><br>
 			Player 2 <input type="text" name="two" /><br>
 			<input type="submit" />
			</form>
			</flex>
	</body>
</html>
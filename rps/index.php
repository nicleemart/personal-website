<?php $thisPage="RPS"; ?>
<?php $directory_prefix="../"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rock, Paper, Scissors</title>
	</head>
	<body>
		<h2>Play Rock, Paper, Scissors</h2>
		<p>Enter rock, paper or scissors.<br>
		<form action="outcome.php" method="get"><br>
 			Player 1 <input type="text" name="one" /><br>
 			Player 2 <input type="text" name="two" /><br>
 			<input type="submit" />
			</form>
	</body>
</html>
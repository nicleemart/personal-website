<?php $title="Play Rock, Paper, Scissors!"; ?>
<?php $thisPage="RPS"; ?>
<?php $directory_prefix="../../"; ?>
<?php include ("../../includes/top.php"); ?>
<?php include ("../../includes/functions.php"); ?>

		<h2>Play Rock, Paper, Scissors</h2>
		<p>Enter rock, paper or scissors.</p>
		<form action="outcome.php" method="get"><br>
 			Player 1 <input type="text" name="one" /><br>
 			Player 2 <input type="text" name="two" /><br>
 			<input type="submit" />
			</form>

<?php include ("../includes/bottom.php"); ?>
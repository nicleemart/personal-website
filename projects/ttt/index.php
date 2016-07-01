<?php $title="Tic Tac Toe"; ?>
<?php $thisPage="TTT"; ?>
<?php $directory_prefix="../../"; ?>
<?php include ("../../includes/top.php"); ?>
<?php include ("game.php"); ?>

	<h2>Play Tic Tac Toe!</h2>
	<?php 
		$game = $_GET["game"];
		$turn = checkTurn($game);
		$gameStatus = checkWin($game);
	?>

	<div class="board">
		<div class="board__square">
			 <?php checkSpaces($game, 0, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			 <?php checkSpaces($game, 1, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			 <?php checkSpaces($game, 2, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 3, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 4, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 5, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 6, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 7, $turn, $gameStatus) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($game, 8, $turn, $gameStatus) ?>
		</div> 
		<div class="board__text">
			<br>
			<a href="?game=000000000">Reset Game</a><br>
			<?php printGameStatus($gameStatus) ?>
		</div>
	</div>
			

<?php include ("../includes/bottom.php"); ?>
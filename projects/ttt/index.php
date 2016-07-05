<?php $title="Tic Tac Toe"; ?>
<?php $thisPage="TTT"; ?>
<?php $directory_prefix="../../"; ?>
<?php include ("../../includes/top.php"); ?>
<?php include ("game.php"); ?>
<?php 
	session_start(); 
	?>

	<h2>Play Tic Tac Toe!</h2>
	<?php 
		$game = $_GET["game"];
		$turn = checkTurn($game);
		$gameStatus = checkWin($game);
		session ();
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
	</div>
	<div class="results">
		<div class="results__text">
			<a href="?game=000000000">Reset Game</a>
		</div><br>
		<div class="results__text">
			<?php printGameStatus($gameStatus) ?>
		</div><br><div class="results__text">
			<?php session_register() ?>
		</div><br>
	</div>
			

<?php include ("../includes/bottom.php"); ?>
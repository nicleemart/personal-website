<?php $title="Tic Tac Toe"; ?>
<?php $thisPage="TTT"; ?>
<?php $directory_prefix="../../"; ?>
<?php include ("../../includes/top.php"); ?>
<?php include ("game.php"); ?>

	<h2>Play Tic Tac Toe!</h2>
	<?php 
		$game = $_GET["game"];
		$turn = checkTurn($game);
	?>

	<div class="board">
		<div class="row">
			<div class="cell">
			 <?php checkSpaces($game, 0, $turn)?>
			</div>
			<div class="cell">
			 <?php checkSpaces($game, 1, $turn)?>
			</div>
			<div class="cell">
			 <?php checkSpaces($game, 2, $turn) ?>
			</div>
		</div>
		<div class="row">
			<div class="cell">
				<?php checkSpaces($game, 3, $turn) ?>
			</div>
			<div class="cell">
				<?php checkSpaces($game, 4, $turn) ?>
			</div>
			<div class="cell">
				<?php checkSpaces($game, 5, $turn) ?>
			</div>
		</div>
		<div class="row">
			<div class="cell">
				<?php checkSpaces($game, 6, $turn) ?>
			</div>
			<div class="cell">
				<?php checkSpaces($game, 7, $turn) ?>
			</div>
			<div class="cell">
				<?php checkSpaces($game, 8, $turn) ?>
			</div> 
		</div>
		<a href="?game=000000000">Reset</a>
	</div>
			

<?php include ("../includes/bottom.php"); ?>
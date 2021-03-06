<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
			<link rel="stylesheet" type="text/css" href="../../style.css">
	</head>
	<body>
		<div class="main">
			<div class="bodyContainer">

<?php session_start();
	$title="Tic Tac Toe";
	$thisPage="TTT";
	$directory_prefix="../../";
	include ("game.php");
?>

	<?php
		if ($_GET["reset"]){
			resetSession();
		}
		if ($_GET["resumegame"]){
			$game = savedGame();
		}
		else {
			$game = $_GET["game"];
		}
		if (empty($game)){
			$game = "000000000";
		}
		$turn = checkTurn($game);
		$gameWinStatus = checkWin($game);
		$gameTieStatus = checkTie($game, $gameStatus);
		updateWinCount($gameWinStatus);
		updateTieCount($gameTieStatus);
		startSession();
		storeCurrentGame($game);
	?>
<!-- <script type="text/javascript" src="squareClick.js"></script> -->

	<h2>Play Tic Tac Toe!</h2>

	<div class="board">
		<div class="board__square">
			 <?php checkSpaces($game, 0, $turn, $gameStatus) ?>
		</div>
		<div class="board__square--dark">
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
			<?php printSession() ?>
		</div><br>
		<div class="results__text">
			<a href="?reset=true">Clear Score</a>
		</div><br>
		<div class="results__text">
			<a href="?resumegame=true">Resume Game</a>
		</div>
		<?php printGameStatus($gameStatus) ?>
	</div>
			

<?php include ("../includes/bottom.php"); ?>
<?php 
	include ("game.php"); 

	echo "Testing that X wins\n";

	$x= "111020212";
	$y= "X wins!";

	if(checkWin($x)==$y){
		echo "\nSuccess\n";
	}
	else{
		echo "\nFailed\n";
	}
		echo "\n-------------------------------------------------------------------\n\n";

	echo "Testing that O wins\n";

	$x= "100222101";
	$y= "O wins!";

	if (checkWin($x)==$y){
		echo "\nSuccess\n";
	}
	else{
		echo "\nFailed\n";
	}
		echo "\n-------------------------------------------------------------------\n\n";
	echo "Checking that the game can tie\n";

	$x= "212121121";
	$y= "It's a tie!";
	$tie= "tie";

	if (checkTie($x, $tie)==$y){
		echo "\nSuccess\n";
	}
	else {
		echo "\nFailed\n";
	}
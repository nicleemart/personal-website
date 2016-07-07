<?php 
	include ("game.php"); 

	echo "Testing that X wins";

	$x= "111000000";
	$y= 0;

	if(checkWin($x)==$y){
		echo "\nX wins!\n";
		echo checkWin($x) . "\n";
		echo $y;
	}
	else{
		echo "\nFailed\n";
	}
		echo "\n-------------------------------------------------------------------\n\n";

	echo "Testing that O wins";

	$x= "000222000";
	$y= 1;

	if (checkWin($x)==$y){
		echo "\nO wins!\n";
	}
	else{
		echo "\nFailed\n";
	}

	echo savedGame();

?>
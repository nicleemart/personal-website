<?php include ("../../includes/functions.php"); ?>

<?php 
	echo "Player 1 enters rock. Player 2 enters rock. Should return \"It's a tie!\"";
		if (rps ("rock","rock")=="It's a tie!") {
			echo " Success!";
		}
		else{
			echo " Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
	echo "Tests converts string to lowercase. Should return \"Player 2 wins!\"";
		if (rps ("PAPER","SciSSorS")=="Player 2 wins!") {
			echo " Success!";
		}
		else{
			echo " Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
	echo "Does not allow invalid code.";
		if (rps ("Rooster","Dog")=="rooster and dog are not valid choices. Please try again.") {
			echo " Success!";
		}
		else{
			echo " Failed!";
		}
?>
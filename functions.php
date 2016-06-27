<?php 

function greeting(){
date_default_timezone_set("America/Chicago");
				$Hour = date("G");
				if ( $Hour >= 5 && $Hour <= 10 ) {
    			return "Mornin', sunshine.";} 
    			else if ( $Hour >= 11 && $Hour <= 13 ) {
    			return "Lunch break!";}
    			else if ( $Hour >= 13 && $Hour <= 18 ) {
    			return "Why, hello there.";}
    			else if ( $Hour >= 19 || $Hour <= 4 ) {
    			return "Meow.";} 
}
?>

<?php

function rps (){
	$P1 = "Player 1 wins!";
	$P2 = "Player 2 wins!";
	$Tie = "It's a tie!";
	
	if ($_GET["one"]==($_GET["two"]))
			{return "$Tie";}
	else if ($_GET["one"]=="rock" && ($_GET["two"]=="paper"))
			{return "Player 2 wins!";}
	else if ($_GET["one"]=="scissors" && ($_GET["two"]=="rock"))
			{return "Player 2 wins!";}
	else if ($_GET["one"]=="scissors" && ($_GET["two"]=="paper"))
			{return "Player 1 wins!";}
	else if ($_GET["one"]=="paper" && ($_GET["two"]=="rock"))
			{return "Player 1 wins!";}
	else if ($_GET["one"]=="paper" && ($_GET["two"]=="scissors"))
			{return "Player 2 wins!";}
}
?>
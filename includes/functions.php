<!-- Greets the user with specific greeting based on time -->

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
	function scan(){
		$dir = "../personal-website";

	// Open a directory, and read its contents
	if (is_dir($dir)){
	  if ($dh = opendir($dir)){
	    while (($file = readdir($dh)) !== false){
	      echo  $file . "<br>";
	    }
	    closedir($dh);
	  }
	}
}
?>

<!-- Determines outcome in a rock, paper, scissors match
String of specific characters (rock, paper or scissors) to determine outcome of match
Outcome of match (Player 1 wins, Player 2 Wins or tie) -->

<?php
function rps ($One, $Two){
	$P1 = "Player 1 wins!";
	$P2 = "Player 2 wins!";
	$Tie = "It's a tie!";
	
	$One = strtolower($One);
	$Two = strtolower($Two);
	
	if ($One == "rock" && ($Two == "rock"))
			{return $Tie;}
	else if ($One == "scissors" && ($Two == "scissors"))
			{return $Tie;}
	else if ($One == "paper" && ($Two == "paper"))
			{return $Tie;}
	else if ($One == "rock" && ($Two == "scissors"))
			{return $P1;}
	else if ($One == "rock" && ($Two == "paper"))
			{return $P2;}
	else if ($One == "scissors" && ($Two == "rock"))
			{return $P2;}
	else if ($One == "scissors" && ($Two == "paper"))
			{return $P1;}
	else if ($One == "paper" && ($Two == "rock"))
			{return $P1;}
	else if ($One == "paper" && ($Two =="scissors"))
			{return $P2;}
	else {return "$One and $Two are not valid choices. Please try again.";}
}
?>


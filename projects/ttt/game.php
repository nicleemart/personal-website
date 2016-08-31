<?php
	function checkWin ($game){
	//Sets up all possible win scenarios and checks for win. Each number represents a square on the board.
		$win = ["", "", "", "", "", "", "", ""];
			$win[0] = $game[0] . $game[1] . $game[2];
			$win[1] = $game[3] . $game[4] . $game[5];
			$win[2] = $game[6] . $game[7] . $game[8];
			$win[3] = $game[0] . $game[3] . $game[6];
			$win[4] = $game[1] . $game[4] . $game[7];
			$win[5] = $game[2] . $game[5] . $game[8];
			$win[6] = $game[0] . $game[4] . $game[8];
			$win[7] = $game[2] . $game[4] . $game[6];

			foreach ($win as &$value) {

			if ($value == "111"){
				storePastGames();
			//extract from checkWin
				return "X wins!";
			}
			elseif ($value == "222"){
				storePastGames();
			//extract from checkWin
				return "O wins!";
			}
			}
	}

	function updateWinCount($gameStatus){
	//Passes an X or O win through the session counter to be added to overall count.
		if ($gameStatus == "X wins!"){
			incrementSessionCounter("xwins");
		}
		elseif ($gameStatus == "O wins!"){
			incrementSessionCounter("owins");
		}
	}

	function checkTie ($game, $gameStatus){
	//Loops through string if no zeros and no winner to return a message of a tie.
		$hasZero = false;
		for ($i = 0; $i < strlen($game); $i++){
			if ($game[$i] == "0"){
				$hasZero = true;
			}
		}

		if (!$hasZero && strpos($gameStatus, "wins")==false){
		//Extract from checkTie
			storePastGames();
			return "It's a tie!";
		}
	}

	function updateTieCount ($gameStatus){
	//Passes a tie through the session counter to be added to overall count.
		if ($gameStatus == "It's a tie!"){
			incrementSessionCounter("tie");
		}
	}

	function incrementSessionCounter($gameSession){
	//Adds one to each game won or tied.
		$_SESSION[$gameSession]++;
	}

	function checkTurn ($game){
	//Loop through $game to determine if there are more X's or O's. Return a numerical value indiciating whose turn it is.
		$x = 0;
		$xCount = 0;
		$oCount = 0;

		while ($x < strlen($game)){

		if ($game[$x] == "1"){
			$xCount++;
		}
		elseif ($game[$x] == "2"){
			$oCount++;
		}
			$x++;
		}

		if ($xCount > $oCount){
			return 2;
		}
		else {
			return 1;
		}
	}


	function checkSpaces($game, $square, $turn, $gameStatus){
	//Return X/O/Blank based on users choice. If user has not chosen a value, return blank
		
		if($game[$square] == "1"){
			echo "X";
		}
		elseif($game[$square] == "2"){
			echo "O";
		}
		elseif($gameStatus == "X wins!" || $gameStatus == "O wins!"){
			echo "";
		}
		elseif($game[$square] == "0"){
			$game[$square] = $turn;
			echo "<a href=index.php?game=" . $game . ">#</a>";
		}

	}

	function savedGame(){
		$storage = "gameStorage.txt";
		$fileConnection = file($storage) or die("Error opening file!");
		return str_replace("\n", "", $fileConnection[0]) . str_replace("\n", "", $fileConnection[1]).str_replace("\n", "", $fileConnection[2]);
	}

	function storeCurrentGame($game){
	//Stores live game in text file.
		$storage = "gameStorage.txt";
		$fileConnection = fopen($storage, 'w') or die("Error opening file!");
		fwrite($fileConnection, $game);
		fclose($fileConnection);
	}

	function storePastGames(){
	//Moves a completed game from gameStorage.txt to  be saved with other completed games in pastGames.txt. 
		$storage = "gameStorage.txt";
		$fileConnection = file($storage) or die("Error opening file!");
		$pastGames = "pastGames.txt";
		$fh = fopen($pastGames, 'a') or die("Error opening file!");
		fwrite($fh, $fileConnection[0] . "\n");
		fclose($fh);
	}

	function startSession(){
	//Keeps data if session variables are greater than zero. Starts a new session if they are zero.
		if ($_SESSION["xwins"] > 0 || $_SESSION["owins"]> 0){

		}
		elseif(empty($_SESSION)){
			$_SESSION["xwins"]=0;
			$_SESSION["owins"]=0;
			$_SESSION["tie"]=0;
			$_SESSION["reset"] = false;
		}
	}

	function printSession(){
	//Prints stored session data of X wins and O wins.
		echo "X: " . $_SESSION["xwins"] . " - O: " . $_SESSION["owins"] . " Tie: " . $_SESSION["tie"];
	}

	function resetSession(){
	//Clears session if the user choses.
		$_SESSION=null;
	}

	function printGameStatus($gameStatus){
	//Prints if X wins, O wins, or a tie.
		echo "$gameStatus";
	}
?>
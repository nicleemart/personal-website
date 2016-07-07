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
				$_SESSION["xwins"]++;
				return "X wins!";
			}
			elseif ($value == "222"){
				$_SESSION["owins"]++;
				return "O wins!";
			}
			}
	}

	function checkTurn ($game){
	//Loop through $game to determine if there are more x's or o's. Return a numerical value indiciating whose turn it is.
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
		$storage = "gameStorage.txt";
		$fileConnection = fopen($storage, 'w') or die("Error opening file!");
		fwrite($fileConnection, $game);
		fclose($fileConnection);
	}

	function startSession(){
	//Keeps data if session variables are greater than zero. Starts a new session if they are zero.
		if ($_SESSION["xwins"] > 0 || $_SESSION["owins"]> 0){

		}
		elseif(empty($_SESSION)){
			$_SESSION["xwins"]=0;
			$_SESSION["owins"]=0;
			$_SESSION["reset"] = false;
		}
	}

	function printSession(){
	//Prints stored session data of X wins and O wins.
		echo "X: " . $_SESSION["xwins"] ." - O: ". $_SESSION["owins"];
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
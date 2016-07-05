<?php
	function checkWin ($game){
	//8 win scenarios go here- conditional statments. If there is no winner, move to checkTurn
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

		$_SESSION["xwins"] = 0;
		$_SESSION["owins"] = 0;

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

	function session(){
		if(empty($_SESSION)){
			$_SESSION["xwins"]=0;
			$_SESSION["owins"]=0;
		}
	}

	function printGameStatus($gameStatus){

		echo "X: " . $_SESSION["xwins"] ." - O: ". $_SESSION["owins"];
		echo "\n$gameStatus";
	}
?>
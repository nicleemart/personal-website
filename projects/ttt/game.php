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
	}

	function checkTurn ($game){
	//Loop through $arr to determine if there are more x's or o's. Return a numerical value indiciating whose turn it is.
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

		if ($xCount > $oCount)
			{return "1";}
		else {return "2";}
	}


	function checkSpaces($game, $square, $turn){
	//Return X/O/Blank based on users choice. If user has not chosen a value, return blank.
		if($game[$square]=="0"){
			$game[$square] = $turn;
			echo "<a href=index.php?game=" . $game . ">Click me!</a>";
		}
		if($game[$square]=="1"){
			echo "X";
		}
		elseif($game[$square] == "2"){
			echo "O";
		}

	}
?>
<html>
	<head>
		<title>Outcome</title>
	</head>
	<body>
Player one chose <?php echo htmlspecialchars($_GET["one"]); ?>!<br>
Player two chose <?php echo htmlspecialchars($_GET["two"]); ?>!<br><br>
	<?php
		if ($_GET["one"]=="rock" && ($_GET["two"]=="rock"))
			{echo "It's a tie!";}
		else if ($_GET["one"]=="rock" && ($_GET["two"]=="scissors"))
			{echo "Player 1 wins!";}
		else if ($_GET["one"]=="rock" && ($_GET["two"]=="paper"))
			{echo "Player 2 wins!";}
		else if ($_GET["one"]=="scissors" && ($_GET["two"]=="scissors"))
			{echo "It's a tie!";}
		else if ($_GET["one"]=="scissors" && ($_GET["two"]=="rock"))
			{echo "Player 2 wins!";}
		else if ($_GET["one"]=="scissors" && ($_GET["two"]=="paper"))
			{echo "Player 1 wins!";}
		else if ($_GET["one"]=="paper" && ($_GET["two"]=="paper"))
			{echo "It's a tie!";}
		else if ($_GET["one"]=="paper" && ($_GET["two"]=="rock"))
			{echo "Player 1 wins!";}
		else if ($_GET["one"]=="paper" && ($_GET["two"]=="scissors"))
			{echo "Player 2 wins!";} ?>
	</body>
</html>
<?php include ("../../includes/functions.php"); ?>

<html>
	<head>
		<title>Outcome</title>
	</head>
	<body>
Player one chose <?php echo htmlspecialchars($_GET["one"]); ?>!<br>
Player two chose <?php echo htmlspecialchars($_GET["two"]); ?>!<br><br>
	<?php echo rps($_GET["one"], $_GET["two"]); ?>
	</body>
</html>
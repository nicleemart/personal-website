<html>
	<head>
		<title>Outcome</title>
	</head>
	<body>
Player one chose <?php echo htmlspecialchars($_GET["one"]); ?>!<br>
Player two chose <?php echo htmlspecialchars($_GET["two"]); ?>!<br><br>
	<?php echo rps_output(); ?>
	</body>
</html>
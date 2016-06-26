<!DOCTYPE html>
<?php $thisPage="Params"; ?>
<?php $directory_prefix=""; ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Params</title>
			<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="flex-container">
			<div id="flex1">
				<?php include("header.php"); ?>
			</div>
			<div id="flex2">
				<?php include("navigation.php"); ?>
			</div>
			<div id="flex3">
				<h2>Hello!</h2>
				<div id="form">
					<form action="action.php" method="get"><br>
 					Your name: <input type="text" name="name" /><br>
 					Your age: <input type="text" name="age" /><br>
 					<input type="submit" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
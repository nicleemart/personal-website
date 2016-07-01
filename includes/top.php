<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
			<link href="<?php echo "$directory_prefix" . "style.css" ?>" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="main">
			<div class="main__nav">
				<div class="main__header">
					<?php include("header.php"); ?>
				</div>
				<?php include("navigation.php"); ?>
			</div>
			<div class="main__body">
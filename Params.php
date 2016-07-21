<?php $title="Params";
	$thisPage="Testing Params";
	$directory_prefix="";
	include ("includes/top.php"); ?>

				<div class="pageTitle">Hello!</div>
				<div id="form">
					<form action="action.php" method="get"><br>
 					Your name: <input type="text" name="name" /><br>
 					Your age: <input type="text" name="age" /><br>
 					<input type="submit" />
					</form>
				</div>

<?php include ("includes/bottom.php"); ?>
<?php $title="Tic Tac Toe"; ?>
<?php $thisPage="TTT"; ?>
<?php $directory_prefix="../../"; ?>
<?php include ("../../includes/top.php"); ?>

	<h2>Play Tic Tac Toe!</h2>

	Do you want to be X's or O's? Click on your choice below.<br><br>

	<form action="" method="post"> 
		<input type="image" name="letter" value="X&#39;s" src="../../images/x_50px.png" alt="X"> &nbsp;or&nbsp;
		<input type="image" name="letter" value="O&#39;s" src="../../images/o_50px.png" alt="O"> 
	</form>
	<br>
	<?php 
	if (isset($_POST["letter"])) {echo 'You chose ' . $_POST["letter"];} 
	?>

<?php include ("../includes/bottom.php"); ?>
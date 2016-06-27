<div id="navigation">
	<ul>
		<li><div class="navheader">Navigation</div></li>
		<li<?php if ($thisPage=="Index") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "index.php" ?>">Home</a></li>
		<li<?php if ($thisPage=="Goals") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "goals.php" ?>">Goals</a></li>
		<li<?php if ($thisPage=="Dog") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "dog.php" ?>">Meet Rooster</a></li>
		<li<?php if ($thisPage=="Params") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "Params.php" ?>">Params</a></li>
		<li><div class="navheader">Articles</div></li>
		<li<?php if ($thisPage=="Hacking") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "articles/hacking.php" ?>">Hacking</a></li>
		<li<?php if ($thisPage=="Web") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "articles/web.php" ?>">About the Web</a></li>
		<li<?php if ($thisPage=="Paths") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "articles/paths.php" ?>">PHP and Paths</a></li>
		<li<?php if ($thisPage=="HTMLDoc") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "articles/htmldoc.php" ?>">HTML Doc Tags</a>
		<li><div class="navheader">Projects</div></li>
		<li<?php if ($thisPage=="RPS") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "projects/rps/index.php" ?>">Rock, Paper, Scissors</a></li>
		<li<?php if ($thisPage=="TTT") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "projects/ttt/ttt.php" ?>">Tic Tac Toe</a></li>
	</ul>
		</div>

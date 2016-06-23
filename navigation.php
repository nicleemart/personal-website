	<div id="navigation">
	<ul>
		<li><strong><font size=4>Navigation</font></strong></li>
		<li<?php if ($thisPage=="Index") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "index.php" ?>">Home</a></li>
		<li<?php if ($thisPage=="Goals") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "goals.php" ?>">Goals</a></li>
		<li<?php if ($thisPage=="Dog") {echo " id=\"currentpage\"";} ?>><a href="<?php echo "$directory_prefix" . "dog.php" ?>">Meet Rooster</a></li>
		<br>
		<li><strong><font size=4>Articles</font></strong></li>
		<li><a href="<?php echo "$directory_prefix" . "articles/hacking.php" ?>">Hacking</a></li>
		<li><a href="<?php echo "$directory_prefix" . "articles/web.php" ?>">About the Web</a></li>
		<br>
		<li><strong><font size=4>Personal Sites</font></strong></li>
		<li><a href="https://www.facebook.com/nikki.lee.martin" target="_blank">Facebook</a></li>
		<li><a href="https://www.linkedin.com/in/nikki-martin-7b9645a2" target="_blank">LinkedIn</a></li>
		<li><a href="https://github.com/nicleemart" target="_blank">GitHub</a></li>
	</ul>
	</div>

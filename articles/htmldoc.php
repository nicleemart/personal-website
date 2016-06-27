<!DOCTYPE html>
<?php $thisPage="HTMLDoc"; ?>
<?php $directory_prefix="../"; ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Parts of an HTML DOC</title>
			<link href="../style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="flex-container">
			<div id="flex1">
				<?php include("../header.php"); ?>
			</div>
			<div id="flex2">
				<?php include("../navigation.php"); ?>
			</div>
			<div id="flex3">
				<h2>HTML Doc Tags</h2>
				<p>HTML has different tags that tell the browser how the process the content within the HTML document.<br><br>
				The &lt;html&gt; tag lets the browser know that the document is HTML as to process it as such. It also serves as a container for all the other elements of the HTML document. All content will be between the two &lt;html&gt; tags.<br><br>
				The &lt;head&gt; tag serves as a container for specific elements that belong in the head. These elements include fundamental tags such as the title of the webpage, &lt;title&gt;, and the CSS or design of the webpage, &lt;style&gt;. The meta tag, &lt;meta&gt;, also belongs here. Meta tags store data about data. By defining a char set in the meta tag, you are able to declare which characters you are using.<br><br>
				The &lt;body&gt; is where all the content of the HTML document is located. In the body, you will find text in forms such as paragraphs or lists, images, links, or any other data type you are able to display through HTML. Therefore, the bulk of your work is done between the two &lt;body&gt; tags.</p>
			</div>
		</div>
	</body>
</html>
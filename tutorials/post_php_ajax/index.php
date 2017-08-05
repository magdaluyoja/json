<!DOCTYPE html>
<html>
<head>
	<title>JSON Tutorial</title>
	<link rel="stylesheet" type="text/css" href="/json/styles/styles.css">
</head>
<body>
	<div class="container">
		<div id="divmenu"><?php include($_SERVER["DOCUMENT_ROOT"]."/json/menu.php"); ?></div>

		<div id="divcontent">

			<h1>JSON Tutorial : POST PHP Ajax</h1>
			
			<div id="divresult"></div>
		</div>

		<div id="divfooter">
			<?php include($_SERVER["DOCUMENT_ROOT"]."/json/footer.php"); ?>
			<script src="post_php_ajax.js"></script>				
		</div>
	</div>
</body>
</html>
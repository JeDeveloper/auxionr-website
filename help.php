<!DOCTYPE html>
<html>
	<head>
		<title>Auxionr Auction Utility</title>
		<?php include_once("imports.php"); ?>
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); makeNav("help.php"); ?>
		<?php include_once("lib.php"); start(); ?>
		<main>
			<ul id="tutorial-nav" class="nav nav-pills nav-stacked">
				<li><a href="contact.php">CONTACT US</a></li>
				<li><a href="#start">Start</a></li>
				<li><a href="#create">Creating an Auction</a></li>
				<li><a href="#holdauction">Holding an Auction</a></li>
				<li><a href="#checkout">Checkout</a></li>
				<li><a href="#export">Exporting Reports &amp; Information</a></li>
				<li><a href="#advanced">Advanced Features</a></li>
				<li><a href="#categories">Categories, Intrests, &amp; Mailers</a></li>
				<li><a href="#networks">Networks</a></li>
				<li><a href="#troubleshooting">Troubleshooting</a></li>
				<li><a href="#email">Email</a></li>
			</ul>
			<div id="tutorials">
				<?php printHelpShort("start"); ?>
				<hr>
				<?php printHelpShort("create"); ?>
				<hr>
				<?php printHelpShort("holdauction"); ?>
				<hr>
				<?php printHelpShort("checkout"); ?>
				<hr>
				<?php printHelpShort("export"); ?>
				<hr>
				<?php printHelpShort("advanced"); ?>
				<hr>
				<?php printHelpShort("categories"); ?>
				<hr>
				<?php printHelpShort("networks"); ?>
				<hr>
				<?php printHelpShort("troubleshooting"); ?>
			</div>
		</main>
	</body>
</html>
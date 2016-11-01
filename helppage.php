<!DOCTYPE html>
<?php include_once("lib.php"); start(); ?>
<html>
	<head>
		<title>
			<?php
				if (array_key_exists('key', $_GET)) {
					echo getHelpData($_GET['key'])->getTitle();
				} else {
					echo "Help";
				}
				?>
		</title>
		<?php include_once("imports.php"); ?>
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); makeNav("help.php"); ?>
		<main>
			<ul id="tutorial-nav" class="nav nav-pills nav-stacked">
				<li><a href="contact.php">CONTACT US</a></li>
				<li><a href="#start">Start</a></li>
				<li><a href="#create">Creating an Auction</a></li>
				<li><a href="#addsellers">Adding Sellers</a></li>
				<li><a href="#addbidders">Adding Bidders</a></li>
				<li><a href="#holdauction">Holding an Auction</a></li>
				<li><a href="#checkout">Checkout</a></li>
				<li><a href="#export">Exporting Reports &amp; Information</a></li>
				<li><a href="#advanced">Advanced Features</a></li>
				<!--li><a href="#categories">Categories, Intrests, &amp; Mailers</a></li>-->
				<li><a href="#networks">Networks</a></li>
				<li><a href="#troubleshooting">Troubleshooting</a></li>
				<li><a href="#email">Email</a></li>
			</ul>
			<div id="tutorials">
				<?php if (array_key_exists('key', $_GET) && topicExists($_GET['key'])) {
					getHelpData($_GET['key'])->printHelp();
				} else {
					getHelpData('start')->printHelp();
				}
				?>
			</div>
		</main>
	</body>
</html>
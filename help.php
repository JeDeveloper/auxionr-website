<!DOCTYPE html>
<html>
	<head>
		<title>Auxionr Auction Utility</title>
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
				<li><a href="#postauction">Post-Auction Tasks</a></li>
				<li><a href="#export">Exporting Reports &amp; Information</a></li>
				<li><a href="#advanced">Advanced Features</a></li>
				<!--li><a href="#categories">Categories, Intrests, &amp; Mailers</a></li>-->
				<li><a href="#drives">Drive Management</a></li>
				<li><a href="#parallelregistration">Parallel Bidder Registration</a></li>
				<li><a href="#troubleshooting">Troubleshooting</a></li>
				<li><a href="#email">Email</a></li>
			</ul>
			<div id="tutorials">
				<h2><a class="tutheader" name="start">Start</a></h2>
				<p>
					This series of brief tutorials will get you into the swing of using Auxionr! If at any point you get stuck, feel free to <a href="contact.php">email us</a> for help! Our real human beings (No robots!) will work with you to help you use Auxionr and to improve our product. We appriciate any and all feedback!
				</p>
				<p>
					Start by inserting an Auxionr flash drive into one of your computer's USB ports. If you don't have an Auxionr flashdrive, you can make one <a href="#drives">here</a> or buy one <a href="purchase.php">here</a>. Then open Auxionr. Video tutorials are coming soon; in the mean time, try reading the rest of these helpful tips.
				</p>
				<hr>
				<!--video tutorial might be helpful here-->
				<h2><a class="tutheader" name="create">Creating an Auction</a></h2>
				<p>
					The first step in using Auxionr is usually to create an auction. This can be done from the "Auctions" tab of "Auctioneer Tools" screen or with the "New Auction" button. Once an auction is created, it will appear in the auction select menu. Auctions can be renamed in the Auctions tab of the Auctioneer Tools screen.
					<img src="images/tutorial/new_auction.png"><br>
					<img src="images/tutorial/item_editor.png">
				</p>
				<hr>
				<h2><a class="tutheader" name="addsellers">Adding Sellers</a></h2>
				<p>
					Adding sellers is done in the Auction Editor.
				</p>
				<hr>
				<h2><a class="tutheader" name="addbidders">Adding Bidders</a></h2>
				<p>
					The auction editor screen contains a section for adding bidders. It is also possible to register multiple bidders at once on multiple computers. Read about that <a href="#parallelregistration">here</a>.
				</p>
				<hr>
				<h2><a class="tutheader" name="holdauction">Holding an Auction</a></h2>
				<p>
					The hold auction screen is the screen you will use to actually hold an auction. On the Hold Auction screen, you can register bids. If you have an extra computer moniter plugged into your computer, you can also open a window that will give the chanter information on the item currently being auctioned.
				</p>
				<hr>
				<h2><a class="tutheader" name="postauction">Post-Auction Tasks</a></h2>
				<p>
					The post-auction screen will help you record who paid for what and how much money you recieved. You can go item by item or bidder by bidder [TODO: make this not a bald-faced lie].
				</p>
				<hr>
				<h2><a class="tutheader" name="export">Exporting Reports &amp; Information</a></h2>
				<p>
					Currently, Auxionr can export auctions to text files and to printers. More features, such as exporting to spreadsheets and improved data formatting, are coming soon.
				</p>
				<p>
					We recognize that many export formats and styles are not yet supported by Auxionr. If your preferred format, style, etc. is not supported, we urge you to <a href="contact.php">contact us</a> so that we can include it in the next patch.
				</p>
				<hr>
				<h2><a class="tutheader" name="advanced">Advanced Features</a></h2>
				<p>
					If you want to do more with Auxionr, there are a few more advanced features that, in order to make Auxionr easier to use, are disabled by default. To enable these advanced features, simply click the "Options" button in the top menu and choose which features to enable.
				</p>
				<hr>
				<hr>
				<!--<h2><a class="tutheader" name="categories">Categories, Intrests, &amp; Mailers</a></h2>
				<p>
					Auxionr allows you to save information on returning bidders and send out mailers for auctions that might intrest them. [TODO: MORE. Also, finish this feature.]
				</p>-->
				<hr>
				<h2><a class="tutheader" name="drives">Drive Management</a></h2>
				<p>
					[This is hard to explain. Procrastinate.]
				</p>
				<hr>
				<h2><a class="tutheader" name="parallelregistration">Parallel Registration</a><h2>
				<p>
					Parallel bidder registration is one of the most useful of Auxionr's advanced tools, but can be somewhat complecated and intimidating at first. If you configure bidder drives, you can use other computers to register bidders, substantially increasing the speed at which bidders can check into an auction
				</p>
				<hr>
				<h2><a class="tutheader" name="troubleshooting">Troubleshooting</a></h2>
				<p>
					Problems happen to everyone. If you've encountered an issue with Auxionr, here are some tips and suggestions to resolve it on your own.
					<dl>
						<dt></dt>
						<dd></dd>
						<dt></dt>
						<dd></dd>
					</dl>
				</p>
				<p>
					If you are still having trouble with Auxionr, we encourage you to <a href="contact.php">contact us</a>.
				</p>
			</div>
		</main>
	</body>
</html>
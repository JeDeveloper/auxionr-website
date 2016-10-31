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
			<form action="mail-sent.php" method="POST">
				<label>First Name: </label><input type="text" name="fname"><br>
				<label>Last Name: </label><input type="text" name="lname"><br>
				<label>Email: </label><input type="text" name="email"><br>
				<label>Message: </label><br>
				<textarea name="msg" rows="8" cols="64"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</main>
	</body>
</html>
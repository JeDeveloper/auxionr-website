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
			<p>
				<?php
					$fn = $_POST['fname'];
					$ln = $_POST['lname'];
					$email = $_POST['email'];
					$josh_email = "joshuaevanslowell@gmail.com"; //for safety, also send directly to me
					$auxionr_email = "joshua.evans@auxionr.com";
					$subject = "AUXIONR CUSTOMER FEEDBACK!";
					$msg = $_POST['msg'];
					$headers = "From: " . $email . "\r\n" . "CC: " . $josh_email;
					mail($auxionr_email, $subject, $msg, $headers);
					$confirmation =  $fn. ", thank you for your feedback! Your message was: \n\"" .
						$msg . 
						"\"\nOne of our customer service people will respond to you shortly. We hope that you are satisfied with Auxionr, and that if you are not satisfied, we can help you!";
					mail($email, "Auxionr Confirmation", $confirmation, "From: " . $josh_email);
					echo $confirmation;
				?>
			</p>
		</main>
	</body>
</html>
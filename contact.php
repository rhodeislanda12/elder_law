<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">	
	<title>Contact Robin Goeman</title>
	<meta name="description=" content="Robin Goeman is a Brooklyn based lawyer specializing in elder law">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap-responsive.css"/>
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/jquery-ui-1.9.2.custom.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/application.css"/>

	<!-- <link rel="icon" type="image/png" href="assets/images/RGfavicon.ico"> -->

</head>

<!--#include virtual="header.html" -->
<?php
	$name = $_POST[ 'name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Goemanlaw.com';
	$to = 'michelle.e.rittner@gmail.com';
	$subject = 'New Client Inquiry';

	$body = "From: $name\n Email: $email\n Message:\n $message";

	if ($_POST['submit']) {
		if (mail ($to, $subject, $body, $from)){
			echo '<p>Your message has been sent!</p>';
		} else{
			echo '<p>Something went wrong, please try again</p>';
		}
	}
?>


<div class="page">
	<h1>
		Contact
	</h1>
	<section>
	<p>	
			<div class="contact-box1">
				<p>Robin Goeman<br>26 Court St., Suite 913<br>Brooklyn, NY 11242</p><br>	
				<p>Phone: 718-866-5373 <br>Fax: 718-989-8568<br>
			</div>
			<div class="contact-box2"> 
				<div id="form_title">
					Request a Consultation with Robin Goeman
				</div><br>
				<section class="body">
					<form method="post" action="contact.php" enctype="text/plain">
						Name:<br>
						<input type="text" name="name"><br>
						E-mail:<br>
						<input type="email" name="email"><br>
						Phone Number:<br>
						<input type="text" name="message"><br>
						A Brief Description of Your Case:<br>
						<textarea name="comment" input="" size="500" style="margin: 0px 0px 9px; width: 253px; height: 146px;"></textarea><br><br>
						<input type="submit" id="submit" name="submit" value="Submit">
					</form>
				</section>
			</div>
			<br><br><br><br><br>
	</p>	
	</section>
</div>	




<!--#include virtual="footer.html" -->
<?php
<<<<<<< HEAD

	// echo "HELLO WORLD!";
	// echo $_POST.array_keys;
	// echo $_POST['array_keys'];

	if ($_POST['submit']) {
		$name = $_POST[ 'name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'mailer@goemanlaw.com';
		$to = 'rgoeman@gmail.com';
		$subject = 'New Client Inquiry';

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: $name <$email>";
		$headers[] = "Reply-To: $name <$email>";
		$headers[] = "Subject: {$subject}";
		$headers[] = "X-Mailer: PHP/".phpversion();

		$body = "From: $name\n Email: $email\n Message:\n $message";
		if (mail ($to, $subject, $body, implode("\r\n", $headers))) {
			header("location: messagesent.shtml");
		} else{
			echo '<p>Something went wrong, please try again</p>';
		}
	}
?>
=======
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
>>>>>>> cb0d9fa8ef799bf7017bc0ec949bad553056335b

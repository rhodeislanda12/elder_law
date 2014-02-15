<?php

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
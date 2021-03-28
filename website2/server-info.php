<?php

	# $_SERVER SUPERGLOBAL, (https://www.php.net/manual/en/language.variables.superglobals.php)
	# All globals begin with $_ except for $GLOBALS

	// Create Server Array

	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Host Header' => $_SERVER['HTTP_HOST'],
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Current Page' => $_SERVER['PHP_SELF'], //A lot of times when your submitting forms and you want to submit to the same page your on you can do this
		'Script Name' => $_SERVER['SCRIPT_NAME'],
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME']

	];

	//print_r($server);

	// Create Client Array
	$client = [
		'Client system info' => $_SERVER['HTTP_USER_AGENT'], // can tell you what browser your client is using
		'Client IP' => $_SERVER['REMOTE_ADDR'], // on my computer only returns ::1 but usually returns client IP address
		'Remote Port' => $_SERVER['REMOTE_PORT']

	];

	//rint_r($client);


?>
 

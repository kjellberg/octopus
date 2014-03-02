<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// clean any existing new line characters
	$body = str_replace(["\n", "\r"], '', $_POST['body']);
	
	// we get back actual HTML instead of new line characters
	// so we need to replace them with new lines for proper display
	// later on
	$body = trim(preg_replace('~(<br\s*/?>)~im', PHP_EOL, $body));
	
	// content is ready to be updated in the database
	// ...
	
	return print json_encode(['success' => 1]);
	die();
}

function insert_head() {  ?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />

<?php 
	embed('jquery.min.js'); 
	embed('skel.min.js'); 
	embed('init.js'); 

	embed('skel-noscript.css');
	embed('style.css');
	embed('style-desktop.css');
	embed('html5shiv.js');
	embed('ie8.css');
} ?>
<?php 
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
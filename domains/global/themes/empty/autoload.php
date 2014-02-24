<?php
/* 
 * Function: insert_head();
 * Everything in here will be loaded into <head></head>-section.
*/

function insert_head() {
	?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,900' rel='stylesheet' type='text/css'>

	<?php
	embed('bootstrap.min.css'); // include <template_directory>/css/bootstrap.min.css.
	embed('style.css'); // include <template_directory>/css/style.css.
}

/* 
 * Function: insert_footer();
 * Everything in here will be loaded before just before closing </body>.
*/

function insert_footer() {
	// Include bootstrap.mn.js for Twitter Boostrap.
	embed('bootstrap.min.js'); // include <template_directory>/js/bootstrap.min.js.
}

function get_test() {
	$test = 'This variable will pass to theme';
	return $test;
}
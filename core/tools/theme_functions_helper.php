<?php
if (function_exists('insert_head')) {
	$octopus->hook->on('after_head', 'insert_head');
}

if (function_exists('insert_footer')) {
	$octopus->hook->on('after_footer', 'insert_footer');
}

function embed( $file ) {
	global $theme;
	$theme->embed( $file );
}
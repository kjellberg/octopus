<?php
function get_head() {
	global $octopus;
	$octopus->template->head();
}

function get_footer() {
	global $octopus;
	$octopus->template->footer();
}

function section( $name ) {
	global $octopus;
	$octopus->template->section($name);
}

function theme_file() {
	global $octopus;
	return $octopus->template->template_file;
}

function theme_directory() {
	global $octopus;
	return $octopus->template->theme_dir;
}

function theme_url() {
	global $octopus;
	return $octopus->template->theme_url;
}

function site_url() {
	global $octopus;
	return rtrim($octopus->config('site')['site_url'], '/');
}

function shorten( $input, $length = '150' ) {
	global $octopus;
	return strip_tags(trim(substr($input, 0, $length))) . "...";
}


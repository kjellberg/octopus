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

function editable ( $field_name, $placeholder = 'Editable text', $tag = 'span', $args = array() ) 
{
	global $octopus;
	extract($args);
	return "<{$tag} class='editable'>{$placeholder}</{$tag}>";
}
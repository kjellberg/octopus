<?php
/* 	 
 * 
 *   Filename: view.php
 *   
 *   Everything is ready. Let's view the page..
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// Create new theme.
$theme = new Template;

// Add hook to trigger functions before output.
$octopus->hook->trigger('before_render');

// Load templates autoload.php.
if (file_exists($theme->theme_dir . '/autoload.php'))
	include($theme->theme_dir . '/autoload.php');

/* Include our themeing tools */
$tools_dir = coredir . '/tools';
foreach (glob("{$tools_dir}/*.php") as $filename ) include_once $filename;

// Render view.
$theme->render($theme->theme_file);

// Add hook to trigger functions after output.
$octopus->hook->trigger('after_render');

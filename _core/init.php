<?php
define( 'octopus_version', '1.0.0');
define( 'octopus_version_name', 'dev');

define( 'sitedir', customdir . '/default' );

/* Run installation scripts */
require_once( coredir . '/install/install.php');

/* Include Composer autoload.php */
require_once( webdir . '/vendor/autoload.php' );

/* Include our models */
$models_dir = coredir . '/models';
foreach (glob("{$models_dir}/*.php") as $filename ) include_once $filename;

/* Include our base class */
require_once( coredir . '/octopus.php');

/* Include our theme helpers */
$helpers_dir = coredir . '/helpers';
foreach (glob("{$helpers_dir}/*.php") as $filename ) include_once $filename;

/* Load admin functions if admin */
require_once( coredir . '/admin/load.php');

/* Include and render our views */
if(!isset($OCTOPUS_NO_VIEW))
	require_once( coredir . '/view.php');

<?php
/* Run installation scripts */
//require_once('install/install.php');

/* Include constants */
include( coredir . '/constants.php');

/* Include Composer autoload.php */
require_once( 'vendor/autoload.php' );

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
require_once( coredir . '/view.php');

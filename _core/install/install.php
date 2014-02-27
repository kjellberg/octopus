<?php
global $system_errors;
$system_errors = array();

define('installdir', coredir .'/install');

/* Check system requirements */
include(installdir.'/check_system_requirements.php');


if (isset($_POST['admin'])) {

	switch ($_POST['admin']) {

		case 'mysql':
			include(installdir.'/install_mysql.php');
		break;		

		case 'site':
			include(installdir.'/install_site.php');
		break;

		default:

		break;
	}
}

/* Check if db configuration file exists */
if (file_exists(sitedir.'/configs/db.php')) 
	$database = 'mysql';
else 
	$database = 'none';


/* Check if site configuration file exists */
if (file_exists(sitedir.'/configs/site.php')) 
	$site = 'ready';
else 
	$site = 'install';


if ($database == 'none') {
	include('template.php');
	die();
} 

if ($site == 'install') {
	include('template.php');
	die();
} 


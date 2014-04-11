<?php
/* Check if the file vendor/autoload.php exists. If it doesn't it's
 obvious user hasn't run composer install */

if (!file_exists(webdir.'/vendor/autoload.php')) {
	array_push($system_errors, 
		array('Install and update composer packages using command line.', array('$ composer install'))
	);
}

/* Check if the file vendor/autoload.php exists. If it doesn't it's
 obvious user hasn't run composer install */

if (!is_writeable(sitedir . '/configs')) {
	array_push($system_errors, 
		array('Your configs directory needs to be writeable.', array('$ chmod -R 777 ' . sitedir . '/configs'))
	);
}
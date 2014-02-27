<?php
if (isset($_POST))
{
	ob_start();
	extract($_POST);

	$mysqli = new mysqli($hostname, $username, $password, $database);

	if ($mysqli->connect_errno) {
	    $db_status = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		include(installdir.'/sql/routes.php');

		$db_config = array(
		    'driver'    => 'mysql',
		    'host'      => $hostname,
		    'database'  => $database,
		   	'username'  => $username,
		    'password'  => $password,
		    'charset'   => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'prefix'    => 'default_'
		);

		ob_start();
		var_export($db_config);
		$tmp = ob_get_clean();

		$data = '<?php ';
		$data .= 'return ' . $tmp . ';';
	
		/* Write to config-file */
		file_put_contents(sitedir.'/configs/db.php', $data);
	}

	ob_get_clean();

}
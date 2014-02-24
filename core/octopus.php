<?php
/* 	 
 * 
 *   Filename: octopus.php
 *   
 *   Everything starts from here..
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
 
use Illuminate\Database\Capsule\Manager as Capsule;

class Octopus 
{

	function __construct() {

		$this->checkInstall();

		$db_config = $this->config('db');

		$this->db = new Capsule;
		$this->db->addConnection($db_config);
		$this->db->bootEloquent();

		$this->auto_class_loader(coredir . '/includes' );

		/* If debug, load debug */
		if ($this->config('site')['debug'] == true) {
			$this->hook->on('after_footer', 'show_debug_footer');
			
		}
	}

	public function auto_class_loader( $path )
	{
		/* Load classes and create an object from all files in a specifed directory */
		if (!is_dir($path))
			return false; // Return false if the folder doesn't exists.

		foreach (glob("{$path}/*.php") as $filename )
	    {
	        include_once $filename;

	        /* Find out what the classname should be depending on filename. */
	    	$classname = str_replace('.php', '', $filename);
	    	$classname = explode('/', $classname);
	    	$classname = end($classname);

	    	if (class_exists($classname))
	       		$this->$classname = new $classname;
	    }
	}

	public function query() {
		if (isset($_GET['q']))
			return $_GET['q'];
		else 
			return '/';
	}

	public function config($config_file) {

		$config[] = sitedir . '/configs/'.$config_file. '.php';
		$config[] = webdir . '/domains/global/configs/'.$config_file. '.php';
		$config[] = coredir . '/includes/configs/'.$config_file. '.php';

		foreach($config as $file) 
		{
			if (file_exists($file))
				return include($file);
		}

		return false;
	}

	public function echo_and_die($message = '')
	{
		die("<h1>" . $message . "</h1><hr>");
	}

	public function checkInstall() {
		if (file_exists(sitedir.'/')) {
			$this->echo_and_die("missing config files.");
		}
	}

}
$octopus = new Octopus;

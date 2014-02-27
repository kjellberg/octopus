<?php
class template extends Octopus
{
	var $css = array();

	function __construct() {
		$this->theme 			= 'global/themes/empty';
		$this->theme_path 		= $this->theme;
		$this->theme_dir  		= customdir . '/' . $this->theme_path;
		$this->theme_file 		= $this->theme_dir . '/' . $this->route()->theme_file;
		$this->theme_url	  	= $this->config('site')['site_url'] . 'custom/' . $this->theme_path;
	}

	public function head() {
		global $octopus;
		ob_start();
		$octopus->hook->trigger('before_head');
	?>
		<meta charset="utf8">

		<title>Octopus</title>
		<meta name="keywords" content="">
		<meta name="description" content="">

	<?php
		$octopus->hook->trigger('after_head');
		$head = ob_get_clean();
		echo $head;
	}

	public function footer() {
		global $octopus;
		$octopus->hook->trigger('before_footer');
		$octopus->hook->trigger('after_footer');
	}

	public function embed($file, $args = array()) {

		$ext = substr(strrchr($file,'.'),1);
		$theme_url = $this->theme_url;

		switch ($ext) {
			case 'css':
				echo "<link rel='stylesheet' href='".$theme_url . '/css/' . $file."'>";
			break;	

			case 'js':
				echo "<script src='" . $theme_url . '/js/' . $file."'></script>";
			break;
		}
	}

	public function render($template_file = '', $args = array()) {

		extract($args);

		if(file_exists($template_file)) 
		{
			// Compress and output
			ob_start(); 
			include $template_file; 
			$output = ob_get_clean();
			
			if ($this->config('site')['debug'] == true)
				echo $output;
			else
				echo preg_replace( array( '/ {2,}/', '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s' ), array( ' ', '' ), $output );
		}
	}

	public function route()
	{
		if ($route = Route::where('query_uri', '=', $this->query())->first())
			return $route;
		else 
			$this->echo_and_die('404 - Sidan kan inte hittas');
	}
}



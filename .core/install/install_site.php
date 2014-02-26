<?php
if (isset($_POST))
{
	extract($_POST);

	$site['site_url'] = $site_url;
	$site['debug'] = false;
	
	ob_start();
	var_export($site);
	$tmp = ob_get_clean();

	$data = '<?php ';
	$data .= 'return ' . $tmp . ';';
	
	/* Write to config-file */
	file_put_contents(sitedir.'/configs/site.php', $data);
}
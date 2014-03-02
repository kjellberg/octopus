<?php
$octopus->hook->on('before_footer', 'load_admin_toolbar');

function get_admin_url() {
	global $octopus;
	return $octopus->config('site')['site_url'] . str_replace(webdir . '/', '', coredir) . '/admin';
}
function load_admin_toolbar()
{
	$jquery = '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js';
	$admin_url = get_admin_url();
	echo "<link href='{$admin_url}/css/admin.css' rel='stylesheet' type='text/css'>";
	
	echo "<script src='{$jquery}'></script>";
	echo "<script>";
	echo "var octopusAdminUrl = '{$admin_url}'";
	echo "</script>";
	echo "<script src='{$admin_url}/admin.js'></script>";

	?>
	<div id="octopus-admin-frame">
	</div>
<?php
}
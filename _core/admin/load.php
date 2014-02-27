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
	echo "<link href='{$admin_url}/jquery.toolbars.css' rel='stylesheet' type='text/css'>";
	echo "<link href='{$admin_url}/bootstrap-icons.css' rel='stylesheet' type='text/css'>";

	echo "<script src='{$jquery}'></script>";
	echo "<script src='{$admin_url}/jquery.toolbar.min.js'></script>";
	echo "<script src='{$admin_url}/admin.js'></script>";	
	
?>
<div id="oct_admin_toolbar">
<i class="icon-tasks"></i>
	<a href="#"><i class="icon-search"></i></a>
	<a href="#"><i class="icon-edit"></i></a>
	<a href="#"><i class="icon-user"></i></a>
</div>
<script>
$('#oct_admin_toolbar').toolbar({
	content: '#oct_admin_toolbar', 
	position: 'right'
});
</script>
<?php
}
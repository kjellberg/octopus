<?php
$octopus->hook->on('before_footer', 'load_admin_toolbar');

function load_admin_toolbar()
{
	global $octopus;
	$jquery = '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js';

	echo "<link href='" . 
	$octopus->config('site')['site_url'] . 
	"core/admin/css/admin.css' rel='stylesheet' type='text/css'>";

	echo "<link href='" . 
	$octopus->config('site')['site_url'] . 
	"core/admin/jquery.toolbars.css' rel='stylesheet' type='text/css'>";
	
	echo "<link href='" . 
	$octopus->config('site')['site_url'] . 
	"core/admin/bootstrap-icons.css' rel='stylesheet' type='text/css'>";

	echo "<script src='{$jquery}'></script>";

	echo "<script src='" . 
	$octopus->config('site')['site_url'] . 
	"core/admin/jquery.toolbar.min.js'></script>";

	echo "<script src='" . 
	$octopus->config('site')['site_url'] . 
	"core/admin/admin.js'></script>";	
	
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
<!DOCTYPE html>
<html>
<head>
	<?=get_head();?>
</head>
<body>
	<div id="full" style="background: #f39c12;height: 100%;">
		<div class="middle">
			<?php echo editable('welcome_message', 'HI', 'h1'); ?>
		</div>
	</div>
	<?=get_footer();?>
</body>
</html>
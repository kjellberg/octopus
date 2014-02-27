<!DOCTYPE html>
<html>
<head>
	<?php echo $this->head(); ?>
</head>
<body>
	<div id="full">
		<div class="middle">
			<?php echo editable('welcome_message', 'Welcome', 'h1'); ?>
		</div>
	</div>
	<?php echo $this->footer(); ?>
</body>
</html>
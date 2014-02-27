<!DOCTYPE html>
<html>
<head>
	<?php echo $this->head(); ?>
</head>
<body>
	<div id="full">
		<div class="middle">
			<?php 
				echo $this->field( // Print out Hello World text and make it editable.
					'helloWorld',  // Field ID.
					'Hello World', // Output string.
					'h1' // html tag (optional)
				); 
			?>
		</div>
	</div>
	<?php echo $this->footer(); ?>
</body>
</html>
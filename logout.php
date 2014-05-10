<?php session_start(); ?>
<html>
	<head>
		<?php
			session_destroy();
			echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
		?>
	</head>
	<body>
	</body>
</html>
<?php session_start(); ?>
<html>
<head>
	<title>
		Тести
	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=cyrillic-ext,latin-ext" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/form.css" />
	<link rel="stylesheet" type="text/css" href="css/tests.css" />
	<link rel="shortcut icon" href="img/icon.ico">
	<link rel="icon" href="img/icon.ico">

</head>

<body>
<table class="main_table">
	<tr>
		<td class="main_table_header">
			<?php include_once "parts/header.php"; ?>
			<table class="menu">
				<tr>
					<td class="menu_item"><a href="index.php">Головна</a></td>
					<td class="menu_item"><a href="registration.php">Реєстрація</a></td>
					<td class="active_menu_item"><a href="tests.php">Тести</a></td>
					<td class="menu_item"><a href="about.php">Про автора</a></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="main_table_body">
			<?php
				$link = mysqli_connect("localhost", "root", "", "tester");
				if($link)
				{
					$result = mysqli_query($link, "SELECT * FROM tests");
					while($data = mysqli_fetch_array($result))
					{
						echo '<div class="test_name"><a href="test.php?test_id='.$data["id"].'&question_id=1">'.$data["name"].'</a></div>';
						echo '<div class="test_description">'.$data["description"].'</div>';
					}
					mysqli_close($link);
				}
				else echo "Connection error". mysqli_error($link);
			?>
		</td>
	</tr>
	<tr>
		<td class="main_table_footer"><?php include_once "parts/footer.php"; ?></td>
	</tr>
</table>
</body>
</html>
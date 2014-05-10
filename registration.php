<?php session_start(); ?>
<html>
	<head>
		<title>
			Реєстрація
		</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/form.css" />
		<link rel="stylesheet" type="text/css" href="css/registration.css" />
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
							<td class="active_menu_item"><a href="registration.php">Реєстрація</a></td>
							<td class="menu_item"><a href="tests.php">Тести</a></td>
							<td class="menu_item"><a href="about.php">Про автора</a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="main_table_body">
					<div class="text_center">
						<p class="header_text">Реєстрація нового користувача</p>
					</div>
					<table border="0" width="100%">
						<tr>
							<td>
								<form action="register.php" method="get">
								<table class="registration_table">
									<tr>
										<td style="width: 150px;"><label class="simple_text" for="login">Логін: </label></td>
										<td><input type="text" name="login" id="login" size="19"></td>
									</tr>
									<tr>
										<td><label class="simple_text" for="password">Пароль: </label></td>
										<td><input type="password" name="password" id="password" size="19"></td>
									</tr>
									<tr>
										<td><label class="simple_text" for="name">Ім'я: </label></td>
										<td><input type="text" name="name" id="name" size="19"></td>
									</tr>
									<tr>
										<td><label class="simple_text" for="surname">Прізвище: </label></td>
										<td><input type="text" name="surname" id="surname" size="19"></td>
									</tr>
									<tr>
										<td><label class="simple_text" for="birthday">День народження: </label></td>
										<td><input type="date" name="birthday" id="birthday"></td>
									</tr>
									<tr>
										<td><label class="simple_text" for="e-mail">E-mail: </label></td>
										<td><input type="email" name="e-mail" id="e-mail" size="19"></td>
									</tr>

									<tr>
										<td style="padding-top: 10px; "><input type="submit" class="submit" value="Зареєструвати" onmouseover="this.className='activesubmit';" onmouseout="this.className='submit';"></td>
										<td>&nbsp;</td>
									</tr>
								</table>
								</form>
							</td>
							<td>
								<img src="img/new_user.png" width="300px" height="300px">
							</td>
						</tr>
					</table>

				</td>
			</tr>
			<tr>
				<td class="main_table_footer"><?php include_once "parts/footer.php"; ?></td>
			</tr>
		</table>
	</body>
</html>
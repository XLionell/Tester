<html>
	<head>
		<?php
			$link = mysqli_connect("localhost", "root", "", "Tester");
			if($link)
			{
				if (isset($_GET["login"]) && isset($_GET["password"]) && isset($_GET["name"]) && isset($_GET["surname"]) && isset($_GET["birthday"]) && isset($_GET["e-mail"]))
				{
				//echo "INSERT INTO users (login, password, name, surname, birthday, e-mail) VALUES ('".$_GET["login"]."', '".$_GET["password"]."', '".$_GET["name"]."', '".$_GET["surname"]."', '".$_GET["birthday"]."', '".$_GET["e-mail"]."')";
					if (mysqli_query($link, "INSERT INTO users (login, password, name, surname, birthday, email) VALUES ('".$_GET["login"]."', '".$_GET["password"]."', '".$_GET["name"]."', '".$_GET["surname"]."', '".$_GET["birthday"]."', '".$_GET["e-mail"]."')"))
					{
						echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
					}
					else echo "Insertion error". mysqli_error($link);
				}
				else echo "Arguments error";
				mysqli_close($link);
			}
			else echo "Connection error". mysqli_error($link);


		?>
	</head>
	<body>
	</body>
</html>
<?php session_start(); ?>
<html>
	<head>
		<?php
			if(isset($_GET["login"]) && isset($_GET["password"]))
			{
				$link = mysqli_connect("localhost", "root", "", "tester");
				if($link)
				{
					//echo $_GET["login"]. $_GET["password"];
					$result = mysqli_query($link, "SELECT id, name, surname FROM users WHERE login = '".$_GET["login"]."' AND password = '".$_GET["password"]."'");
					if($result)
					{
						$user = mysqli_fetch_array($result);
						if($user)
						{
							$_SESSION["user_id"] = $user["id"];
							$_SESSION["user_name"] = $user["name"];
							$_SESSION["user_surname"] = $user["surname"];
							echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
						}
						else
						{

						}
					}
					else echo "Query error". mysqli_error($link);
					mysqli_close($link);
				}
				else echo "Connection error". mysqli_error($link);
			}
			else echo "Arguments error";
		?>
	</head>
	<body>
	</body>
</html>
<?php session_start();

print_r($_SESSION);
echo "<br><br>";
if(!($_SESSION['login']=="pit" && $_SESSION['passwd']==123))
{
	Header("Location: primer.php");
}

?>

<html>
	<head>
		<title>
			Secret info
		</title>
	</head>
	<body>
		PZ
	</body>
</html>
<a href="start.php"> Вернуться назад</a>
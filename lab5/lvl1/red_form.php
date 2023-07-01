<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Телефонная книга - редактирование записи</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
<form action="save.php">
<tr><TH>Имя<TH>Телефон<TH>Адрес<TH>

<?php
$db = "phonebook"; 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$connect = new mysqli($host, $user, $pass, $db) or die(mysqli_error());
$id=isset($_GET['id'])?$_GET['id']:false;
$query="SELECT * FROM pb WHERE id='$id'";
$res=$connect->query($query);
while ($row = $res->fetch_array(MYSQLI_BOTH)):?>

<input type="hidden" name="id" value="<?=$row[0]?>">
<TR>
<TD><input class="in" type="text" name="name" value="<?=$row[1]?>">
<TD><input class="in" type="text" name="tel" value="<?=$row[2]?>">
<TD><input class="in" type="text" name="adr" value="<?=$row[3]?>">
<TD colspan="2" class="key"><input type="submit" value="Изменить">
<?endwhile?>
<?$connect->close();?>
</form>
</table>
</body>
</html>
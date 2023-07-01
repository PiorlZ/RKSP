<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Телефонная книга - сохранение</title>
</head>
<body>
<?php
$db = "phonebook"; 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$connect = new mysqli($host, $user, $pass, $db) or die("ЧЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЛ");
if (isset($_GET['id'])) {$id=$_GET['id'];}
if (isset($_GET['name'])) {$name=$_GET['name'];}
if (isset($_GET['tel'])) {$tel=$_GET['tel'];}
if (isset($_GET['adr'])) {$adr=$_GET['adr'];}

$query="UPDATE pb SET name='$name',tel='$tel',adr='$adr' WHERE id='$id'";
$res=$connect->query($query);
$connect->close();
?>

<META http-equiv="Refresh" content="0;url=unload&form.php">
</body>
</html>
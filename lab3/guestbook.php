<html> 
<heade> 
<title>Это гостевая книга!</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head> 
<body> 
</body> 
</html>
<?php
//БД 
$db = "gbook"; 
//Хостинг 
$host = "localhost"; 
//Логин и пароль пользователя 
$user = "root"; 
$pass = ""; 
$connect = new mysqli($host, $user, $pass, $db);  
if($connect == true) 
{ 
echo "Подключение прошло успешно!" ; 
} 
else 
{ 
exit("Ошибка подключения к БД!") ; 
}  
$query = "SELECT login, text FROM comments";
$res = $connect->query($query) ; 
while($row = $res->fetch_assoc()) 
{ 
echo "<div>" ; 
echo "<strong>".$row['login']."</strong>" . "<br>" ; 
echo $row['text'] ; 
echo "</div>" ; 
} ?>
<form method="POST" action="get.php">
Ваше имя:<br /> <input type="text" name="login">
<br />
Комментарий:<br /> <textarea name="text"></textarea>
<br /> 
<input type="submit" name="add_com" value=" Добавить комментарий "> 
</form>
<br>
<a href="start.php"> Вернуться назад</a>
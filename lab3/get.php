<?php
//БД 
$db = "gbook"; 
//Хостинг 
$host = "localhost"; 
//Логин и пароль пользователя 
$user = "root"; 
$pass = ""; 
$connect = new mysqli($host, $user, $pass, $db); 
$login = $_POST['login'] ; 
$text = $_POST['text'] ;  
if(isset($login) && isset($text) && !empty($login) && !empty($text)) 
{

$login = htmlspecialchars(trim($login)); 
$text = htmlspecialchars(trim($text)); 
$res = $connect->query("INSERT INTO `comments` (`login`, `text`) VALUES ('$login', '$text')") ;
if($res == true) 
{ 
echo "<meta http-equiv='Refresh' content='0; URL=guestbook.php'>"; 
} 
else { echo "Ошибка добавления записи в БД!" ; } 
} 
else 
{ 
echo "Заполните соответствующие поля!" ; 
}  ?>
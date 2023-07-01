<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Телефонный справочник</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
<tr><TH>Имя<TH>Телефон<TH>Адрес<TH>

<?php
$db = "phonebook"; 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$connect = new mysqli($host, $user, $pass, $db) or die("ЧЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЛ");
$query="SELECT * FROM pb";
$res= $connect->query($query) ; 
while($row = $res->fetch_array(MYSQLI_BOTH)): ?>

<TR>
	<TD><?=$row[1]?></TD><td><?=$row[2]?></TD><TD><?=$row[3]?></TD>
	<td class="key"><form action="red_form.php"><input type="hidden" name="id" value="<?=$row[0]?>"><input type="submit" value="Edit"></form></td>
		<td class="key"><form action="del.php"><input type="hidden" name="id" value="<?=$row[0]?>"><input type="submit" value="Del"
		onClick="return(confirm(' Точно удалить <?=$row[1]?>?'));"></form></td>
<?endwhile?>

<?php
$servername = "localhost"; // Адрес сервера
$username = "root"; // Имя пользователя
$password = ""; // Пароль
$BDname = "phonebook"; // Название БД
 
// Подключение к БД
$mysqli = new mysqli($servername, $username, $password, $BDname); 
 
// Проверка на ошибку
if ($mysqli->connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

// Получаем запрос
$inputSearch = $_REQUEST['search']; 
 
// Создаём SQL запрос
$sql = "SELECT * FROM pb WHERE `name` = '$inputSearch' || `tel` = '$inputSearch' || `adr` = '$inputSearch'";
 
// Отправляем SQL запрос
$result = $mysqli -> query($sql);
function doesItExist(array $arr) {
    // Создаём новый массив
    $data = array(
        'tel' => $arr['tel'] != false ? $arr['tel'] : 'Нет данных',
        'adr' => $arr['adr'] != false ? $arr['adr'] : 'Нет данных',
    );
    return $data; // Возвращаем этот массив
}
function countPeople($result) { 
    // Проверка на то, что строк больше нуля
    if ($result -> num_rows > 0) {
        // Цикл для вывода данных
        while ($row = $result -> fetch_assoc()) {
            // Получаем массив с строками которые нужно выводить
            $arr = doesItExist($row);
            // Вывод данных
            echo "ID: ". $row['id'] ."<br>
                  Имя: ". $row['name'] ."<br>
                  Телефон: ". $row['tel'] ."<br>
                  Адрес: ". $row['adr'] ."<hr>";
        }
    // Если данных нет
    } else {
        echo "Никто не найден";
    }
}
?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
	   <p>Поиск Человека: <input type="text" name="search" id=""> <input type="submit" value="Поиск"></p>
	     <hr>
	   <?php
	    countPeople($result); // Функция вывода пользователей
	   ?>
	   </form>

<form action="add.php">
<TR>
<TD><input class="in" type="text" name="name">
<TD><input class="in" type="text" name="tel">
<TD><input class="in" type="text" name="adr">
<TD colspan="2" class="key"><input type="submit" value="Добавить">
</form>

</table>
</html>
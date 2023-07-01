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
$sql = "SELECT * FROM `pb` WHERE `name` = '$inputSearch' || `tel` = '$inputSearch' || `adr` = '$inputSearch'";
 
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
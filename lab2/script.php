<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$adress = $_POST['email'];}
 
 if (((preg_match("/(\d+){10,}/",$phone) == 0) or (preg_match("/[а-яА-Я]{2,}/",$name)) == 0) or (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $adress) == 0))
{
        echo "данные введены некорректно!";
}
else
{
        echo "Вы смогли!";
}
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
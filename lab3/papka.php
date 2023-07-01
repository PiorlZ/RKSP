<?php
if (isset($_POST['papka'])) {$papka = $_POST['papka'];}


if(!is_dir($papka))           
         
       
{
     mkdir($papka, 0777);
   echo "Вы смогли!";
}
else
{
   echo "Такая папка есть или имя папки указано неверно.";
}
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
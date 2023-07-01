<?php
function draw_table($row,$col) {
   $table = "<table border=1>";
   $i = 1;
   do {
      $table .= "<tr>";
      $j = 1;
      do {
         $table .= "<td>Строка: $i <br> Колонка: $j</td>";
         $j++;
      }
      while($j <= $col);
      $table .= "</tr>";
   $i++;
   }
   while($i <= $row);
   $table .= "</table>";
   return $table;
}
 
 
if (isset($_POST['ok'])) {
   $table = draw_table($_POST['row'],$_POST['col']);
   echo "Таблица: <br>".$table;
}
else {
   echo "Введите количество строк и столбцов для таблицы:<br>
   <form method='post'>
   <label>Количество строк: <input type='number' name='row' min='1' max='20000000' size='3' required></label>
   <label>Количество столбцов: <input type='number' name='col' min='1' max='2000000000000' size='3' required></label>
   <br><input type='submit' name='ok' value='Рисовать таблицу'>
   </form>";
}
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
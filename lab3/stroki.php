<?php
$arr = file("stroki.txt");
foreach ($arr as $val) @$arr1[str_replace("\r\n", "", $val)]++;
foreach ($arr1 as $key1 => $val1) echo ("$key1 - $val1 <br>");
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
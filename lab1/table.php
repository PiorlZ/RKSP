<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Таблица умножения</title>
<style>
table.second.td {  width: 250px; margin: 0 auto;} 
.second.td td { width: 10%; text-align: center; border: 1px solid #cdc513; }</style> 
</head>
<body>
<?php
$rows = 10;

$cols = 10;
echo "<table class='second td'>";
for ($tr =1; $tr <= $rows; $tr ++)
{
echo "<tr>"; 
  if(($tr == '1')){  $b ='<b>'; $end_b ='</b>'; } 
  for($td =1;$td <=$cols; $td++)
  {
  if(($tr != '1') &&  ($td == '1')){  $b ='<b>'; $end_b ='</b>'; } 
  echo "<td>" . $b .$tr * $td. $end_b ."</td>\n"; 
  if(($tr != '1') &&  ($td == '1')){  $b =''; $end_b =''; } 
  }
  $b =''; $end_b ='';
echo "</tr>\n";
}   
echo "</table>";
?>
</body>
</html>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
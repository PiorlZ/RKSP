<?php
$rows=5;
$columns=3;
echo '<html><body>';
echo '<table border="1">';
for ($i=1;$i<=$rows;$i++){
echo'<tr>';
	for ($j=1;$j<=$columns;$j++)
{
if ((($i+$j) % 2)==0)
{$color="#425738";}
else
{$color="ffffff";}

echo "<td bgcolor=$color>$i,$j</td>";
}
echo '</tr>';
}
echo '</table>';
echo '</body></html>';
echo 'ну тут чета кубеки циферки';
echo '<br>';
echo '<b>ААААААААААААААА НЕПАНЯТНА</b>';
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
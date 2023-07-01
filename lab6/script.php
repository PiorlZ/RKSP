<?php
require ('D:/xampp/htdocs/pZi/6laba/src/jpgraph.php');
require ('D:/xampp/htdocs/pZi/6laba/src/jpgraph_pie.php');
require('D:/xampp/htdocs/pZi/6laba/src/jpgraph_pie3d.php');

set_time_limit(10);

$number_of_groups   = 6;
$sum_to             = 100;

$groups             = array();
$group              = 0;

while(array_sum($groups) != $sum_to)
{
    $groups[$group] = mt_rand(0, $sum_to/mt_rand(1,5));

    if(++$group == $number_of_groups)
    {
        $group  = 0;
    }
}
   // Статистика использования браузеров в процентах
   $data = $groups;
   $legends = array(
    'RuGle Chromium',
    'Runet Explorer', 
    'Rufox', 
    'Rupera', 
    'RuFari', 
    'Другие'
);

   // Создаём график
   $graph = new PieGraph(600, 450);
   $graph->SetShadow();

   // Заголовок графика
   $graph->title->Set('Статистика браузеров 2077');
   $graph->title->SetFont(FF_VERDANA, FS_BOLD, 14); 

   // Расположение "Легенды" (в процентах/100)
   $graph->legend->Pos(0.05, 0.09);

   // Создаём круговую диаграмму 3D
   $p1 = new PiePlot3d($data);

   // Центр круга (в процентах/100)
   $p1->SetCenter(0.45, 0.5);

   // Угол наклона диаграммы
   $p1->SetAngle(25);

   // Шрифт для подписей
   $p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);

   // Подписи для сегментов диаграммы
   $p1->SetLegends($legends);
   // Присоединяем диаграмму к графику

   $graph->Add($p1);
   // Выводим график

   $graph->Stroke();
?>

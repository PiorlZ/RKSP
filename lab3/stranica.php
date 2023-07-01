<?php
$S1 = file('s1.txt');
$S2 = file('s2.txt');
$S3 = file('s3.txt');
foreach ($S1 as $i=>$a) {
echo $S1[$i].' <br> '.$S2[$i].' <br>'.$S3[$i]."<br>";
}
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
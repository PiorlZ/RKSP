<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
<?php 
	for ($i=0; $i<100; $i++) 
	{
		echo ('<br/>');
		for ($j=10; $j<24; $j++) 
		{
			if ($j == 16) continue;
			echo ($j . " ");
			if (($j > 11) && ($j < 16)) echo ($j . " ");
		}
	echo (" ");
	}
?>
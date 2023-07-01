<?php
$times = array("PHP"=>"14.30", "Lisp"=>"12.00","Perl"=>"15.00", "Unix"=>"14.00");
$lectors =array ("PHP"=>"Василий Васильевич", "Lisp"=>"Иван Иванович", "Perl"=>"Петр Петрович","Unix"=>"Семен Семенович");
// задаем подпись письма как константу
define ("SIGN", "С уважением, администрация");
//задаем время
define ("MEETING_TIME","18.00");
// задаем дату собрания
$date="12 мая";
// составляем текст сообщения
$str="Здравствуйте, уважаемый ". $_POST["first_name"]. " " . $_POST["last_name"]. "!<br>";
$str .="<br> Сообщаем вам, что ";
//сохраним список курсов
$kurses = $_POST["kurs"];
//если не выбран ни один курс
if (!isset($kurses)) {
$event ="следующее собрание студентов";
$str .= "$event состоится $date ". MEETING_TIME . "<br>";
}
else
{ //если хотя бы один курс выбран
$event= "выбранные вами лекции состоятся $date <ul>";
$lect="";
for ($i=0;$i<count($kurses);$i++)
{
$k= $kurses[$i];
$lect =$lect . "<li> лекция по $k в $times[$k]";
$lect .=" (Ваш лектор, $lectors[$k])";
}
$event =$event . $lect . "</ul>";
$str .="$event";
}
$str .= "<br>". SIGN;
echo $str;
?>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
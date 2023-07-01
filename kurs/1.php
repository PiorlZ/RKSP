<?php
$uploaddir = "D:/xampp/htdocs/pZi/kursa4/sdad/";
if (!is_dir($uploaddir)) {
    mkdir($uploaddir, 0777, true);
}
$uploadfile = $uploaddir . basename( @$_FILES['file']['name']);
$filename = 'test.txt';/*
$allowed= array('txt','docx','php');
$type = @$_FILES['input_tag_name']['name'];
$ext = pathinfo($type, PATHINFO_EXTENSION); не получилось*/
if (mime_content_type(@$_FILES['file']['tmp_name']) == "text/plain")  {
  move_uploaded_file(@$_FILES['file']['tmp_name'], @$uploadfile); 
}
else{

 echo 'Неверный формат файла';

}
$file = $uploaddir . $filename;
ini_set('highlight.comment', '#000000; font-weight: bold;');
echo "<table bgcolor=#EEEEEE><tr><td width=30>";
for ($i = 1; $i <= count(file($file)); $i++) echo $i.".<br>";
echo "</td><td>";
highlight_file($file);
echo "</td></tr></table>";
?>
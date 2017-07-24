<?php
header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
header('Content-type: text/html; charset=UTF-8');
 
$fix = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$refer = $_SERVER['HTTP_REFERER'];
$ip = $_SERVER['REMOTE_ADDR'];
$files = fopen("404.csv","a+");
$time = date("H:i /d M");
$save_string = $refer.' || '.$time.' || '.$ip.' || '.$fix;
fputs($files,$save_string."\r\n");
fclose($files);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>404 Not Found</title>
 
</head>
<body>
<!-- Контент  -->
<div class="content">
Запрашиваемая Вами страница не найдена <br/> или перемещена по другому адресу.</h1>
</div>
 
</body>
</html>
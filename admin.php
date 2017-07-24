<?<!DOCTYPE html>
<?php

//header('Location: http://localhost/ redirec2t.php ');
?>


<html>
	<head>
	<title></title>
	</head>
<body>



<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Проверяем загружен ли файл

if (!empty($_FILES)) {

  //echo "Last file: ".getLastNumber();
  // Если файл загружен успешно, перемещаем егоC:\\\
  // из временной директории в конечную

  //move_uploaded_file($_FILES["filename"]["tmp_name"], "./tests/" . $_FILES["filename"]["name"]);
  move_uploaded_file($_FILES["userfile"]["tmp_name"], "tests/".(getLastNumber()+1).".json");
  echo "Загружено";
  
}



function getLastNumber(){
  $files = scandir("tests");
  $max = 0;
  foreach($files as $file){
    $n = (int) pathinfo($file, PATHINFO_FILENAME);
    if($max < $n) $max = $n;
  }
  echo $max;
  return $max;
}


?>
   <form action="list.php" method="GET">
          <input type="submit" value="К списку тестов"><br>
      </form>



</body>
</html>
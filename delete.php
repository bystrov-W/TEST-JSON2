<!DOCTYPE html>
<html>
<head>
	<title>Удаление</title>
</head>
<body>

<?php
error_reporting(E_ALL & ~E_NOTICE);

      $Files = '\xampp\htdocs\Session\Tests' ;
      chmod('\xampp\htdocs\Session\Tests', 0755);;
  	  $c = count($files);
    	if (count($files) > 0)
    		echo $files ;
     {
        		if (file_exists('./Tests/'))
    foreach (glob('./Tests/') as $file)
        unlink($file);;
            }  
    



//$dir ='/Test/';
//$list=scandir($dir);
//$z=count(scandir($dir))-1;
//$x=2;
//do {
    //echo $list[$x],"  ", " ", "Файл номер - ", $x-1, "</br>"; 
    
//}   while ($x++<$z);


?>

</body>
</html>
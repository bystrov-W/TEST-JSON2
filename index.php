<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Login</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
      <div class="caption">Login System </div>
      <div id="icon">&nbsp;</div>
      <div id="result">
		Hello <?php echo $_SESSION['userName']; ?> ! <br/>
		<p><a href="logout.php"> To log out click here!</a></p>
		<p><a href="test.php"> TEST!</a></p>
		<p><a href="admin.php"> Загрузить новый тест!</a></p>
		<p><a href="delete.php">Удалить тест (в разработке) !</a></p>
	  </div>	
	      </div>
</body>   

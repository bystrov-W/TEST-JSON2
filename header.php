<?php
	//Включаем сообщения об ошибках
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
		
?>

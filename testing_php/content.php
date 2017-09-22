<?php
	$category= isset($_GET["category"]) ? $_GET["category"] : '';
	
	if($category=="inicio" || $category=='')
		include_once("inicio.php");
	else if($category=="contacto")
		include_once("contacto.php");
	else
		include_once("inicio.php");
?>
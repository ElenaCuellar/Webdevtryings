<?php
	include_once("DatabaseConnection.php");
	include_once("UserClass.php");
	$dbAccess = new DatabaseConnection("localhost","bdpruebas","root","clave");
	$dbAccess->connection();
	$userClass = new UserClass($dbAccess);
?>
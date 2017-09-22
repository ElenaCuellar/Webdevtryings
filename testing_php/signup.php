<?php
	include_once("instance.php");
	include_once("UserClass.php");
	include_once("User.php");
	
	$usuario= isset($_POST["nomb"]) ? $_POST["nomb"] : '';
	$contras= isset($_POST["passw"]) ? $_POST["passw"] : '';
	$tipo= isset($_POST["tipoCuenta"]) ? $_POST["tipoCuenta"] : 'Usuario';
	$userClass = new UserClass($dbAccess);
	
	//Si el nombre no existe previamente lo creamos. Si existe tiene que escoger otro nombre.
	if($userClass->nameExists($usuario)==0){
		$userClass->insertUser($usuario,$contras,$tipo);
		
		$userItem = new User($usuario,$contras,$dbAccess);
		session_start();
		$_SESSION['user'] = $usuario;
		$_SESSION['userId'] = $userItem->getId();
		header('location: index.php');
	}else{
		header('location: index.php');
	}
?>
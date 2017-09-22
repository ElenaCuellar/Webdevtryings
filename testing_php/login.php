<?php
	include_once("instance.php");
	include_once("User.php");
	$usuario= isset($_POST["user"]) ? $_POST["user"] : '';
	$contras= isset($_POST["password"]) ? $_POST["password"] : '';
	$userItem = new User($usuario,$contras,$dbAccess);
	
	if($userItem->checkUser()==1){
		session_start();
		$_SESSION['user'] = $usuario;
		$_SESSION['userId'] = $userItem->getId();
		header('location: index.php');
	}
	else
		header('location: index.php');
?>
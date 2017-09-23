<?php
	include_once("instance.php");
	include_once("UserClass.php");
	
	$nuevaP = isset($_GET['nuevaP']) ? $_GET['nuevaP'] : '';
	
	if($nuevaP!=''){
		$userClass = new UserClass($dbAccess);
		session_start();
		$id = $_SESSION['userId'];
		$userClass->updatePass($id,$nuevaP);
		header('location: index.php');
	}else{
		header('location: index.php?category=perfil');
	}
?>
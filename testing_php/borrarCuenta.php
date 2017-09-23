<?php
	include_once("instance.php");
	include_once("UserClass.php");
	
	$userClass = new UserClass($dbAccess);
	session_start();
	$id = $_SESSION['userId'];
	$userClass->deleteUser($id);
	include_once("logout.php");
?>
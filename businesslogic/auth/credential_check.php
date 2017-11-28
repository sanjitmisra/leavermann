<?php 
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/datalogic/ConnectDb.php');

	$isAuthenicated = ((authenticateUser($username, $password) == 1) ? 1 : 0);

	echo $isAuthenicated;
?>
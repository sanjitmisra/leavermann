<?php 
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/datalogic/ConnectDb.php');

	$isAuthenicated = ((authenticateUser($username, $password) == 1) ? 1 : 0);
	
/*
	if (authenticateUser($username, $password) == 1)  
	{
		$isAuthenicated = 1;
	}
	else
	{ 
		$isAuthenicated = 0;
	}	*/
	
	echo $isAuthenicated;
?>
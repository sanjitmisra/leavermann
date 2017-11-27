<?php 
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	//echo "This was returned from the server";

	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/datalogic/ConnectDb.php');

	if (authenticateUser($username, $password) == 1)  
	{
		$isAuthenicated = 1;
	}
	else
	{ 
		$isAuthenicated = 0;
	}	
	echo $isAuthenicated;
?>
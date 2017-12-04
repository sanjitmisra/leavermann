<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/datalogic/ConnectDb.php');
	$isAuthenicated = ((authenticateUser($username, $password) == 1) ? 1 : 0);
	if($isAuthenicated	== "1")
	{
		$_SESSION['id'] = $username;
	}
	else
	{
		$_SESSION['id'] = "In the else of cred_check";
	}
	echo $isAuthenicated;
?>
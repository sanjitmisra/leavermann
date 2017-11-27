<?php
	function authenticateUser($name, $pass)
	{
		$servername = "localhost";
		$username = "leavermann";
		$password = "treadstone@1";
		$dbname = "Leavermann";

		// Create connection
		$mysqli = new mysqli($servername, $username, $password, $dbname);
		$result = $mysqli->query("SELECT * FROM Users WHERE username = '" . $name . "' AND password= '" . $pass . "'");
		if ($result->num_rows > 0) 
		{
			$retval = 1;
		} 
		else 
		{
			$retval = 0;
		}
		
		$result->close();
		$mysqli->close();
		return $retval;
	}
?>

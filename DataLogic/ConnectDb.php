<?php
	echo "<H4> In the data directory </br>";
	function authenticateUser($name, $password)
	{
		$servername = "localhost";
		$username = "leavermann";
		$password = "treadstone@1";
		$dbname = "Leavermann";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT COUNT(*) AS usercount FROM Users WHERE username=$name AND password=$password";
		$result = $conn->query($sql);
		$data=mysql_fetch_assoc($result);

		if ($data[usercount] > 0) 
		{
			$retval = 1;
		} 
		else 
		{
			$retval = 0;
		}
		
		$conn->close();
		return $retval;
	}
?>

<?php
	function authenticateUser($name, $pass)
	{
		$servername = "localhost";
		$username = "leavermann";
		$password = "treadstone@1";
		$dbname = "Leavermann";

		// Create connection
		$mysqli = new mysqli($servername, $username, $password, $dbname);
		$result = $mysqli->query("SELECT id FROM Migrations ORDER BY id DESC LIMIT 1");
		$lastRunMigrationId = $result->fetch_assoc();

		// Read the filenames in the migrations folder and determine which to run
		$migrationsFiles = scandir($_SERVER['DOCUMENT_ROOT'] . '/leavermann/migrations');

		// -1 as the last file is the runmigrations file itself
		$lastIndex = sizeof($migrationsFiles) - 1;

		// Run all not run migrations
		if($lastIndex > intval($lastRunMigrationId))
		{
			foreach($migrationsFiles as $value)
			{
				$scriptNum = explode('_', $value);
				if (intval[$scriptNum[1]] > $lastIndex)
				{
					shell_exec('mysql -u leavermann -ptreadstone Leavermann < migrations_' . $scriptNum[1]);
				}
			}
		}
		
		$result->close();
		$mysqli->close();
		return $retval;
	}
?>

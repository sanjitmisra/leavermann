<?php
	//echo $_SERVER['DOCUMENT_ROOT'];
	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/DataLogic/ConnectDb.php');
		
	if (authenticateUser($_POST["username"], $_POST["password"]) == 1)  
		{
			$PageTitle="Authenticated";
			$isAuthenicated = 1;
		}
	else
		{ 
			$PageTitle="Unauthorized";
			$isAuthenicated = 0;
		}	
 
?>
<?php include_once('header.php'); ?>

<?php 
	if ($isAuthenicated == 1)  
	//if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
		$PageTitle="Authenticated";
		echo "<H1> Welcome to Leavermann, "; 
		echo ucfirst($_POST["username"]);
	}
	else
	{
		echo "Unauthorized!!";	
	}
?>

<?php
 include_once('footer.php');
?>
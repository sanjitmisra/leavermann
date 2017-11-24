<?php
	
	include( $_SERVER['DOCUMENT_ROOT'] . '/Leavermann/DataLogic/ConnectDb.php');
		
	if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
		{
			$PageTitle="Authenticated";
		}
	else
		{ 
			$PageTitle="Unauthorized";
		}	
 
?>
<?php include_once('header.php'); ?>

<?php 
	if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
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
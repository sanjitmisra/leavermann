<?php
	
if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
		$PageTitle="Authenticated";
	}
else
	{ 
		$PageTitle="Failed Auth";
	}	
 
?>
<?php include_once('header.php'); ?>

<?php 
	if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
		$PageTitle="Authenticated";
		echo "Welcome to Leavermann, "; 
		echo $_POST["username"];
	}
	else
	{
		
		echo "Unauthorized!!";	
	}
?>

<?php
 include_once('footer.php');
?>


<?php
	
	function customPageHeader(){?>
  		<!--Arbitrary HTML Tags-->
	<?php }
	include_once('header.php');
?>

<?php 
	if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
		$PageTitle="Authenticated";
		echo "Welcome to Leavermann, "; 
		echo $_POST["username"];
	}
	else
	{
		$PageTitle="Failed Auth";
		echo "Unauthorized!!";	
	}
?>

<?php
 include_once('footer.php');
?>


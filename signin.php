<?php
	$PageTitle="Authenticated";
	function customPageHeader(){?>
  		<!--Arbitrary HTML Tags-->
	<?php }
	include_once('header.php');
?>

s<?php 
	if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
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
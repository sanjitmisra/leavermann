<html>
<body>
	<?php if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
	{
		echo "Welcome to Leavermann, "; 
		echo $_POST["username"];
	}
	else
	{
		echo "Unauthorized!!";	
	}
?>

</body>
</html>
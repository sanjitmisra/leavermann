<html>
<body>
	<?php if($_POST["username"] == "rikers" && $_POST["password"] == "2017")  ?>
	{
		Welcome to Leavermann <?php echo $_POST["username"]; ?><br>
	}
	<? php else ?>
	{
		Welcome Imposter!!	
	}
</body>
</html>
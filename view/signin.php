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


<?php 
	include_once('header.php'); 
?>

<div class = row>
    <div class = col-sm-2>
    	<?php 
			include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/view/includes/sidenavbar.php');
		?>
    </div>
	<div class = col-sm-10>
		<div class = row style="padding-top:100px;">
			<?php 
				if ($isAuthenicated == 1)  
				//if ($_POST["username"] == "rikers" && $_POST["password"] == "2017")  
				{
					$PageTitle="Authenticated";
					echo "<H1> Welcome to Leavermann, "; 
					echo ucfirst($_POST["username"]) . "!!";
				}
				else
				{
					echo "Unauthorized!!";	
				}
			?>
		</div>

		<?php
		 include_once('footer.php');
		?>
	</div>

</div>
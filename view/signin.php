<?php
	include( $_SERVER['DOCUMENT_ROOT'] . '/leavermann/datalogic/ConnectDb.php');

		
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
<!-- Page content begins here -->
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
				{
					$PageTitle="Authenticated";
					echo "<H1> Welcome to Leavermann, "; 
					echo ucfirst($_POST["username"]) . "!!";
				}
				else
				{
					//Redirect to home page
					echo "<script> location.href='/leavermann/view/index.php'; </script>";
        			exit;
				}
			?>
		</div>

		<?php
		 include_once('footer.php');
		?>
	</div>
</div>
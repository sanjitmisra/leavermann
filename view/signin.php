<?php 
	include_once('header.php'); 
	session_start();
	
	if(!isset($_SESSION['id']))
	{	
		header('location: index.php');
	}
	
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
				$PageTitle="Authenticated"; 
				echo "<H1> Dashboard"; 
			?>
		</div>

		<?php
		 	include_once('footer.php');
		?>
	</div>
</div>
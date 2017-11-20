<?php
	$PageTitle="Leavermann - Landing";
	function customPageHeader(){?>
  		<!--Arbitrary HTML Tags-->
	<?php }
	include_once('header.php');
?>

<!-- The Body Content Begins Here-->
<section id="header" class="appear" style="background-color: rgb(240,248,255)">
   <div class = "row" style="padding-top:15px;">
					   
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
        </button>
     		
        <div class="form-group col-sm-6" ></div>	
    
        <div class="form-group col-sm-6" >
	        <div class="form-group col-sm-3" >
	            <input type="text" class="form-control" id="uname" placeholder="Id">

	        </div>
	        <div class="form-group name2 col-sm-3">
	            <input type="Password" class="form-control" id="pwd" placeholder="Password">
	        </div>

	        <div class="form-group name2 col-sm-3">
	            <button type="button" class="btn btn-primary">Log In</button>
	        </div>
	        <div class="form-group name2 col-sm-3">
	            <button type="button" class="btn btn-primary" style="background-color: rgb(0,0,0); ">Sign Up</button>
	        </div>
		</div>	      
	</div>
</section>

<section class="featured" style="background-color: rgb(65,105,225)">
      <div class="container" >
        <div class="row mar-bot40" >
          <div class="col-md-6 col-md-offset-3">

            <div class="align-center">
              <i class="fa fa-flask fa-5x mar-bot20"></i>
              <h2 class="slogan">Leavermann</h2>
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- services -->
<section id="section-services" class="section pad-bot30">
      <div class="container">

        <div class="row mar-bot40">
          <div class="col-lg-4"> 
           <div class="align-center"> 
              <i class="fa fa-rocket fa-5x"></i> 
              <p>Super fast deployment and live roll out. No more waiting on an endless queue.Get ahead, get quick!!
              </p>
            </div> 
          </div> 

          <div class="col-lg-4"> 
            <div class="align-center">
              <i class="fa fa-envelope fa-5x"></i> 
              <p>Get alerts for every activity that happens. Never stay out of touch!!
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="align-center">
              <i class="fa fa-key fa-5x"></i>
              <p>Security right from the word go. Integrate with existing identity solutions or subscribe to our custom services. No more server breaches!!
              </p>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- The Body Content Ends Here-->

<?php
 include_once('footer.php');
?>
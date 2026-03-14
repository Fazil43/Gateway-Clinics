<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:      template.php
 * @Package:   GetSimple
 * @Action:    Bootstrap3 for GetSimple CMS
 *
 *****************************************************/
?>
<?php
include ('header.inc.php');
 ?>
<div class="page-header">
	<div class="container"> 
  		<div class="col-md-6"><h1><?php get_page_title(); ?></h1> </div>
  		<div class="col-md-6"> 
  			<ul class="pull-right breadcrumb">
              	<li><a href="<?php get_site_url(); ?>">Home</a></li>
                <li class="active"><?php get_page_title(); ?></li>
            </ul>
     	</div>
  	</div>
</div> 
  
  

<div class="container">
	<div class="col-md-9" style="background: transparent url(&quot;http://123online.co.in/gateway1/data/uploads/bg.png&quot;) repeat scroll 0% 0%;">
         <?php get_page_content(); ?>
    </div>
	<div class="col-md-3"  id="sticky" >
   		<div  id="sidebar">
        	<div class="widget-title">
				<h5 class="title" style="color:#333;"><b>Quick Links</b></h5>
        	</div>
       		<?php get_component('sidebar'); ?>
          	<div class="widget-title">
                <h5 class="title" style="color:#333;"><b>Quick Enquiry</b></h5>
            </div>
				<form class="contactForm" role="form" method="post">
						<div class="notification"></div>
						<div class="form-group">
							<label for="requirement" class="control-label sr-only">requirement</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil"> </i></span>
								<textarea class="form-control requirement required"  rows="3" placeholder="Describe your Requirement" name="requirement"> </textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="fname" class="control-label sr-only">Email</label>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
								<input type="email" name="email" class="form-control email required" placeholder="Email">
							</div>
						</div>
						<div class="additional">
							<div class="form-group">
								<label for="fname" class="control-label sr-only">Name</label>

								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"> </i></span>
									<input type="text" class="form-control required" placeholder="Name" name="fname">
								</div>
							</div>

							<div class="form-group">

								<label for="phone" class="control-label sr-only">Phone</label>
								<div class="input-group">
									<span class="input-group-addon" style="padding-right:17px;"><i class="fa fa-mobile-phone"> </i></span>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
								</div>
							</div>

						</div>

						<div class="form-group">

							<button type="submit" class="btn btn-success">
								Send Email / SMS
							</button>

						</div>

						<div class="progress">
							<div class="progress-bar progress-bar-striped active"  role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
								<span class="sr-only">inprogress</span>
							</div>
						</div>

					</form>
  		</div>
	</div>
	<script >
  $("#sticky").stick_in_parent();
</script>   
		 
</div>
		  	
    

<div class="clearfix"></div>
   
 
	  
<?php
include ('footer.inc.php');
 ?>

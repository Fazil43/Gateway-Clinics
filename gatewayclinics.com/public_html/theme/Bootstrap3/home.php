<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:      home.php
 * @Package:   GetSimple
 * @Action:    Bootstrap3 for GetSimple CMS
 *
 *****************************************************/
?>
<?php
	include ('header.inc.php');
 ?>
 

        <?php get_page_content(); ?>
 
		<div class="our-main">
	<div class="row">
		
		<div class="col-lg-12  col-sm-12">
		 <?php get_component('home-bottom'); ?><div class="clearfix"></div><br><br>
		<?php get_component('homepage-bottom'); ?>	
			<div align="center" class="col-sm-4 col-md-4"></div>
			   <div align="center" class="col-sm-4 col-md-4">
			</div>
			<br>
		</div>
	</div>
</div>
          
<?php
	include ('footer.inc.php');
 ?>

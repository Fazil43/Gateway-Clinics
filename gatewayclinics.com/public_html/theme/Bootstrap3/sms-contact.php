<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:      contact.php
 * @Package:   GetSimple
 * @Action:    Bootstrap3 for GetSimple CMS
 *
 *****************************************************/

//$ThemeSettings = Bootstrap3_Settings();
/*
 $Name = '';
 $Email = '';
 $Subject = '';
 $Url = '';
 $Body = '';

 $HasErrorName = '';
 $HasErrorEmail = '';
 $HasErrorSubject = '';
 $HasErrorBody = '';

 $FormError = '';
 $MailError = false;
 $Success = false;

 if (isset($_POST['cmdSendMessage'])) {
 $Name = $_POST['txtName'];
 $Email = $_POST['txtEmail'];
 $Subject = $_POST['txtSubject'];
 $Url = $_POST['txtUrl'];
 $Body = $_POST['txtBody'];

 if (empty($Name)) {
 $HasErrorName = "has-error";
 $FormError .= '<li>Missing your name</li>';
 }
 if (!check_email_address($Email)) {
 $HasErrorEmail = "has-error";
 $FormError .= '<li>Invalid email address</li>';
 }
 if (empty($Subject)) {
 $HasErrorSubject = "has-error";
 $FormError .= '<li>Missing a subject line</li>';
 }
 if (empty($Body)) {
 $HasErrorBody = "has-error";
 $FormError .= '<li>Missing the message body</li>';
 }

 if (empty($FormError)) {
 if (!empty($Url)) {
 $Subject = "(CONTACT_SPAM) " . $Subject;
 $Body = "Url: $Url\n\n" . $Body;
 }

 if (@mail($ThemeSettings -> ContactEmail, $Subject, $Body, 'From: "' . str_replace('"', "'", $Name) . '" <' . $Email . '>')) {
 $Success = true;

 $Subject = '';
 $Url = '';
 $Body = '';
 } else {
 $MailError = true;
 }
 }
 }*/
?>
<?php
include ('header.inc.php');
 ?>
 <div class="page-header">
       	<div class="container"> 
  		<div class="col-md-6"><h1><?php get_page_title(); ?></h1> </div>
  	<div class="col-md-6"> 
  		<ul class="pull-right breadcrumb">
                        <li>
                            <a href="<?php get_site_url(); ?>">Home</a>
                        </li>
                        <li class="active"><?php get_page_title(); ?></li>
                    </ul>
     </div>
  </div>
  </div> 
<div class="container">
      <div class="row">
        <div class="col-md-12">
		 <div><?php get_page_content(); ?></div>
		 <hr>
          <div class="col-md-4 col-sm-4">
			  <h4 id="contact" class="title">Contact Us</h4>
		  <form class="contactForm" role="form" method="post">
<div class="notification"> </div>
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
    
      <button type="submit" class="btn btn-success">Send Email / SMS</button>
   
  </div>
  
  <div class="progress">
  <div class="progress-bar progress-bar-striped active"  role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">inprogress</span>
  </div>
</div>
  
  </form>
  </div>
  <div class="col-md-8">
                        	<h4 class="title" id="contact">Addresses</h4>
							
	  <address class="col-sm-6 col-md-6" style="border-right:1px solid #ccc">
			<h5 class="title">Coimbatore</h5>
			<b>Gateway Clinics &amp; Hospitals</b><br />
			43, West Periyasamy Road,<br />
			(Near Eye Foundation), R.S. Puram,<br />
			Coimbatore - 641 002.<br />
			<br />
		  <strong>Mobile No</strong> : <a href="tel:+91 92457 31318">+91-92457-31318</a><br />
		  <strong>Land line</strong> : <a href="tel:0422 2542244">+91 0422 2542244</a> | <a href="tel:0422 6472244">+91 0422 6472244</a><br />
			<br />
			<strong>Consultations at</strong> : Morning : 8:00 am to 7:00 pm</address>
		<address class="col-sm-6 col-md-6">
			<h5 class="title">Chennai</h5>
			<b>Gateway Clinics &amp; Hospitals</b><br />
			Deepam Hospital Campus, 107A GST Road, Chrompet,<br />
			Near Pallavaram Flyover,<br />
			Chennai - 600 044.<br />
			<br />
			<strong>Mobile No</strong> : <a href="tel:+91 94447 77622">+91-94447-77622</a> | <a href="tel:+91 93447 77622">+91-93447 77622</a><br />
			<br />
			<strong>Consultations at</strong> : Morning : 8:00 am to 7:00 pm</address>
						</div><!-- map -->
 
        </div>
        
   
      </div>
</div>
<?php
include ('footer.inc.php');
 ?>





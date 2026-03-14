<?php
@ob_start();
error_reporting(0);
include("connection/connection.php");
$root=$_SERVER['root']."/doctorweb"; // local

?>

<?php


// Set email variables
$email_to = 'gatewayclinicscoimbatore@gmail.com';
$email_subject = 'Marvelous Web Solutions';

// Set required fields
$required_fields = array('Fullname','Mobile','Email','Address','Complaint');

// set error messages
$error_messages = array(
	'Fullname' => 'Please enter a Patient Name to proceed.',
	'Mobile' => 'Please enter a Mobile to proceed.',
	'Email' => 'Please enter a valid Email to continue.',
	'Address' => 'Please enter a Address to proceed.',
	'Complaint' => 'Please enter your Message to continue.',
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'Email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gateway Clinics</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 	
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<style type="text/css">
@font-face {
  font-family: 'MyWebFont';
  src: url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.eot'); /* IE9 Compat Modes */
  src: url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.woff') format('woff'), /* Modern Browsers */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.svg#svgFontName') format('svg'); /* Legacy iOS */
}
@font-face {
  font-family: 'MyWebFont2';
  src: url('fonts/DroidSans/351806641-DroidSans.eot'); /* IE9 Compat Modes */
  src: url('fonts/DroidSans/351806641-DroidSans.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/DroidSans/351806641-DroidSans.woff') format('woff'), /* Modern Browsers */
       url('fonts/DroidSans/351806641-DroidSans.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/DroidSans/351806641-DroidSans.svg#svgFontName') format('svg'); /* Legacy iOS */
}
</style>
<!--title animation-->
<script type="text/javascript">
function tb8_makeArray(n){
this.length = n;
return this.length;
}
tb8_messages = new tb8_makeArray(3);
tb8_messages[0] = "Gateway Clinics";
tb8_messages[1] = "Gateway Clinics";
tb8_messages[2] = "Gateway Clinics";
tb8_rptType = 'infinite';
tb8_rptNbr = 5;
tb8_speed = 100;
tb8_delay = 2000;
var tb8_counter=1;
var tb8_currMsg=0;
var tb8_tekst ="";
var tb8_i=0;
var tb8_TID = null;
function tb8_pisi(){
tb8_tekst = tb8_tekst + tb8_messages[tb8_currMsg].substring(tb8_i, tb8_i+1);
document.title = tb8_tekst;
tb8_sp=tb8_speed;
tb8_i++;
if (tb8_i==tb8_messages[tb8_currMsg].length){
tb8_currMsg++; tb8_i=0; tb8_tekst="";tb8_sp=tb8_delay;
}
if (tb8_currMsg == tb8_messages.length){
if ((tb8_rptType == 'finite') && (tb8_counter==tb8_rptNbr)){
clearTimeout(tb8_TID);
return;
}
tb8_counter++;
tb8_currMsg = 0;
}
tb8_TID = setTimeout("tb8_pisi()", tb8_sp);
}
tb8_pisi()
</script>
<!--end title animation-->
<link rel="shortcut icon" href="images/fav.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="css/media.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/ndrop.css" rel="stylesheet" type="text/css">

<!-- banner -->
<link rel="stylesheet" type="text/css" href="css/2.css" />
<script type="text/javascript" src="js/a.js"></script>
<!-- end banner -->


<script type="text/javascript" src="validation/validation2.js"></script>
<script type="text/javascript" src="validation/validation.js"></script>
	
	<script type="text/javascript">
var nameError = '<?php echo $error_messages['Fullname']; ?>';
var companyError = '<?php echo $error_messages['Mobile']; ?>';
		var emailError = '<?php echo $error_messages['Email']; ?>';
		var phoneError = '<?php echo $error_messages['Address']; ?>';
		var commentError = '<?php echo $error_messages['Complaint']; ?>';
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script> 

</head>

<body>
<div class="top">
<div class="container">

<div class="row-fluid">
<div class="span12">
<div class="span3"><img src="images/logo.png"></div>
<div class="span2"><div style="padding-top:20px;"><!-- <a href="#"><img src="images/company.jpg"></a> --> </div></div>
<div class="span7 pull-right">
<div class="button">


          <?php include("headermenu.php");?>




</div>
</div>
</div>
</div>

</div>
</div><!-- end top -->
<div style="padding-top:2px; background-color:#0b5789;"></div>
<div class="banner">
<div id="wowslider-container1">
<div class="ws_images"><ul>
<?php
$sql="select * from $_table50";
$rs=mysql_query($sql,$link);
$rscount=mysql_num_rows($rs);
if($rscount!=0)
{
while($rsdata=mysql_fetch_array($rs))
{
$c_id=$rsdata['id'];
$image4=$rsdata['image'];
$encoded_cid=base64_encode($c_id);
?>

<li><img src="<?php echo $root;?>/admin/<?php echo $image4;?>" alt="" title="" id="wows1_0"/></li>
<?php
}
}
?>
</ul></div>
</div>
</div>
<div style="padding-top:2px; background-color:#0b5789;"></div>
<div style="padding-top:20px;"></div>

<div class="welocme">
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="span3">
<div class="wid"><h4 style="text-align:center; background-color:#0B5789; color:#FFF; margin:0; padding-top:10px; padding-bottom:10px;" class="wid2">Our Services</h4>
<ul class="wid3"><?php $sel="SELECT  * FROM  $_table23";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
		while($fetch_sr_data=mysql_fetch_array($result))
		{ 
        	$c_id=$fetch_sr_data[id];
			$category=$fetch_sr_data[category];
			$encoded_cid=base64_encode($c_id);?>

<li><a class="se" href="?cid=<?php echo $encoded_cid;?>"><?php echo $category;?></a></li>
<?php
		}
		?>
</ul></div>
</div>

<div class="span9"><h4 class="ali4" style="padding-bottom:20px;">Contact Us</h4>
<div class="row-fluid">
<div class="span12">

<div class="span7">
<div id="formwrap">

<?php if($form_complete === FALSE): ?>
<form action="contact.php" method="post" id="comments_form" >
<div class="row-fluid">
<div class="label">Patient Name :</div><!--end of .label-->
<div class="input">
<input type="text" id="Fullname" class="detail" name="Fullname" onfocus="setValue(this)" onblur="setValue(this)" value="<?php echo isset($_POST['Fullname'])? $_POST['Fullname'] : ''; ?>"/><?php if(in_array('Fullname', $validation)): ?><span class="error"><?php echo $error_messages['Fullname']; ?></span><?php endif; ?>
</div><!--end of .input-->
<div class="context"></div><!--end of .context-->
</div><!--end of row-->

<div class="row-fluid">
<div class="label">Mobile :</div><!--end of .label-->
<div class="input">
<input type="text" id="Mobile" class="detail" name="Mobile"  value="<?php echo isset($_POST['Mobile'])? $_POST['Mobile'] : ''; ?>"/><?php if(in_array('Mobile', $validation)): ?><span class="error"><?php echo $error_messages['Mobile']; ?></span><?php endif; ?>
</div>
<!--end of .input-->
<div class="context"></div><!--end of .context-->
</div><!--end of row-->

<div class="row-fluid">
<div class="label">Email :</div><!--end of .label-->
<div class="input">
<input type="text" id="Email" class="detail" name="Email"  value="<?php echo isset($_POST['Email'])? $_POST['Email'] : ''; ?>"/><?php if(in_array('Email', $validation)): ?><span class="error"><?php echo $error_messages['Email']; ?></span><?php endif; ?>
</div><!--end of .input-->
<div class="context"></div><!--end of .context-->
</div><!--end of row-->

<div class="row-fluid">
<div class="label">Address :</div><!--end of .label-->
<div class="input">
<textarea id="Address" name="Address" class="mess"><?php echo isset($_POST['Address'])? $_POST['Address'] : ''; ?></textarea><?php if(in_array('Address', $validation)): ?><span class="error"><?php echo $error_messages['Address']; ?></span><?php endif; ?>
</div>
<!--end of .input-->
<div class="context"></div><!--end of .context-->
</div><!--end of row-->

<div class="row-fluid">
<div class="label">My Complaint :</div><!--end of .label-->
<div class="input2">
<textarea id="Complaint" placeholder="I need an appoinment for stomoch pain" name="Complaint" class="mess"><?php echo isset($_POST['Complaint'])? $_POST['Complaint'] : ''; ?></textarea><?php if(in_array('Complaint', $validation)): ?><span class="error"><?php echo $error_messages['Complaint']; ?></span><?php endif; ?>
</div>
<!--end of .input-->
</div><!--end of row-->

<div class="submit">
<input type="submit" id="submit" name="submit" value="Submit" />
</div><!--end submit-->
</form>




<?php else: ?>
<h4 style="color:#6E238C;">Thanks for sending your message! We'll get back to you shortly.</h4>
<?php endif; ?>


</div>
</div>
<div class="span5">
Consultations at :<br/>
Morning : 8:00 am to 7:00 pm
<h4 style="color:#0B5789;">Gateway Clinics & Hospitals</h4>
Mobile No : +91-92457-31318<br/>
Land line : +91 422 6472244<br/>
<b style="padding-left:71px; font-weight:normal;">+91 422 2542244</b><br/><br/>
Address : 43, West Periyasamy Road<br/>
<b style="padding-left:71px; font-weight:normal;">(Near Eye Foundation),</b><br/>
<b style="padding-left:71px; font-weight:normal;">R.S. Puram, Coimbatore - 641 002.</b>
<br/><br/>
<iframe src="https://www.google.com/maps/d/embed?mid=zmJFho9sU4nc.kHEhBrP2PskI" width="100%" height="300"></iframe>
</div>


</div>
</div>

</div>

</div>
</div>
</div>
</div>







<div class="footer">
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="span3">
<div class="new">
<h4 class="ali6">Endoscopy Atlas</h4>
<div class="row-fluid">
<div class="span12">
<div class="span6"><center><img src="images/foo.jpg"></center><h5 style="text-align:center; color:#FFF;">Normal pylorus</h5></div>
<div class="span6"><center><img src="images/foo2.jpg"></center><h5 style="text-align:center; color:#FFF;">Schatzki's ring</h5></div>
</div>
</div>
</div>
<h4 class="ali2"><a href="http://marvelouswebsolutions.com/doctorweb/services.php?cid=MTI=">Read More</a></h4>
</div>

<div class="span3">
<div class="new new2">
<h4 class="ali6">News and Events</h4>
<marquee loop="true" onMouseOut="start();" onMouseOver="stop();">
<?php
$sql="select * from $_table58";
$rs=mysql_query($sql,$link);
$rscount=mysql_num_rows($rs);
if($rscount!=0)
{
while($rsdata=mysql_fetch_array($rs))
{
$c_id=$rsdata['id'];
$image=$rsdata['image'];
$image2=$rsdata['image2'];
$encoded_cid=base64_encode($c_id);
?>

<a href="news.php?cid=<?php echo $encoded_cid5;?>"><img src="<?php echo $root;?>/news/<?php echo $image;?>">
</a>
<?php
}
}
?>
</marquee>
</div>
</div>

<div class="span3">
<div class="new new3">
<h4 class="ali6">Contact Us</h4>
<b>Dr. K. SENDHIL KUMAR</b><br/>
MS, FICS, FACS (USA), DNB (Surg. Gastro) <br/>
Surgical Gastroenterologist & Laparoscopic Surgeon<br/><br/>

43, Periyasamy Road (West),<br/>
Behind Eye Foundation, R.S. Puram,<br/>
Coimbatore - 641 002,<br/>
Tamil Nadu, India.<br/><br/>

Phone : 0422 2542244<br/>
Mobile : 9245731318<br/>
</div>
</div>

<div class="span3">
<div class="new">
<h4 class="ali6">Information</h4>
<ul class="ali7">
<li>Home</li>
<li>About Us</li>
<li>Services</li>
<li>Gallery</li>
<li>Categories</li>
<li>Medical Tourism</li>
<li>Contact Us</li>
</ul>
<h4 class="ali6">Follow Us</h4>
<a href="https://www.facebook.com/gatewayclinics.coimbatore" target="_blank"><img src="images/facebook.png"></a>
<a href="https://twitter.com/gatewayclinics" target="_blank"><img src="images/twitter.png"></a>
<a href="https://www.linkedin.com/hp/?dnr=WOaPpZM66aLsnl3rWx8rDUPB1Kyp_DEHLy7y&trk=nav_responsive_tab_home" target="_blank"><img src="images/linkedin.png"></a>
<a href="https://plus.google.com/107394388861722250197/posts?utm_source=embedded&utm_medium=googleabout&utm_campaign=link" target="_blank"><img src="images/googleplus.png"></a>
<a href="https://in.pinterest.com/gatewayclinics/" target="_blank"><img src="images/p1.png"></a>
<a href="#" target="_blank"><img src="images/p2.png"></a>
<a href="#" target="_blank"><img src="images/p3.png"></a>
</div>
</div>

</div>
</div>

<hr/>
<div style="padding-top:15px;">
<div class="row-fluid"><div class="span12">
<div class="span4"><p style="color:#FFF;">Copyright &#169; 2015 Gateway Clinics</p></div>
<div class="span4 pull-right"><p class="pull-right" style="color:#FFF;">Designed by : <a href="http://marvelouswebsolutions.com" target="_blank" class="ss">Marvelouswebsolutions.com</a></p></div>
</div></div>
</div>
</div>
</div>


<!-- banner -->
<script type="text/javascript" src="js/d.js"></script>
<script type="text/javascript" src="js/e.js"></script>
<!-- end banner -->
<script type="text/javascript" src="js/ndrop1.js"></script>
<script type="text/javascript" src="js/ndrop2.js"></script>

 <!-- click to top -->
       
<script type="text/javascript" src="js/back-to-top.js"></script>
<!-- end click to top -->

 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>

 <?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php

$gettingproductnameid=$_GET['nid'];

$decodednewsid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table45 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$categoryid=$fetch_sr_data[category];
$details=$fetch_sr_data[details];


$subcategoryid=$fetch_sr_data[pname];
$filesize=$fetch_sr_data[filesize];
$main=$fetch_sr_data[main];
$name=$fetch_sr_data[name];
$image=$fetch_sr_data[image];

$details=$fetch_sr_data[details];

$title=$fetch_sr_data[title];

$video=$fetch_sr_data[video];
}

if(!$gettingproductnameid){

				$do="Create";

				}else{

				$do="Update";

				}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Add PostDetails</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
   	<link rel="stylesheet" href="css/responsive-tables.css">
    <script language="javascript" src="city.js"></script>
    <script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<script language="javascript">

var ajax = new Array();

function getCityList(sel)
{
	var countryCode = sel.options[sel.selectedIndex].value;
	document.getElementById('pname').options.length = 0;	// Empty city select box
	if(countryCode.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		var url='getCities.php?countryCode='+countryCode
		//alert(url);
		ajax[index].requestFile =url ;	// Specifying which file to get
		ajax[index].onCompletion = function(){ createCities(index) };	// Specify function that will be executed after file has been found
		ajax[index].runAJAX();		// Execute AJAX function
	}
}

function createCities(index)
{
	var obj = document.getElementById('pname');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	
}



</script>
    <script language="JavaScript">
function Inamodel_validate(theval)
{

if(theval.category.value=="")
{
alert("Select A Category");
theval.category.focus();
return (false);
}

if(theval.pname.value=="")
{
alert("Select A Sub Category");
theval.pname.focus();
return (false);
}
if(theval.image.value=="")
{
alert("Upload the image");
theval.image.focus();
return (false);
}

if(theval.title.value=="")
{
alert("Enter a Title");
theval.title.focus();
return (false);
}
if(theval.video.value=="")
{
alert("Enter a Video Name");
theval.video.focus();
return (false);
}
if(theval.verif_box.value=="")
{
alert("Enter a Verification Code");
theval.verif_box.focus();
return (false);
}
}
</script> <link rel="stylesheet" href="docs/css/bootstrap-3.2.0.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/bootstrap-example.css" type="text/css">
        <link rel="stylesheet" href="docs/css/prettify.css" type="text/css">

        <script type="text/javascript" src="docs/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="docs/js/bootstrap-3.2.0.min.js"></script>
        <script type="text/javascript" src="docs/js/prettify.js"></script>

        <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="dist/js/bootstrap-multiselect1.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                window.prettyPrint() && prettyPrint();
            });
        </script>
</head>
<body>

	
	<!-- Header -->
	<div id="header">
		<div class="shell">
			
			<div id="head">
				<h1><a href="#">Admin Skin</a></h1>
				<div class="right">
					<p>
						Welcome <a href="#"><strong>Administrator</strong></a> | 
						<a href="#">Help</a> |
						<a href="#">Profile Settings</a> |
						<a href="#">Logout</a>
					</p>
				</div>
			</div>
			
			<!-- Navigation -->
			<?php include("header.php");?>
			<!-- End Navigation -->
			
		</div>
	</div>
	<!-- End Header -->
	
	
	
	<!-- Content -->
	<div id="content" class="shell">
		
		<!-- Help Navigation -->
		<div id="help-nav"></div>
		<!-- End Help Navigation -->

		<h6 class="red">Welcome <?php echo $_SESSION['SESS_USER_NAME'];?><br />
		</h6>
		<form action="addvideo.php"method="post" enctype="multipart/form-data" name="example" id="example"  onsubmit="return Inamodel_validate(this);">
		  <table width="1000" border="1" bordercolor="#000000" align="center" cellpadding="1" cellspacing="1">
		    <tr>
		      <td width="817" align="center"><table width="800" border="0" align="center">
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td width="581"><?php include("Message.php");?></td>
	            </tr>
		        <input name="username" type="hidden" value="<?php echo $_SESSION['SESS_USER_NAME'];?>" />
		        
		        <tr>
		          <td  valign="top" class="left">Name</td>
		          <td align="center" valign="top">&nbsp;</td>
		          <td><label class="inputtextfiled">
		            <input name="name" type="text"  class="inputtextfiled" id="name" value="<?php echo $name;?>" />
		          </label></td>
	            </tr>
		        <tr>
		          <td width="129"  valign="top" class="left">Video Link</td>
		          <td width="35" align="center" valign="top">:</td>
		          <td><textarea id="vdeo" name="video" style="height: 170px; width: 500px;"><?php echo $video;?></textarea>
		          EXAMPLE
		          :https://www.youtube.com/watch?v=VX3Gs_VbvuQ(COPY URL VIDEO LINK) </td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        
		        <tr>
		          <td valign="top" class="left">VerificationImage</td>
		          <td align="center" valign="middle" class="inputtextfiled_names">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		          <td><input name="verif_box" type="text"  id="verif_box" class="inputtextfiled"/>
                    <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
                    <br />
                    <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
                    <?php if(isset($_GET['wrong_code'])){?>
                    <div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div>
                    <br />
                  <?php ;}?></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td><input name="step1" type="submit" id="step1" value="<?php echo $do;?>" />
	              <input name="reset" type="reset" id="reset" value="Reset" /></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
	          </table></td>
	        </tr>
	      </table>
      </form>
		<h6 class="red">&nbsp; </h6>		
		<h1>&nbsp;</h1>
	</div>
	
	<!-- End Content -->
</div>

<!-- Footer -->
<?php include("footer.php");?>
<!-- End Footer -->
</body>
</html><?php 
 $action=$_GET['action'];



 
 
 

if(isset($_POST['step1'])){
 
 
$video=$_POST['video'];
if(!get_magic_quotes_gpc()){
$video=addslashes($video);
 }else{
 $video=$video;
 }
 
$username=$_POST['username'];
$verif_box=$_POST['verif_box'];
$createddate=$_POST['createddate'];
$name=$_POST['name'];
$createddate=date('Y-m-d');
	//echo "Image was successfully uploaded.";


if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	setcookie('tntcon','');

} else if(isset($name) and $name!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: addvideo.php?video=$video"."&wrong_code=true");
	exit;
}
				$createdon=$serverdate;	
  
 $insert="insert into $_table45 (username,name,video,createddate)values('$username','$name','$video','$serverdate')";
mysql_query($insert,$link) or die(mysql_error());


  
				
 
 $message=base64_encode('product_success');
header("location:addvideo.php?mes=$message&$random");


  

  
	
 // end for submit

}// end for action 

?>
 
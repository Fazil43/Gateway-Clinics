<?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php

$root=$_SERVER['root']."/doctorweb"; // local



 include("../connection/connection.php");





?><?php

$gettingproductnameid=$_GET['nid'];

$decodednewsid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table54 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$category=$fetch_sr_data[category];
$details=$fetch_sr_data[details];


$subcategoryid=$fetch_sr_data[pname];
$filesize=$fetch_sr_data[filesize];
$main=$fetch_sr_data[main];
$name=$fetch_sr_data[name];
$image=$fetch_sr_data[image];

$details=$fetch_sr_data[details];

$title=$fetch_sr_data[title1];

$video=$fetch_sr_data[video];
}

$encoded_id=base64_encode($c_id);


if(!$gettingproductnameid){

				$do="Update";

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
    <script language="javascript" src="city.js"></script>
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
     <link rel="stylesheet" href="docs/css/bootstrap-3.2.0.min.css" type="text/css">
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
				<h1><a href="#">Admin </a></h1>
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
		<form action="update_mainsimage.php?action=<?php echo $do;?>"method="post" enctype="multipart/form-data" name="example" id="example"  onsubmit="return Inamodel_validate(this);">
		  <table width="1000" border="1" align="center">
		    <tr>
		      <td align="center"><table width="700" border="0" align="center">
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td width="412"><?php include("Message.php");?></td>
	            </tr>
		        <input name="username" type="hidden" value="<?php echo $_SESSION['SESS_USER_NAME'];?>" />
                <input name="updated_id" type="hidden" value="<?php echo $decodednewsid;?>" />
		        <tr>
		          <td width="233" align="center" valign="top" class="inputtextfiled_names"><div align="left">Image</div></td>
		          <td width="41" align="center" valign="middle">:</td>
		          <td><input type="file" name="image"  id="image" /><img src="<?php echo $root;?>/admin/<?php echo $image;?>" /></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
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

include 'libs/img_upload_resize_crop.php';


if($action=='Update')
{
 
 
 

if(isset($_POST['step1']))
{
 $category=$_POST['category'];
  	
$your_image = new _image;
	
	//To Upload
	$your_image->uploadTo = 'image9/';
	$upload = $your_image->upload($_FILES['image']);
	echo "<div>" . $upload . "</div>";
	
	//To Resize
	$your_image->newPath = 'thumbs1/';
	$your_image->newWidth = 200;
	$your_image->newHeight = 291;
	$resized = $your_image->resize();
	echo "<div>" . $resized . "</div>";
	
	//To Crop
	$width = "200";
	$height = "123";
	$fromX = "0"; 
	$fromY = "0";
	$your_image->newPath = 'cropped1/';
	$cropped = $your_image->crop($width,$height,$fromX,$fromY);
	echo "<div>" . $cropped . "</div>";
	
	//echo "Image was successfully uploaded.";

				$createdon=$serverdate;	
				$newsid=$_POST['updated_id'];

// $insert="insert into $_table4 (username,category,pname,title,video,main,details)values('$username','$category','$pname','$title','$video','$mainsarr[$i]','$details')";
 
$Upinsql="update $_table54 set image='$resized' where id='$newsid'";
mysql_query($Upinsql,$link) or die(mysql_error());

				
 
 
$message=base64_encode('det_create');
header("location:list_mainpage.php?mes=$message&$random");


  
}
  
	
 // end for submit

}// end for action 


?>
 
<?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





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
if(theval.details.value=="")
{
alert("enter the details");
theval.details.focus();
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
		<form action="addmain9.php"method="post" enctype="multipart/form-data" name="example" id="example"  onsubmit="return Inamodel_validate(this);">
		  <table width="1000" border="1" bordercolor="#000000" align="center" cellpadding="1" cellspacing="1">
		    <tr>
		      <td width="817" align="center"><table width="800" border="0" align="center">
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td width="581"><?php include("Message.php");?></td>
	            </tr>
		        <input name="username" type="hidden" value="<?php echo $_SESSION['SESS_USER_NAME'];?>" />
		        <tr>
		          <td width="129"  valign="top"  class="left">Category</td>
		          <td width="35" align="center" valign="top">:</td>
		          <td valign="top">
		            
		              <select name="category" id="category" class="inputtextfiled" onchange="getCityList(this)">
		                <option value="">-- Select Category -- </option>
		                <?php 
			 
			  $sel3="SELECT  * FROM  $_table2  ";
		$result3=mysql_query($sel3,$link) or die (mysql_error());
		$i="1";
while($fetch_sr_data3=mysql_fetch_array($result3)){ 
            
$id3=$fetch_sr_data3[id];
$category=$fetch_sr_data3[category];



?>
		                <option value="<?php echo $id3?>"> <?php echo $category?></option>
		                <?php  }?>
	                </select>
	                </span></td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
	            </tr>
		        <tr>
		          <td valign="top" class="left">Sub Category</td>
		          <td align="center" valign="top">:</td>
		          <td valign="top">
		      
		              <select name="pname" class="inputtextfiled" id="pname" >
		                <option value="<?php echo $_GET['pname'];?>" >-- Select Subcategory --</option>
	                </select>
	              </td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
	            </tr>
		        <tr>
		          <td align="center" valign="top" class="left">Recommended Page</td>
		          <td align="center" valign="top">:</td>
		          <td valign="top"><script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#example-enableClickableOptGroups').multiselect({
                                                    enableClickableOptGroups: true
                                                });
                                            });
                                        </script>
		            <select id="example-enableClickableOptGroups"  name="main[]"  multiple="multiple">
		              <?php


$sel="SELECT  * FROM  $_table2  ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
while($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$category=$fetch_sr_data[category];
$id=$fetch_sr_data[id];
$encoded_cid=base64_encode($c_id);
?>
		              <optgroup label="<?php echo $category;?>">
		                <?php
 if($decoded_gettingid){
				  $cond="where category='$decoded_gettingid'";
				  }
                $scheme_select = "SELECT  * FROM  $_table3  where category = ".$c_id." ORDER BY id ASC";
	
	$scheme_select_result=mysql_query($scheme_select,$link) or die (mysql_error());
	$rowcount=mysql_num_rows($scheme_select_result);
	
?>
		                <?php
								
  if ($rowcount!=0){ 
							 while($fetch_sr_data=mysql_fetch_array($scheme_select_result))
							  {
 $userid=base64_encode($fetch_sr_data['id']);
							  //$id=$fetch_sr_data[id];
$catid=$fetch_sr_data[category];
$subcategory=$fetch_sr_data[subcategory];
$created_on=$fetch_sr_data[created_on];
$created_on_display =date("dS M Y ",($created_on));
$sel_country="SELECT  category FROM  $_table2 where id='$catid'";
		$result_country=mysql_query($sel_country,$link) or die (mysql_error());
	
if($fetch_cat=mysql_fetch_array($result_country)){ 
            

$category=$fetch_cat[category];

}


							    ?>
		                <option value="<?php echo $subcategory;?>"><?php echo $subcategory;?></option>
		                <?php
							  }
							  ?>
	                  </optgroup>
		              <?php
							  
  }
}
  ?>
	                </select></td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        
		        <tr>
		          <td  valign="top" class="left">Details</td>
		          <td align="center" valign="middle">:</td>
		          <td><label>
		            <textarea id="textarea1" name="details" style="height: 170px; width: 500px;">

<?php echo $details;?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script>
		          </label></td>
	            </tr>
		        <tr>
		          <td align="center" valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td  valign="top" class="left">Title</td>
		          <td align="center" valign="top">:</td>
		          <td>
		            <input name="title" type="text" class="inputtextfiled" id="title" value="<?php echo $_GET['title'];?>" /></td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td  valign="top" class="left">Video Link</td>
		          <td align="center" valign="top">:</td>
		          <td><textarea id="details" name="video" style="height: 170px; width: 500px;">

<?php echo $video;?></textarea></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td colspan="2">Audio Link</td>
		          <td><textarea id="details2" name="audio" style="height: 170px; width: 500px;">

<?php echo $audio;?></textarea></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td valign="top" class="left">Upload Image</td>
		          <td align="center" valign="middle" class="inputtextfiled_names">&nbsp;</td>
		          <td><input type="file" name="image" id="image" /></td>
	            </tr>
		        <tr>
		          <td valign="top" class="left">&nbsp;</td>
		          <td align="center" valign="middle" class="inputtextfiled_names">&nbsp;</td>
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
		          <td><input name="step1" type="submit" id="step1" value="Next " />
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

 
 
 

if(isset($_POST['step1'])){
 $category=$_POST['category'];
  $pname=$_POST['pname'];
 
$details1=$_POST['details'];
if(!get_magic_quotes_gpc()){
$details=addslashes($details1);
 }else{
 $details=$details1;
 }

 
$video=$_POST['video'];
if(!get_magic_quotes_gpc()){
$video=addslashes($video);
 }else{
 $video=$video;
 }
 
 $audio=$_POST['audio'];
if(!get_magic_quotes_gpc()){
$audio=addslashes($audio);
 }else{
 $audio=$audio;
 }
  $main=$_POST['main'];
  if (isset($_POST['main'])) {
        $mains=$_POST['main'];
        foreach ($mains as $val1) {
            $mainsarr[] = $val1;
        }
    }
$title=$_POST['title'];
$recom=$_POST['recom'];
$username=$_POST['username'];
$verif_box=$_POST['verif_box'];
	$your_image = new _image;
	
	//To Upload
	$your_image->uploadTo = 'uploads/';
	$upload = $your_image->upload($_FILES['image']);
	echo "<div>" . $upload . "</div>";
	
	//To Resize
	$your_image->newPath = 'thumbs/';
	$your_image->newWidth = 400;
	$your_image->newHeight = 300;
	$resized = $your_image->resize();
	echo "<div>" . $resized . "</div>";
	
	//To Crop
	$width = "150";
	$height = "100";
	$fromX = "0";
	$fromY = "0";
	$your_image->newPath = 'cropped/';
	$cropped = $your_image->crop($width,$height,$fromX,$fromY);
	echo "<div>" . $cropped . "</div>";
	
	//echo "Image was successfully uploaded.";


if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	setcookie('tntcon','');

} else if(isset($pname) and $pname!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: addmain.php?category=$category&pname=$pname&main=$main&details=$details&title=$title&video=$video&audio=$audio&$image=$image"."&wrong_code=true");
	exit;
}
				$createdon=$serverdate;	
  for ($i = 0; $i < count($mainsarr); $i++) {
 $insert="insert into $_table4 (username,category,pname,title,video,audio,main,image,details)values('$username','$category','$pname','$title','$video','$audio','$mainsarr[$i]','$cropped','$details')";
mysql_query($insert,$link) or die(mysql_error());


  
				
 
 $message=base64_encode('category_updated');
header("location:addmain9.php?mes=$message&$random");


  }

  
	
 // end for submit

}// end for action 
else {
	
	exit;
	} 

?>
 
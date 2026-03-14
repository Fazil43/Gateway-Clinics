<?php 

include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php //include("maindb.php");?>

<?php
@ob_start();
@session_start();



$gettingcityid=$_GET['nid'];
$decodedcityid=base64_decode($gettingcityid);

 $sel="SELECT  * FROM  $_table4 where id='$decodedcityid' ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($fetch_sr_data=mysql_fetch_array($result)){ 
            
$id3=$fetch_sr_data[id];
$subcategoryid=$fetch_sr_data[subcategory];
$country_id_upd=$fetch_sr_data[category];
$name=$fetch_sr_data[name];
$image=$fetch_sr_data[image];
$filename=$fetch_sr_data[filename];
$details=$fetch_sr_data[details];

$encodednewsid9=base64_encode($id3);
}



if(!$gettingcityid){
				$do="Create";
				}else{
				$do="Update";
				}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Add Product Details</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script language="JavaScript">
function Inamodel_validate(theval)
{

if(theval.name.value=="")
{
alert("enter the name");
theval.name.focus();
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
}
</script>
</head>
<body>

	
	<!-- Header -->
	<div id="header">
		<div class="shell">
			
			<?php  include("headermenu.php");?>
			
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
		<form action="update_productimage.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="javascript:return onsubmitform()" onreset="resetform()">
		  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="lightgrey_outline">
		    <!--DWLayoutTable-->
		    <tr>
		      <td height="28" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="subheader">
		        <!--DWLayoutTable-->
		        <tr>
		          <td width="331" height="28" valign="middle"><?php echo $do?> Product </td>
		          <td width="160">&nbsp;</td>
	            </tr>
		        </table></td>
	        </tr>
		    <tr>
		      <td width="15" height="26"></td>
		      <td width="99"></td>
		      <td width="9"></td>
		      <td valign="top"class="error"><?php include("Message.php");?>
		        <?php echo $msg;?></td>
		      <td width="93"></td>
	        </tr>
		    <tr>
		      <td height="7"></td>
		      <td></td>
		      <td></td>
		      <td width="119"></td>
		      <td></td>
	        </tr>
		    <input name="updated_id" type="hidden" value="<?php echo $decodedcityid?>" />
		    <tr>
		      <td height="19"></td>
		      <td valign="top"></td>
		      <td valign="top"></td>
		      <td valign="top"class="error"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="36"></td>
		      <td valign="top">Uploadf Image</td>
		      <td valign="top">&nbsp;</td>
		      <td width="119" valign="top"><label for="filename"></label>
		        <input type="file" name="filename" id="filename" />
		       <img src="../uploads/<?php echo $filename;?>" width="150" height="150" border="0" />  (upload only jpg,jpeg,png,gif file)</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="36"></td>
		      <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td valign="top">&nbsp;</td>
		      <td><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="36"></td>
		      <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td valign="top">&nbsp;</td>
		      <td><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="25"></td>
		      <td valign="top"></td>
		      <td valign="top">&nbsp;</td>
		      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
		        <!--DWLayoutTable-->
		        <tr>
		          <td height="25" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
		          <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
	            </tr>
		        <tr>
		          <td width="88" height="25" valign="top"><input name="Reset" type="reset" class="button_withbg" id="button" value="Reset" /></td>
		          <td width="296" valign="top"><input name="step1" type="submit"  id="step1" value="<?php echo $do?>Download" /></td>
	            </tr>
		        </table></td>
		      <td></td>
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
if($action=='Update'){


define ("MAX_SIZE","134443400"); 
function getExtension($str) 
{        
 $i = strrpos($str,".");      
    if (!$i) { return ""; }        
	 $l = strlen($str) - $i;         
	 $ext = substr($str,$i+1,$l);         
	 return $ext; }
$errors=0;
  {
$filename=$_FILES['filename']['name'];
if ($filename)  	{
$filename = stripslashes($_FILES['filename']['name']);
$extension = getExtension($filename); 		$extension = strtolower($extension);
 if ( ($extension != "jpg")&&($extension != "jpeg") && ($extension != "png")&& ($extension != "gif")	)	{
 
 $msg="Please Specifies  Only Images";  

?>
<?php
			$errors=1; 		} 		else 		{
$size=filesize($_FILES['filename']['tmp_name']);
if ($size > MAX_SIZE*1024){	echo '<h1>You have exceeded the size limit!</h1>';	$errors=1;}
$image_name=$filename.'.'.$extension;
$newname="../uploads/".$image_name;
$copied = copy($_FILES['filename']['tmp_name'], $newname);if (!$copied)
 {	
 echo '<h1>Copy unsuccessfull!</h1>';	
 $errors=1;}}}}
 
 //image2
 
 
 

}
if($action=='Update'){
if(isset($_POST['step1'])){
 $message1=$_POST['message'];
if(!get_magic_quotes_gpc()){
$message=addslashes($message1);
 }else{
 $message=$message1;
 }	
 $category=$_POST['category'];
 $filename=$_POST['filename'];
$subcategory=$_POST['subcategory'];
$name=$_POST['name'];

$message=$_POST['message'];
$filename=$_POST['filename'];
$filesize=$_POST['filesize'];


$newsid=$_POST['updated_id'];

					
  $update="update $_table4 set filename='$image_name',filesize='$size' where  id='$newsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('down_updated');
header("location:listproductnew.php?mes=$message&$random");

} // end for submit

}// end for action 
?>

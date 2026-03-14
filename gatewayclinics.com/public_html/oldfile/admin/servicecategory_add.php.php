<?php 
@ob_start();
error_reporting(0);
session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php


$gettingitemid=$_GET['cid'];
$decodedcategoryid=base64_decode($gettingitemid);

 $sel="SELECT  * FROM  $_table23 where id='$decodedcategoryid' ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$category=$fetch_sr_data[category];


}

if(!$gettingitemid){
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
        </script>    <script language="javascript">
function inamodel_validate(theval)
{
if(theval.category.value=="")
{
alert("Enter the Category Name");
theval.category.focus();
return (false);
}


if(theval.verif_box.value=="")
{
alert("Enter the verification Code");
theval.verif_box.focus();
return (false);
}
}
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
						<a href="changepassword.php">Profile Settings</a> |
						<a href="logout.php">Logout</a>
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
		</h6> <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
		<form action="sevicecategory_add.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="return inamodel_validate(this);" onreset="resetform()">
		  <table width="1000" border="1" bordercolor="#000000" align="center" cellpadding="1" cellspacing="1">
		    <tr>
		      <td width="817" align="center"><table width="800" border="0" align="center">
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td width="581"><?php include("Message.php");?></td>
	            </tr>
		        <input name="username" type="hidden" value="<?php echo $_SESSION['SESS_USER_NAME'];?>" />
                 <input name="updated_id" type="hidden" value="<?php echo $decodedcategoryid?>" />
		        <tr>
		          <td width="129"  valign="top" class="left">Category Name  *</td>
		          <td width="35" align="center" valign="top">:</td>
		          <td><span class="inputtextfiled_names1">
	              <input name="category" type="text" class="inputtextfiled" id="category" value="<?php echo $_GET['category'];?>" />
		          </span></td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
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
		          <td><input name="step1" type="submit" class="" id="step1" value="<?php echo $do?> category" />
	              <input name="Reset" type="reset" class="" id="button" value="Reset" /></td>
	            </tr>
		        <tr>
		          <td colspan="2">&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
	          </table>
		        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="table_bottom">
		          <!--DWLayoutTable-->
		          <tr>
		            <td width="63" height="23" valign="top" class="table_header">S.No</td>
		            <td width="305" valign="top" class="table_header">Category Name </td>
					<td width="305" valign="top" class="table_header"><!--DWLayoutEmptyCell-->&nbsp;</td>
		            <td colspan="2" align="center" valign="top" class="table_header">Action</td>
	              </tr>
		          <?php $sel="SELECT  * FROM  $_table23 ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
while($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$category=$fetch_sr_data[category];
$filename=$fetch_sr_data['filename'];
$encoded_cid=base64_encode($c_id);

$inc=$i++;
				$sno=$inc;
				
				 $oddrow=$sno%2;
				if($oddrow==1){
				$tablecss="table_details";
				}else{
				$tablecss="table_details_2";
				}
?>
		          <tr class="<?php echo $tablecss?>"onmouseover="this.bgColor='#B6DAF8'" onmouseout="this.bgColor='#FFFFFF'">
		            <td height="20" align="center" valign="middle" class="inputtextfiled_names1"><?php echo $inc?></td>
		            <td valign="middle" class="inputtextfiled_names1"><?php echo $category?></td>
					 <td valign="middle" class="inputtextfiled_names1"><!--DWLayoutEmptyCell-->&nbsp;</td>
		            <td width="73" align="center" valign="middle"><a href="servicecategory_add.php?cid=<?php echo $encoded_cid?>"><img src="images/
					Modify.png" width="20" height="20" border="0" title="Edit category" /></a></td>
		            <td width="80" align="center" valign="middle" class="table_slicer"><a href="delete_servicecategory.php?nid=<?php echo $encoded_cid?>" onclick="return confirm('Are you sure you want to delete?')"  title="Delete"><img src="images/Delete.png" width="20" height="20" border="0" /></a></td>
	              </tr>
		          <?php }?>
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
</html>><?php 
 $action=$_GET['action'];
 

 $max_size=5789*1024*1024;

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
 if ( ($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))  		{
 
 $msg="Please Specifies  Only jpg,jpeg,gif and png Files";  

?>
<?php
			$errors=1; 		} 		else 		{
$size=filesize($_FILES['filename']['tmp_name']);
if ($size >= $max_size){	echo '<h1>You have exceeded the size limit!</h1>';	$errors=1;}
$image_name2=$filename.'.'.$extension;


$newname="../uploads2/".$image_name2;


$copied = copy($_FILES['filename']['tmp_name'], $newname);if (file_exists(!$copied))
 {	
 echo '<h1>Copy unsuccessfull!</h1>';	
 $errors=1;}}}}
 
 //image2
 
 
 
if($action=='Create'){
if(isset($_POST['step1'])){

 $category1=$_POST['category'];
if(!get_magic_quotes_gpc()){
$category=addslashes($category1);
 }else{
 $category=$category1;
 }	
 $filename=$_POST['filename'];
 $verif_box = $_POST["verif_box"];

 $insert="insert into $_table23 (category) values('$category')";
$step1result=mysql_query($insert,$link) or die(mysql_error());
$message=base64_encode('category_success');
header("location:sevicecategory_add.php?mes=$message&$random");


} // end for submit

}// end for action
 else {
	//echo "no variables received, this page cannot be accessed directly";
	exit;
	} 
if($action=='Update'){
if(isset($_POST['step1'])){
 
$category1=$_POST['category'];
if(!get_magic_quotes_gpc()){
$category=addslashes($category1);
 }else{
 $category=$category1;
 }$verif_box = $_POST["verif_box"];

$newsid=$_POST['updated_id'];

					
  $update="update $_table23 set category='$category' where  id='$newsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('category_updated');
header("location:sevicecategory_add.php?mes=$message&$random");

} // end for submit

}// end for action 
?>

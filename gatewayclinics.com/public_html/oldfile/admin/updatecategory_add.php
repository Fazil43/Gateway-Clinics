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

 $sel="SELECT  * FROM  $_table2 where id='$decodedcategoryid' ";
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
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="loginmodule.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.style1 {font-family: Arial;

	font-size: 12px;
}
.style1 {font-family: Arial;
	font-size: 12px;
}
.style2 {font-family: Arial; font-size: 12px; font-weight: bold; }
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;
}
</style>
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
        <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
        <form action="updatecategory_add.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="javascript:return onsubmitform()" onreset="resetform()">
          <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="lightgrey_outline">
            <!--DWLayoutTable-->
            <tr>
              <td height="28" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="subheader">
                <!--DWLayoutTable-->
                <tr>
                  <td width="331" height="28" valign="middle"><?php echo $do?>Category </td>
                  <td width="160">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td width="99" height="26"></td>
              <td colspan="3" valign="top"class="error"><?php include("Message.php");?></td>
            </tr>
            <tr>
              <td height="7"></td>
              <td width="123"></td>
              <td width="119"></td>
              <td width="162"></td>
            </tr>
            <tr>
              <td height="19"></td>
              <td colspan="3" valign="top"class="error"><div id="error_category"></div></td>
            </tr>
            <input name="updated_id" type="hidden" value="<?php echo $decodedcategoryid?>" />
            <tr>
              <td height="24" valign="top" class="inputtextfiled_names">Category Name  *</td>
              <td colspan="3" valign="top" class="inputtextfiled_names1"> <input name="category" type="text" class="inputtextfiled" id="category" value="<?php echo $category?>" />
                &nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td height="36"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="25"></td>
              <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="90" height="25" valign="top"><input name="Reset" type="reset" class="" id="button" value="Reset" /></td>
                  <td width="161" valign="top"><input name="step1" type="submit" class="" id="step1" value="<?php echo $do?> category" /></td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="53"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="44" colspan="4" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="table_bottom">
                <!--DWLayoutTable-->
                <tr>
                  <td width="63" height="23" valign="top" class="table_header">S.No</td>
                  <td width="305" valign="top" class="table_header">Category Name </td>
                  <td colspan="2" valign="top" class="table_header">Action</td>
                </tr>
                <?php $sel="SELECT  * FROM  $_table2 ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
while($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$category=$fetch_sr_data[category];
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
                  <td height="20" align="center" valign="middle" class="table_slicer"><?php echo $inc?></td>
                  <td valign="middle" class="table_slicer"><?php echo $category?></td>
                  <td width="73" align="center" valign="middle"><a href="updatecategory_add.php?cid=<?php echo $encoded_cid?>"><img src="images/Modify.png" width="20" height="20" border="0" title="Edit category" /></a></td>
                  <td width="80" align="center" valign="middle" class="table_slicer"><a href="delete_category.php?cid=<?php echo $encoded_cid?>" onclick="return confirm('Are you sure you want to delete?')"  title="Delete"><img src="images/Delete.png" width="20" height="20" border="0" /></a></td>
                </tr>
                <?php }?>
              </table></td>
            </tr>
            <tr>
              <td height="181">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
if($action=='Create'){
if(isset($_POST['step1'])){

 $category1=$_POST['category'];
if(!get_magic_quotes_gpc()){
$category=addslashes($category1);
 }else{
 $category=$category1;
 }	
 $insert="insert into $_table2 (category) values('$category')";
$step1result=mysql_query($insert,$link) or die(mysql_error());
$message=base64_encode('category_success');
header("location:updatecategory_add.php?mes=$message&$random");


} // end for submit

}// end for action 
if($action=='Update'){
if(isset($_POST['step1'])){
 
$category1=$_POST['category'];
if(!get_magic_quotes_gpc()){
$category=addslashes($category1);
 }else{
 $category=$category1;
 }
$newsid=$_POST['updated_id'];

					
  $update="update $_table2 set category='$category' where  id='$newsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('category_updated');
header("location:updatecategory_add.php?mes=$message&$random");

} // end for submit

}// end for action 
?>

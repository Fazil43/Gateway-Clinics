<?php 
@ob_start();
error_reporting(0);
session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php

/*



*/

include("mainserver.php");

$tbl_name="subcategory"; // Table name

// Connect to server and select databse.



// Connect to server and select databse.

mysql_connect($host, $username, $password)or die("cannot connect");

mysql_select_db($db_name)or die("cannot select DB");



// Check if delete button active, start this

if(isset($_POST['delete'])){

	if(sizeof($_POST['chkbx'])){

		foreach($_POST['chkbx'] AS $val){

			$sql = mysql_query("DELETE FROM $tbl_name WHERE id=".(int)$val)or die(mysql_error());

		}

	}

	

	// if successful redirect to delete_multiple.php

	if($sql){

		header('Location:subcategory_add.php');//THIS WAS SAMPLE.PHP - YOU MIGHT WANT TO CHANGE IT BACK

	}

}

?>
<?php

$gettingcityid=$_GET['nid'];
$decodedcityid=base64_decode($gettingcityid);

 $sel="SELECT  * FROM  $_table3 where id='$decodedcityid' ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$country_id_upd=$fetch_sr_data[category];
$subcategory=$fetch_sr_data[subcategory];
$image=$fetch_sr_data[image];
$pname=$fetch_sr_data[pname];
}
$sel2="SELECT  category FROM  $_table2 where id='$country_id_upd'";
		$result2=mysql_query($sel2,$link) or die (mysql_error());
		
if($fetch_sr_data2=mysql_fetch_array($result2)){ 
            
$category=$fetch_sr_data2[category];

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
<script type="text/javascript" src="check.js"></script>
<script language="javascript">

function inamodel_validate(theval)

{

if(theval.category.value=="")

{

alert("Select the Category Name");

theval.category.focus();

return (false);

}
if(theval.subcategory.value=="")

{

alert("Enter the SubCategory Name");

theval.subcategory.focus();

return (false);

}
if(theval.verif_box.value=="")
{
alert("Enter the verification Code");
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
        <style type="text/css">
        .style4 {font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;
}
        </style>
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
		<form action="subcategory_add.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="return inamodel_validate(this);" onreset="resetform()">
		  <table width="1000" border="1" align="center">
		    <tr>
		      <td><table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="">
		        <!--DWLayoutTable-->
		        <tr>
		          <td height="28" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="subheader">
		            <!--DWLayoutTable-->
		            <tr>
		              <td width="331" height="28" valign="middle"><?php echo $do?> Subcategory</td>
		              <td width="160">&nbsp;</td>
	                </tr>
		            </table></td>
	            </tr>
		        <tr>
		          <td width="275" height="26"></td>
		          <td width="25"></td>
		          <td valign="top"class="error"><?php include("Message.php");?><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
		            <?php echo $msg;?></td>
		          <td width="99"></td>
	            </tr>
		        <tr>
		          <td height="7"></td>
		          <td></td>
		          <td width="401"></td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="19"></td>
		          <td></td>
		          <td valign="top"class="error"><div id="error_country"></div></td>
		          <td></td>
	            </tr>
		        <input name="updated_id" type="hidden" value="<?php echo $decodedcityid?>" />
		        <tr>
		          <td height="24" valign="top" class="left">
<div style="position:relative;left:180px;top:2px;
            ">

Category  *</div></td>
		          <td align="center" valign="top" >:</td>
		          <td valign="top" class="inputtextfiled_names1"><select name="category" id="category" class="inputtextfiled">
		            <option value="">-- Select Category -- </option>
		            <?php 
			
			  $sel3="SELECT  * FROM  $_table2  ";
		$result3=mysql_query($sel3,$link) or die (mysql_error());
$i=1;

while($fetch_sr_data3=mysql_fetch_array($result3)){ 
            
$c_id=$fetch_sr_data3[id];
$country=$fetch_sr_data3[category];



?>
		            <option value="<?php echo $c_id?>"  <?php  if($country_id_upd==$c_id){ echo "Selected";}?>><?php echo $country?></option>
		            <?php  }?>
		            </select>
		            &nbsp;&nbsp;&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="19"></td>
		          <td></td>
		          <td valign="top"class="error"><div id="error_city"></div></td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="24" valign="top" class="left"><div style="position:relative;left:180px;top:2px;
            ">
Sub Category   *</div></td>
		          <td align="center" valign="top" >: </td>
		          <td valign="top" class="inputtextfiled_names1"><input name="subcategory" type="text" class="inputtextfiled" id="subcategory" value="<?php echo $subcategory?>" />
		            &nbsp;&nbsp;&nbsp;</td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24" valign="top" class="left"><!--DWLayoutEmptyCell-->&nbsp;</td>
		          <td align="center" valign="middle" ><!--DWLayoutEmptyCell-->&nbsp;</td>
		          <td><!--DWLayoutEmptyCell-->&nbsp;</td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="36" valign="top" class="left"><div style="position:relative;left:180px;top:2px;
            ">
Verification* 	</div></td>
		          <td align="center" valign="middle" >:</td>
		          <td><input name="verif_box" type="text" id="verif_box" class="inputtextfiled"/>
		            <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
		            <br />
		            <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
		            <?php if(isset($_GET['wrong_code'])){?>
		            <div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div>
		            <br />
		            <?php ;}?></td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="25"></td>
		          <td>&nbsp;</td>
		          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
		            <!--DWLayoutTable-->
		            <tr>
		              <td height="25" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
	                </tr>
		            <tr>
		              <td width="88" height="25" valign="top"><input name="Reset" type="reset" class="" id="button" value="Reset" /></td>
		              <td width="296" valign="top"><input name="step1" type="submit" class="" id="step1" value="<?php echo $do?>Sub Category" /></td>
	                </tr>
		            </table></td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="53"></td>
		          <td>&nbsp;</td>
		          <td>&nbsp;</td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="19" colspan="2" align="left" valign="top" class="red_title"><div align="left">Existing Subcategoty </div></td>
		          <td>&nbsp;</td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="13"></td>
		          <td></td>
		          <td></td>
		          <td></td>
	            </tr>
		        <tr>
		          <td height="44" colspan="4" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_bottom">
		            <!--DWLayoutTable-->
		            <tr>
		              <td width="90" valign="top" class="table_header"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td width="90" height="23" valign="top" class="table_header">S.No</td>
		              <td width="189" valign="top" class="table_header">Category </td>
		              <td width="440" valign="top" class="table_header">Subcategory</td>
		              <td colspan="2" valign="top" class="table_header">Action</td>
	                </tr>
		            <?php $sel="SELECT  * FROM  $_table3  ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
while($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$category1=$fetch_sr_data[category];
$city=$fetch_sr_data[subcategory];
$pname=$fetch_sr_data[pname];
	
				$sel2="SELECT  category FROM  $_table2 where id='$category1'";
		$result2=mysql_query($sel2,$link) or die (mysql_error());
		
if($fetch_sr_data2=mysql_fetch_array($result2)){ 
            
$category=$fetch_sr_data2[category];

}
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
		            <tr class="">
		              <td align="center" valign="middle" class="table_slicer"><input name="chkbx[]" type="checkbox" id="checkbox_<?php  echo $x; // you need a unique id per checkbox ?>" value="<?php  echo $fetch_sr_data['id']; ?>" />
		                &nbsp;</td>
		              <td height="20" align="center" valign="middle" class="table_slicer"><?php echo $inc?></td>
		              <td valign="middle" class="table_slicer"><?php echo $category?></td>
		              <td valign="middle" class="table_slicer"><?php echo $city?></td>
		              <td width="113" align="center" valign="middle"><a href="subcategory_add.php?nid=<?php echo $encoded_cid?>">Edit</a></td>
		              <td width="118" align="center" valign="middle" class="table_slicer"><a href="delete_subcategory.php?cid=<?php echo $encoded_cid?>" onclick="return confirm('Are you sure you want to delete?')"  title="Delete">Delete</a></td>
	                </tr>
		            <tr class="">
		              <td align="center" valign="middle" class="table_slicer"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td height="20" align="center" valign="middle" class="table_slicer"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td valign="middle" class="table_slicer"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td valign="middle" class="table_slicer"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
		              <td align="center" valign="middle" class="table_slicer"><!--DWLayoutEmptyCell-->&nbsp;</td>
	                </tr>
		            <?php }?>
		            </table></td>
	            </tr>
		        </table>
		        
		        <span class="table_slicer">
		          <input name="delete" type="submit" class="" id="delete"  value="Delete" />
	            </span> <span class="table_slicer">
		            <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
		            <span class="style4">Checkall/uncheckall</span></span></td>
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


$category=$_POST['category'];

 $subcategory=$_POST['subcategory'];

 $verif_box = $_POST["verif_box"];


if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	setcookie('tntcon','');

} else if(isset($subcategory) and $subcategory!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: subcategory_add.php?category=$category&subcategory=$subcategory"."&wrong_code=true");
	exit;
}

 
	

 $insert="insert into $_table3 (category,subcategory) values('$category','$subcategory')";
$step1result=mysql_query($insert,$link) or die(mysql_error());
$message=base64_encode('city_success');
header("location:subcategory_add.php?mes=$message&$random");


 // end for submit

}// end for action 
}
 else {
	//echo "no variables received, this page cannot be accessed directly";
	exit;
	} 
if($action=='Update'){
if(isset($_POST['step1'])){

 
$category=$_POST['categor2'];

 $subcategory=$_POST['subcategory'];
 
 
 if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	setcookie('tntcon','');

} else if(isset($subcategory) and $subcategory!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: subcategory_add.php?category=$category&subcategory=$subcategory"."&wrong_code=true");
	exit;
}

$newsid=$_POST['updated_id'];

					
  $update="update $_table3 set category='$category',subcategory='$subcategory' where  id='$newsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('city_updated');
header("location:subcategory_add.php?mes=$message&$random");

} // end for submit

}// end for action 

else {
	//echo "no variables received, this page cannot be accessed directly";
	exit;
	} 
?>

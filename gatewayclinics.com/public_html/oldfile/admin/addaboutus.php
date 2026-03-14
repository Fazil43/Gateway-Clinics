<?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





?>
<?php

$gettingproductnameid=$_GET['nid'];

$decodednewsid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table3 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$country_id_upd=$fetch_sr_data[category];
$details=$fetch_sr_data[details];
$status=$fetch_sr_data[status];

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
if(theval.details.value=="")
{
alert("Enter a Details");
theval.details.focus();
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
		<form id="example" name="example"  onsubmit="return Inamodel_validate(this);"method="post" action="addaboutus.php?action=<?php echo $do;?>">
		  <table width="700" border="0" align="center">
		    <tr>
		      <td width="86">&nbsp;</td>
		      <td width="604"><?php include("Message.php");?></td>
	        </tr>
            <input type="hidden" name="updated_id" value="<?php echo $decodednewsid;?>" />
		    
		    <tr>
		      <td>category</td>
		      <td><span class="inputtextfiled_names">
		        <select name="category" id="category" class="inputtextfiled">
		          <option value="">-- Select Category -- </option>
		          <?php 
			 
			  $sel3="SELECT  * FROM  $_table24  ";
		$result3=mysql_query($sel3,$link) or die (mysql_error());
$i=1;

while($fetch_sr_data3=mysql_fetch_array($result3)){ 
            
$c_id=$fetch_sr_data3[id];
$category=$fetch_sr_data3[category];



?>
		          <option value="<?php echo $c_id?>"  <?php  if($country_id_upd==$c_id){ echo "Selected";}?>><?php echo $category?></option>
		          <?php  }?>
	          </select>
		      </span></td>
	        </tr>
		    <tr>
		      <td>Details</td>
		      <td><textarea id="textarea1" name="details" style="height: 170px; width: 500px;">

<?php echo $details;?></textarea>
		        <script language="javascript1.2" type="text/javascript">
  generate_wysiwyg('textarea1');
                </script></td>
	        </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td><input type="submit" name="Submit" value="<?php echo $do;?>AboutUs" /></td>
	        </tr>
		    <tr>
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
if($action=='Create')
{

	if(isset($_POST['Submit']))
	{
	
$details1=$_POST['details'];
if(!get_magic_quotes_gpc()){
$details=addslashes($details1);
 }else{
 $details=$details1;
 }
		$title=$_POST['title'];
		$status=$_POST['status'];
		$category=$_POST['category'];
		$createddate=$serverdate;
	
			
			$dbase_insert = "insert into $_table3(username,category,details,createddate)values('$username','$category','$details','$serverdate')";
			$dbase_inserted = mysql_query($dbase_insert,$link);
 $encoded_id=base64_encode($detailsid);
$message=base64_encode('faq_details');
header("location:addaboutus.php?mes=$message&nid=$encoded_id&$random");
			
}
}

if($action=='Update'){
if(isset($_POST['Submit'])){
 
$title1=$_POST['title'];
if(!get_magic_quotes_gpc()){
$title=addslashes($title1);
 }else{
 $title=$title1;
 }
$details=$_POST['details'];
 $category=$_POST['category'];
 

 $details1=$_POST['details'];
if (!get_magic_quotes_gpc()) {
    $details= addslashes($details1);
} else {
    $details=$details1;
}
 $status=$_POST['status'];
$detailsid=$_POST['updated_id'];

					
  $update="update $_table3 set category='$category',details='$details' where  id='$detailsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($detailsid);
$message=base64_encode('faq_updated');
header("location:addaboutus.php?mes=$message&nid=$encoded_id&$random");

} // end for submit

}
// end for action 
?>

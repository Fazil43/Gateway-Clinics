<?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php

$root=$_SERVER['root']."/vijaydream"; // local



 include("../connection/connection.php");





?><?php

$gettingproductnameid=$_GET['nid'];

$decodednewsid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table2 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$category=$fetch_sr_data[category];
$details=$fetch_sr_data[details];


$filename=$fetch_sr_data[filename];
$filesize=$fetch_sr_data[filesize];
$main=$fetch_sr_data[main];
$name=$fetch_sr_data[name];
$image=$fetch_sr_data[image];



$title=$fetch_sr_data[title];

$video=$fetch_sr_data[video];
}



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
		  <!-- Navigation -->
          <?php include("header.php");?>
          <!-- End Navigation -->
          <div id="head">
            <h1><a href="#">Admin </a></h1>
            <div class="right">
              <p> Welcome <a href="#"><strong>Administrator</strong></a> | <a href="#">Help</a> | <a href="#">Profile Settings</a> | <a href="#">Logout</a> </p>
            </div>
          </div>
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
		<form action="update_category.php?action=<?php echo $do;?>"method="post" enctype="multipart/form-data" name="example" id="example"  onsubmit="return Inamodel_validate(this);">
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
		          <td width="233"  valign="top" class="left">Category</td>
		          <td width="41" align="center" valign="top">:</td>
		          <td valign="top"><label for="name2"></label>
		        
		              <input type="text" name="category" id="category" value="<?php echo $category;?>" />
	              </td>
	            </tr>
		        <tr>
		          <td valign="top">&nbsp;</td>
		          <td align="center" valign="top">&nbsp;</td>
		          <td valign="top">&nbsp;</td>
	            </tr>
		        
		        <tr>
		          <td align="center" valign="top" class="">Image</td>
		          <td align="center" valign="middle">:</td>
		          <td><img src="<?php echo $root;?>/uploads2/<?php echo $filename;?>" width="150" height="150" border="0" /></td>
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


if($action=='Update')
{
 
 
 

if(isset($_POST['step1'])){
 $category=$_POST['category'];
  $username=$_POST['username'];


				$createdon=$serverdate;	

// $insert="insert into $_table4 (username,category,pname,title,video,main,details)values('$username','$category','$pname','$title','$video','$mainsarr[$i]','$details')";
$newsid=$_POST['updated_id'];
 
$Upinsql="update $_table2 set category='$category' where id='$newsid'";
mysql_query($Upinsql,$link) or die(mysql_error());
$id=mysql_insert_id();

				
 
 
 $encoded_id=base64_encode($id);
header("location:list_category.php?srid=$encoded_id");


  
}
  
	
 // end for submit

}// end for action 


?>
 
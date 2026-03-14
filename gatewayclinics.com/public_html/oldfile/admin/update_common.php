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



 $sel="SELECT  * FROM  $_table84 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$country_id_upd=$fetch_sr_data[category];
$details=$fetch_sr_data[details];


$subcategoryid=$fetch_sr_data[pname];
$filesize=$fetch_sr_data[filesize];
$main=$fetch_sr_data[main];
$name=$fetch_sr_data[name];
$image=$fetch_sr_data[image];

$details=$fetch_sr_data[details];

$title1=$fetch_sr_data[title1];

$video=$fetch_sr_data[video];
}
$sel2="SELECT  category FROM  $_table83 where id='$categoryid' ";
		$result22=mysql_query($sel2,$link) or die (mysql_error());
		
if($fetch_sr_data2=mysql_fetch_array($result22)){ 
            
$category=$fetch_sr_data2[category];

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
alert("Seelct a Category");
theval.category.focus();
return (false);
}

if(theval.details.value=="")
{
alert("Enter a Details");
theval.details.focus();
return (false);
}



}
</script><script language="javascript">  
row_no=0; 
function addRow(tbl,row){  
//alert(row);
row_no++;  
//if (row_no<=20){ 
if (row_no<=10){  
if (row_no>=10){  
var textbox  = row_no+'.)';}  
if (row_no<10){  
var textbox  = row_no+'.<input type="file"  accept="image/jpg,image/png,image/jpeg,image/gif" size = "20" maxlength= "30" name=image[]>   ';}   
/* 
var textbox3 = ' ';
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(2);  
newCell.innerHTML = textbox3;  
var newCell = newRow.insertCell(3);  

newCell.innerHTML = checkbox;  
}  
if (row_no>10){  
alert ("Too Many Items. Limit of 10.");  
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
        </script></head>
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
		<form action="update_common.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="javascript:return onsubmitform()" onreset="resetform()">
		  <table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="lightgrey_outline">
		    <!--DWLayoutTable-->
		    <tr>
		      <td height="28" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="subheader">
		        <!--DWLayoutTable-->
		        <tr>
		          <td width="331" height="28" valign="middle"><?php echo $do?> Common </td>
		          <td width="160">&nbsp;</td>
	            </tr>
		        </table></td>
	        </tr>
		    <tr>
		      <td width="15" height="26"></td>
		      <td width="99"></td>
		      <td width="9"></td>
		      <td valign="top"class="error"><?php include("Message.php");?></td>
		      <td width="93"></td>
	        </tr>
		    <tr>
		      <td height="7"></td>
		      <td></td>
		      <td></td>
		      <td width="119"></td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="19" valign="top"></td>
		      <td></td>
		      <td></td>
		      <td valign="top"class="error"><div id="error_city"></div></td>
		      <td></td>
	        </tr>
		    <input name="updated_id" type="hidden" value="<?php echo $decodednewsid?>" />
		    <tr>
		      <td height="19"></td>
		      <td>Category</td>
		      <td></td>
		      <td valign="top"class="error"><span class="inputtextfiled_names">
		        <select name="category" id="category" class="inputtextfiled">
		          <option value="">-- Select Category -- </option>
		          <?php 
			 
			  $sel3="SELECT  * FROM  $_table83  ";
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
		      <td></td>
	        </tr>
		    <tr>
		      <td height="19"></td>
		      <td>Description </td>
		      <td></td>
		      <td valign="top"class="error"><textarea id="textarea1" name="details" style="height: 170px; width: 500px;">

<?php echo $details;?></textarea>
		        <script language="JavaScript1.2" type="text/javascript">
  generate_wysiwyg('textarea1');
                </script></td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="19"></td>
		      <td></td>
		      <td></td>
		      <td valign="top"class="error"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="25"></td>
		      <td></td>
		      <td>&nbsp;</td>
		      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
		        <!--DWLayoutTable-->
		        <tr>
		          <td height="25" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
		          <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
	            </tr>
		        <tr>
		          <td width="88" height="25" valign="top"><input name="Reset" type="reset" class="" id="button" value="Reset" /></td>
		          <td width="296" valign="top"><input name="step1" type="submit" class="" id="step1" value="<?php echo $do?>Common" /></td>
	            </tr>
		        </table></td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="53"></td>
		      <td></td>
		      <td>&nbsp;</td>
		      <td>&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="19"></td>
		      <td colspan="2" align="left" valign="top" class="red_title"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td>&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="13"></td>
		      <td></td>
		      <td></td>
		      <td></td>
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


if($action=='Update')
{
 
 
 

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
	

				$createdon=$serverdate;	
				$newsid=$_POST['updated_id'];

// $insert="insert into $_table4 (username,category,pname,title,video,main,details)values('$username','$category','$pname','$title','$video','$mainsarr[$i]','$details')";
 
$Upinsql="update $_table84 set category='$category',details='$details' where id='$newsid'";
mysql_query($Upinsql,$link) or die(mysql_error());
$id=mysql_insert_id();

				
 
 
 $encoded_id=base64_encode($id);
header("location:list_common.php?srid=$encoded_id");


  
}
  
	
 // end for submit

}// end for action 


?>
 
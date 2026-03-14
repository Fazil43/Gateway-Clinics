<?php 
error_reporting(0);
@ob_start();
 @session_start();
//include("auth.php");?><?php 

include("maindb.php");?>
<?php




 include("../connection/connection.php");




$root=$_SERVER['root']."/doctorweb"; // local


?>
<?php

/*



*/

include("mainserver.php");

$tbl_name="doctorgallery"; // Table name

// Connect to server and select databse.

mysql_connect($host, $username, $password)or die("cannot connect");

mysql_select_db($db_name)or die("cannot select DB");



// Check if delete button active, start this

if(isset($_POST['delete'])){

	if(sizeof($_POST['chkbx'])){

		foreach($_POST['chkbx'] AS $val){

		$delete1=("select image from $tbl_name WHERE id=".(int)$val);

$qry1=mysql_query($delete1) or die(mysql_error());

$del_img1=mysql_fetch_object($qry1);

unlink("thumbs1/".$del_img1->image."");





			$sql = mysql_query("DELETE FROM $tbl_name WHERE id=".(int)$val)or die(mysql_error());

		}

	}

	

	// if successful redirect to delete_multiple.php

	if($sql){

		header('Location:list_gallery.php');//THIS WAS SAMPLE.PHP - YOU MIGHT WANT TO CHANGE IT BACK

	}

}

?>






<?php

$gettingproductnameid=$_GET['nid'];

$decodednewsid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table4 where id='$decodednewsid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$title=$fetch_sr_data[title];
$image=$fetch_sr_data[image];


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
	<title>Admin Panel</title>

      <script language="javascript">  
row_no=0; 
function addRow(tbl,row){  
//alert(row);
row_no++;  
//if (row_no<=20){ 
if (row_no<=4){  
if (row_no>=4){  
var textbox  = row_no+'.)';}  
if (row_no<4){  
var textbox  = row_no+'.Add Email.<input type="text" size = "20" maxlength= "30" value="<?php echo $femail;?>" name=femail[]>   ';}   


/*
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(1);  
newCell.innerHTML = textbox2;  
var newCell = newRow.insertCell(2);  
newCell.innerHTML = textbox3;  
var newCell = newRow.insertCell(3);  

newCell.innerHTML = checkbox;  
}  
if (row_no>4){  
alert ("Too Many Emailid. Limit of 4.");  
}  
} 
</script>
<script language="javascript">
function changeIt()
{
var i = 1;
my_div.innerHTML = my_div.innerHTML +"<br><input type='text' value='<?php echo $remail;?>' name='remail[]'+ i>"

}
</script>

  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
   <script language="javascript" >
function resetform()
{
document.news.reset;
}
function onsubmitform()
{


var un=document.news;
		 if (un.title.value == "" )	{	
		document.getElementById("error_title").innerHTML="Please Enter News Title !!";
		
		return false;
		}
		if (un.details.value == "" )	{	
		document.getElementById("error_details").innerHTML="Please Enter News Details !!";
		
		return false;
		}
		
		else
		{
		return true;
		}
}// end of function 




</script>
<!-- 

	Copyright 2009 Itamar Arjuan
	jsDatePick is distributed under the terms of the GNU General Public License.
	
	****************************************************************************************

	Copy paste these 2 lines of code to every page you want the calendar to be available at
-->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<!-- 
	OR if you want to use the calendar in a right-to-left website
	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!
	
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
-->
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    The first example of Javascript snippet is for the most basic use , as a popup calendar
    for a text field input.
-->
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<style type="text/css">
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
			<?php include("header.php");?>


<!-- Navigation --><!-- End Navigation -->
			
		</div>
	</div>
	<!-- End Header -->
	
	
	
	<!-- Content -->
	<div id="content" class="shell">
		
		<!-- Help Navigation -->
		<div id="help-nav"></div>
		<!-- End Help Navigation -->

		<h6 class="red">Welcome <?php echo $_SESSION['SESS_USER_NAME'];?></h6>
		<form id="myform" name="myform" method="post" onsubmit='return confirmChecks(this);' action="list_banner.php">
		  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="">
		    <!--DWLayoutTable-->
		    <tr>
		      <td width="106" valign="top" class="style2"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td width="47" height="23" valign="top" class="style2">S.No</td>
		        
			  <td width="245" valign="top" class="style2">Image</td>
		      <td colspan="2" align="center" valign="top" class="style2">Action</td>
	        </tr>
		    <?php $sel="SELECT  * FROM  $_table58";

		$result=mysql_query($sel,$link) or die (mysql_error());
$total_items = mysql_num_rows($result);
$limit        = $_GET['limit'];
$cat        = $_GET['cat'];
$page        = $_GET['page'];
if((!$limit)  || (is_numeric($limit) == false) || ($limit < 10) || ($limit > 50)) {
     $limit = 10; //default
 }

if((!$page) || (is_numeric($page) == false) || ($page < 0) || ($page > $total_items)) {
      $page = 1; //default
 }
$total_pages     = ceil($total_items / $limit);
$set_limit     = $page * $limit - ($limit);
 $sel="SELECT * FROM $_table58  WHERE id in (5,6)  ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$checkrow=mysql_num_rows($result);
		$i="1";

		while($fetch_sr_data=mysql_fetch_array($result)){ 



            

$c_id=$fetch_sr_data[id];

$image=$fetch_sr_data[image];
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
		    <tr class="<?php echo $tablecss?>">
		      <td align="left" valign="top" class="table_slicer"><input name="chkbx[]" type="checkbox" id="checkbox_<?php  echo $x; // you need a unique id per checkbox ?>" value="<?php  echo $fetch_sr_data['id']; ?>" />
		        <br /></td>
		      <td height="20" align="left" valign="top" class="table_slicer"><?php echo $sno?></td>
		        
		      <td align="left" valign="top" class="table_slicer"><?php echo $image;?></td>
		      <td width="96" align="center" valign="top"><a href="update_newsgallery.php?nid=<?php echo $encoded_cid?>">Edit</a></td>
		      <td width="106" align="center" valign="top" class="table_slicer"><a href="delete_newsgallery.php?nid=<?php echo $encoded_cid?>" onclick="return confirm('Are you sure you want to delete?')"  title="Delete">Delete</a></td>
	        </tr>
		    <?php }?>
	      </table>
		  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="table_header">
		    <!--DWLayoutTable-->
		    <tr>
		      <td width="329" height="25" align="left" valign="middle">&nbsp;</td>
		      <td width="276" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
		        <!--DWLayoutTable-->
		        <tr>
		          <td width="45" height="25" valign="middle"><?php

							if($total_pages>1){

							 $prev_page = $page - 1;

if($prev_page >= 1) {

  echo(" <a href=".$_SERVER['PHP_SELF']."?cat=$cat&amp;limit=$limit&amp;page=1><b><<</b></a>");

}   if($prev_page >= 1) {

  echo(" <a href=".$_SERVER['PHP_SELF']."?cat=$cat&amp;limit=$limit&amp;page=$prev_page><b><</b></a>");

} ?></td>
		          <td width="190" align="center" valign="middle"><?php if($total_pages>5){



if($page>5){

$total_pages1=$page;

$b=$page-4;

}else if($page==5){

$total_pages1=$page;

$b=1;

}

else {

$b=1;

$total_pages1=5;

}



}else {

$b=1;

$total_pages1=$total_pages;

} for($a = $b; $a <=$total_pages1; $a++)

{   if($a == $page) {

      echo("<b> $a </b>  "); //no link

     } else {

     

  echo("  <a href=".$_SERVER['PHP_SELF']."?cat=$cat&amp;limit=$limit&amp;page=$a> $a </a>  ");

     }

       

}?></td>
		          <td width="41" valign="middle"><?php $next_page = $page + 1;

if($next_page <= $total_pages) {

   echo("<a href=".$_SERVER['PHP_SELF']."?cat=$cat&amp;limit=$limit&amp;page=$next_page><b>></b></a> ");

} if( $page!=$total_pages) {

   echo("<a href=".$_SERVER['PHP_SELF']."?cat=$cat&amp;limit=$limit&amp;page=$total_pages><b>>></b></a> ");

}

$cat = urlencode($cat);



}

?></td>
		          <?php ?>
	            </tr>
		        </table></td>
		      <td width="132">&nbsp;</td>
		      <td width="179" valign="top"><table width="221" border="0" cellpadding="0" cellspacing="0">
		        <!--DWLayoutTable-->
		        <tr>
		          <td width="221" height="25" align="left" valign="middle"><div align="right">Results per page : <a href="<?php echo $_server['php_self'];?>?cat=<?php echo $cat;?>&amp;limit=50&amp;page=1">50</a> | <a href="<?php echo $_server['php_self'];?>?cat=<?php echo $cat;?>&amp;limit=75&amp;page=1">75</a> | <a href="<?php echo $_server['php_self'];?>?cat=<?php echo $cat;?>&amp;limit=100&amp;page=1">100</a>&nbsp;&nbsp;</div></td>
	            </tr>
		        </table></td>
	        </tr>
	      </table>
		  <span class="table_slicer"> <br />
		    <br />
		    <input name="delete" type="submit" class="" id="delete"  value="Delete" />
	      </span> <span class="table_slicer">
		      <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
		      <span class="style4">Checkall/uncheckall</span></span>
	  </form>
		<h1>&nbsp;</h1>
	</div>
	
	<!-- End Content -->
</div>

<!-- Footer -->
<?php include("footer.php");?>
<!-- End Footer -->
</body>
</html>
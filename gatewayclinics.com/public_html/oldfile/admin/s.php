<?php 

include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php

/*



*/

include("mainserver.php");

$tbl_name="product"; // Table name

// Connect to server and select databse.

mysql_connect($host, $username, $password)or die("cannot connect");

mysql_select_db($db_name)or die("cannot select DB");



// Check if delete button active, start this

if(isset($_POST['delete'])){

	if(sizeof($_POST['chkbx'])){

		foreach($_POST['chkbx'] AS $val){

		$delete1=("select filename from $tbl_name WHERE id=".(int)$val);

$qry1=mysql_query($delete1) or die(mysql_error());

$del_img1=mysql_fetch_object($qry1);

unlink("../uploads/".$del_img1->filename."");





			$sql = mysql_query("DELETE FROM $tbl_name WHERE id=".(int)$val)or die(mysql_error());

		}

	}

	

	// if successful redirect to delete_multiple.php

	if($sql){

		header('Location:listproductnew.php');//THIS WAS SAMPLE.PHP - YOU MIGHT WANT TO CHANGE IT BACK

	}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
</style><script type="text/javascript" src="check.js"></script>
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
	  <form id="myform" name="myform" method="post" onsubmit='return confirmChecks(this);' action="list_productnew.php">
	  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="">
	    <!--DWLayoutTable-->
	    <tr>
	      <td width="106" valign="top" class="style2"><!--DWLayoutEmptyCell-->&nbsp;</td>
	      <td width="47" height="23" valign="top" class="style2">S.No</td>
	      <td width="245" valign="top" class="style2">Name</td>
	      <td width="245" valign="top" class="style2">Email</td>
	      <td colspan="2" align="center" valign="top" class="style2">Action</td>
        </tr>
	    <?php $sel="SELECT  * FROM  $_table4  ";

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
 $sel="SELECT * FROM $_table4  ORDER BY id DESC LIMIT $set_limit, $limit  ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$checkrow=mysql_num_rows($result);
		$i="1";

		while($fetch_sr_data=mysql_fetch_array($result)){ 



            

$c_id=$fetch_sr_data[id];

$categoryid=$fetch_sr_data[category];
$details=$fetch_sr_data[details];


$subcategoryid=$fetch_sr_data[subcategory];
$filesize=$fetch_sr_data[filesize];
$filename=$fetch_sr_data[filename];
$name=$fetch_sr_data[name];


$qcopy=$fetch_sr_data[qcopy];





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
	      <td align="left" valign="top" class="table_slicer"><?php echo $name;?></td>
	      <td align="left" valign="top" class="table_slicer"><?php echo $email;?></td>
	      <td width="96" align="center" valign="top"><a href="update_product.php?nid=<?php echo $encoded_cid?>">Edit</a></td>
	      <td width="106" align="center" valign="top" class="table_slicer"><a href="delete_product.php?nid=<?php echo $encoded_cid?>" onClick="return confirm('Are you sure you want to delete?')"  title="Delete">Delete</a></td>
        </tr>
	    <?php }?>
      </table>
	  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="table_header">
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
	      <input type="checkbox" name="checkall" onClick="checkUncheckAll(this);"/>
	      <span class="style4">Checkall/uncheckall</span></span>
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
</html>
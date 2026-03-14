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
</style><script type="text/javascript" src="check.js"></script>
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
        <select>
  <optgroup label="Swedish Cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </optgroup>
  <optgroup label="German Cars">
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
  </optgroup>
</select>
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





 
	

 $insert="insert into $_table3 (category,subcategory) values('$category','$subcategory')";
$step1result=mysql_query($insert,$link) or die(mysql_error());
$message=base64_encode('city_success');
header("location:subcategory_add.php?mes=$message&$random");


 // end for submit

}// end for action 
}
if($action=='Update'){
if(isset($_POST['step1'])){

 
$category=$_POST['categor2'];

 $subcategory=$_POST['subcategory'];
$newsid=$_POST['updated_id'];

					
  $update="update $_table3 set category='$category',subcategory='$subcategory' where  id='$newsid' ";
 $update_result=mysql_query($update,$link)or die(mysql_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('city_updated');
header("location:subcategory_add.php?mes=$message&$random");

} // end for submit

}// end for action 
?>

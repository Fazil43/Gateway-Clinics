<?php 

include("maindb.php");?>
<?php




 include("../connection/connection.php");





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
		<form name="form1" id="form1" method="post" action="">
		  <table width="600" border="0" align="center">
		    <tr>
		      <td colspan="3" valign="top"><div align="right">&nbsp;
	            <p><a href="viewprofile.php<?php echo $random?>">View 
		        Profile</a> | <a href="changepassword.php<?php echo $random?>">Change 
	            Password</a></p>
	            <p>&nbsp;</p>
		      </div></td>
	        </tr>
		    <?php 
	
					  $sel="select * from  $_table1  where username='$_SESSION[SESS_USER_NAME]'";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($list=mysql_fetch_array($result)){ 
                $userid=base64_encode($list['member_id']);
				$wantto=$list['wantto'];
				$username=$list['username'];
				$password=$list['password'];
				$createdon=date("dS M Y",strtotime($list['created_on']));
				
					}  ?>
		    <tr valign="top">
		      <td width="215" height="22" class="inputtextfiled_names">UserName</td>
		    <td align="center" class="textfield_names style1 style2">:</td>
		      <td width="304" align="left" valign="top" class="inputtextfiled_names1"><?php echo ucwords($username);?></td>
	        </tr>
		    <tr valign="top">
		      <td height="10" colspan="2" class="inputtextfiled_names"></td>
		      <td align="center" class="inputtextfiled_names"></td>
	        </tr>
		    <tr valign="top">
		      <td class="inputtextfiled_names">Password</td>
		       <td align="center" class="textfield_names style1 style2">:</td>
		      <td align="center" class="inputtextfiled_names1"><?php echo ucwords(base64_decode($password));?></td>
	        </tr>
		    <tr valign="top">
		      <td colspan="3" class="inputtextfiled_names"></td>
	        </tr>
		    <tr valign="top">
		      <td colspan="3">&nbsp;</td>
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

if($action=='step1'){
$userid=$_POST['userid'];
$newpassword=base64_encode($_POST['password']);

$update_password="update $_table1 set password='$newpassword' where id='$userid' ";
$update_password_result=mysql_query($update_password,$link);

?>
<script>
					alert ("Password Changed Successfully..");
					location.href="viewprofile.php";
					</script>
				
<?php 
}
?>
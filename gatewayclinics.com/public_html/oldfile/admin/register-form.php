<?php 
@ob_start();
error_reporting(0);
session_start();
//include("maindb.php");?>
<?php




 include("../connection/connection.php");





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
		<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
          <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
            <tr>
              <th>First Name </th>
              <td><input name="fname" type="text" class="textfield" id="fname" /></td>
            </tr>
            <tr>
              <th>Last Name </th>
              <td><input name="lname" type="text" class="textfield" id="lname" /></td>
            </tr>
            <tr>
              <th width="124">username</th>
              <td width="168"><input name="username" type="text" class="textfield" id="username" /></td>
            </tr>
            <tr>
              <th>Password</th>
              <td><input name="password" type="password" class="textfield" id="password" /></td>
            </tr>
            <tr>
              <th>Confirm Password </th>
              <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="Submit" value="Register" /></td>
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
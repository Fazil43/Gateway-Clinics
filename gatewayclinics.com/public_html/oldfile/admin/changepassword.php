<?php 

include("maindb.php");?>
<?php




 include("../connection/connection.php");



$gettingid=base64_decode($_GET['uid']);

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
</style><script language="javascript" type="text/javascript">
function validate()
{
	var frm=document.passwordpanel;
	if(frm.oldpassword.value=="")
	{
		alert("Please enter Old Password..");
		//frm.oldpassword.focus();
		return false;
	}else if(frm.password.value=="")
	{
		alert("Please Enter New Password..");
		//frm.password.focus();
		return false;
	} else	if(frm.cpassword.value=="")
	{
		alert("Please Enter Retype New Password..");
		//frm.cpassword.focus();
		return false;
	} 
	
	
	else if(frm.cpassword.value!=frm.password.value)
	{
		alert("Password Didnot Match Please Reenter Again..");
		//frm.cpassword.focus();
		return false;
	}
	else if(frm.checkoldpassword.value!=frm.oldpassword.value)
	{
		alert("Entered Old Password is Wrong..");
		//frm.cpassword.focus();
		return false;
	}
	
	else {
	return true;
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
		<form   method="post" action="changepassword.php?action=step1"  onsubmit="javascript:return onsubmitform();" onreset="javascript: resetform();" name="passwordpanel" id="passwordpanel" >
		  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		    <!--DWLayoutTable-->
		    <tr>
		      <td height="19" colspan="5"></td>
	        </tr>
		    <tr>
		      <td width="219" height="19">&nbsp;</td>
		      <td colspan="4" valign="top" class="error"><div align="right"><a href="viewprofile.php<?php echo $random?>">View 
		        Profile</a> | <a href="changepassword.php<?php echo $random?>">Change 
              Password</a></div></td>
	        </tr>
		    <!--DWLayoutTable-->
		    <tr>
		      <td height="31">&nbsp;</td>
		      <td width="52"><?php include("Message.php");?></td>
		      <td width="48">&nbsp;</td>
		      <td width="118">&nbsp;</td>
		      <td width="163">&nbsp;</td>
	        </tr>
		    <?php 
	
					  $sel="select * from  $_table1  where username='$_SESSION[SESS_USER_NAME]'";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($list=mysql_fetch_array($result)){ 
                $userid=($list['member_id']);
				$wantto=$list['wantto'];
				$username=$list['username'];
				$password=$list['password'];
				$createdon=date("dS M Y",strtotime($list['created_on']));
				
					}  ?>
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="19" class="inputtextfiled_names">Username 
		        * </td>
		      <td align="center" class="textfield_names style1 style2">:</td>
		      <td colspan="3" class="inputtextfiled_names1 "><?php echo ucwords($username);?><br /></td>
	        </tr>
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="10"><span class="style21"></span></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
	        </tr>
		    <input name="userid" type="hidden" value="<?php echo $userid?>" />
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="21" class="inputtextfiled_names">Old Password * </td>
		      <td align="center" class="textfield_names style1 style4">:</td>
		      <td colspan="3" align="left"><input name="oldpassword" type="password" class="inputtextfiled" id="oldpassword" /></td>
	        </tr>
		    <input name="checkoldpassword" type="hidden" id="checkoldpassword" value="<?php echo $password?>" />
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="10"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
	        </tr>
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="21" class="inputtextfiled_names">Password 
		        * </td>
		      <td align="center" class="textfield_names style1 style4">:</td>
		      <td colspan="3" align="left"><input name="password" type="password" class="inputtextfiled" id="password" /></td>
	        </tr>
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="10"><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
		      <td><span class="style41"></span></td>
	        </tr>
		    <tr valign="top" class="inputtextfiled_names">
		      <td height="21" class="inputtextfiled_names">Re type 
		        Password * </td>
		      <td align="center" class="textfield_names style1 style4">:</td>
		      <td colspan="3" align="left"><input name="cpassword" type="password" class="inputtextfiled" id="cpassword" /></td>
	        </tr>
		    <tr>
		      <td height="36" valign="top"><span class="style21"></span></td>
		      <td></td>
		      <td>&nbsp;</td>
		      <td>&nbsp;</td>
		      <td></td>
	        </tr>
		    <tr>
		      <td height="25" valign="top"><span class="style21"></span></td>
		      <td><!--DWLayoutEmptyCell-->&nbsp;</td>
		      <td align="right" valign="top">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
		        <div align="left">
		          <input name="Submit" type="reset"  value="Reset"  class=""/>
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div></td>
		      <td><div align="left">
		        <input name="reg_step1"  type="submit"  id="reg_step13" value="Change Password" onclick="javascript: return validate();"/>
		        </div>
		        <div align="center"></div></td>
		      <td><!--DWLayoutEmptyCell-->&nbsp;</td>
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

$update_password="update $_table1 set password='$newpassword' where member_id='$userid' ";
$update_password_result=mysql_query($update_password,$link);
?>
<script>
					alert ("Password Changed Successfully..");
					location.href="viewprofile.php";
					</script>
				
<?php 
}
?>
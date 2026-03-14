<?php 
error_reporting(0);
@ob_start();
 @session_start();

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link href="loginmodule1.css" rel="stylesheet" type="text/css" />

</head>


<body>
	<!-- end of header bar --><!-- end of secondary bar --><!-- end of sidebar --><form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input name="Submit" type="submit" class="button_withbg" value="Login" /></td>
    </tr>
  </table>
</form></body>

</html>
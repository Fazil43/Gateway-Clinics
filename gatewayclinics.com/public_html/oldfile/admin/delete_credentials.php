<?php
ob_start();
include("../connection/connection.php");
$neid=base64_decode($_GET['nid']);
 $sql="delete from $_table6 where id='$neid'";
	$result=mysql_query($sql,$link) or die(mysql_error());
header("location:list_credentials.php");

?>
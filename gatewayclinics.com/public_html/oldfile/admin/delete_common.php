<?php
@ob_start();
include("../connection/connection.php");
$neid=base64_decode($_GET['nid']);

$sql2="delete from $_table84  where id='$neid'";
	$result=mysql_query($sql2,$link) or die(mysql_error());
	
 

header("location:list_common.php");
?>
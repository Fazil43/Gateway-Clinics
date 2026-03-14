<?php
ob_start();
include("../Connection/connection.php");
$neid=base64_decode($_GET['nid']);
 $sql="delete from $_table5 where id='$neid'";
	$result=mysql_query($sql,$link) or die(mysql_error());
header("location:listnews.php");

?>
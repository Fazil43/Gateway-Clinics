<?php
@ob_start();
include("../connection/connection.php");
$neid=base64_decode($_GET['cid']);

 $sql="delete from $_table2 where id='$neid'";
	$result=mysql_query($sql,$link) or die(mysql_error());

header("location:additem.php");
?>
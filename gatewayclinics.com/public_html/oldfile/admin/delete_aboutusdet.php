<?php
@ob_start();
include("../connection/connection.php");
$neid=base64_decode($_GET['nid']);

$delete1="select image from $_table98 where  id='$neid'";
$qry1=mysql_query($delete1,$link) or die(mysql_error());
$del_img1=mysql_fetch_object($qry1);
unlink("uploads/".$del_img1->image."");
$sql2="delete from $_table98  where id='$neid'";
	$result=mysql_query($sql2,$link) or die(mysql_error());
	
 

header("location:list_aboutusdet.php");
?>
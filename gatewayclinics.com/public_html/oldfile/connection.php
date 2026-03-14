<?php
error_reporting(0);
?>
 
<?php



/*$S_host="localhost";
$S_username="root";
$S_password="";
$database="doctor";*/

$S_host="localhost";
$S_username="gate01";
$S_password="gateway!@#";
$database="gateway01";

/*

$S_host="127.0.0.1";
$S_username="thedesig_tdbl56";
$S_password="design@rt&*12";
$database="thedesig_tdblog";
*/

$link=mysql_connect($S_host,$S_username,$S_password)or die(mysql_error());
$db=mysql_select_db($database,$link) or die("Unable Connect to Db Name".$database);

$_table1="members";
$_table0="logininfo";
$_table3="aboutus";
$_table56="user_reg";
$_table2="category";
$_table4="doctorgallery";
$_table5="dfac1";
$_table6="credentials"; 
$_table45="videogallery";
$_table46="gallery";
$_table47="videoed";
$_table48="doctordet";
$_table50="banner";
$_table54="mainind";
$_table9="endo";
$_table55="services";
$_table23="servicecategory";
$_table24="aboutuscat";
$_table25="comcat";
$_table26="comdet";
$_table63="aboutusdet";
$_table57="sercatdet";
$_table58="news";
$_table59="medicalbanner";
$_table62="medical";
$_table75="surgery";
$_table76="comcatdet";
$_table77="catdetc";
$_table83="commoncategory";
$_table84="common";

$serverdate=date("Y-m-d H:i:s");

$logintime=date("Y-m-d H:i:s");

?>
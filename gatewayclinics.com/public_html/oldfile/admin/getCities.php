<?php error_reporting(0);?>
<?php
include("../connection/connection.php");
if(isset($_GET['countryCode'])){
  $countryid=$_GET['countryCode'];
 $sel="SELECT  * FROM  $_table3  where category='$countryid'  ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		echo "obj.options[obj.options.length] = new Option('--Select SubCategory --','');\n";
		while($fetch_sr_data=mysql_fetch_array($result)){ 
            
$c_id=$fetch_sr_data[id];
$country=$fetch_sr_data[country];
 $filename=$fetch_sr_data[filename];
  $pname22=$fetch_sr_data[subcategory];
echo "obj.options[obj.options.length] = new Option('$pname22','$c_id');\n";
}
      
     
}

?>
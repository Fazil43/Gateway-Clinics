<?php error_reporting(0);?>
<?php 
@ob_start();
@session_start();



?>
<?php
@ob_start();
@session_start();
include("../connection/connection.php");



$gettingcityid=$_GET['nid'];
$decodedcityid=base64_decode($gettingcityid);

 $sel="SELECT  * FROM  $_table55 where id='$decodedcityid' ";
		$result=mysql_query($sel,$link) or die (mysql_error());
		
if($fetch_sr_data=mysql_fetch_array($result)){ 
            
$id3=$fetch_sr_data[id];
$country_id_upd=$fetch_sr_data[country_id];
$city=$fetch_sr_data[cityname];
$image=$fetch_sr_data[image];
$pname=$fetch_sr_data[pname];
}

if(!$gettingcityid){
				$do="Create";
				}else{
				$do="Update";
				}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript" src="city.js"></script>

<title> Adminpanel</title>
<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script><script language="javascript" >
function resetform()
{
document.news.reset;
}
function onsubmitform()
{


var un=document.news;
		 if (un.name.value == "" )	{	
		document.getElementById("error_city").innerHTML="Please Enter product Name !!";
		
		return false;
		}
			 if (un.country.value == "" )	{	
		document.getElementById("error_city").innerHTML="Please Select the Category Name !!";
		
		return false;
		}
		if (un.country.value == "" )	{	
		document.getElementById("error_city").innerHTML="Please Enter the message !!";
		
		return false;
		}
		
		else
		{
		return true;
		}
}// end of function 




</script><script language="javascript">

var ajax = new Array();

function getCityList(sel)
{
	var countryCode = sel.options[sel.selectedIndex].value;
	document.getElementById('pname').options.length = 0;	// Empty city select box
	if(countryCode.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		var url='getCities.php?countryCode='+countryCode
		//alert(url);
		ajax[index].requestFile =url ;	// Specifying which file to get
		ajax[index].onCompletion = function(){ createCities(index) };	// Specify function that will be executed after file has been found
		ajax[index].runAJAX();		// Execute AJAX function
	}
}

function createCities(index)
{
	var obj = document.getElementById('pname');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	
}



</script>
<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script><script language="javascript">  
row_no=0; 
function addRow(tbl,row){  
//alert(row);
row_no++;  
//if (row_no<=20){ 
if (row_no<=10){  
if (row_no>=10){  
var textbox  = row_no+'.)';}  
if (row_no<10){  
var textbox  = row_no+'.<input type="file" size = "20" maxlength= "30" name=image[]>   ';}   
/* 
var textbox3 = ' ';
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(2);  
newCell.innerHTML = textbox3;  
var newCell = newRow.insertCell(3);  

newCell.innerHTML = checkbox;  
}  
if (row_no>10){  
alert ("Too Many Items. Limit of 10.");  
}  
} 
</script>
<style type="text/css">
<!--
.topbordercolor {
	border: medium none #CC3300;
}
-->
</style>
 <link href="stallion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {	font-family: Arial;
	font-size: 12px;
}
.style2 {font-family: Arial; font-size: 12px; font-weight: bold; }
.style3 {color: #CC3300}
-->
</style></head>

<body>
<table width="950" align="center" cellpadding="0"  cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="24" colspan="2" align="left" valign="bottom"></td>
  </tr>
  
  
  <tr>
    <td width="207" height="153" valign="top">&nbsp;</td>
    <td width="877"><form action="subproduct_add1.php?action=<?php echo $do?>" method="post"  enctype="multipart/form-data" name="news" id="news"  onsubmit="javascript:return onsubmitform()" onreset="resetform()">
        <table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="lightgrey_outline">
          <!--DWLayoutTable-->
          <tr> 
            <td height="28" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="subheader">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="331" height="28" valign="middle"><?php echo $do?> 
                    Product </td>
                  <td width="160">&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td width="15" height="26"></td>
            <td width="99"></td>
            <td width="9"></td>
            <td valign="top"class="error"> 
              <?php include("Message.php");?>            </td>
            <td width="93"></td>
          </tr>
          <tr> 
            <td height="7"></td>
            <td></td>
            <td></td>
            <td width="119"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top"></td>
            <td></td>
            <td></td>
            <td valign="top"class="error"><div id="error_city"></div></td>
            <td></td>
          </tr>
          <input name="updated_id" type="hidden" value="<?php echo $decodedcityid?>" />
          <tr> 
            <td height="19"></td>
            <td>Category</td>
            <td></td>
            <td valign="top"class="error"><span class="inputtextfiled_names">
              <select name="category" id="category" class="inputtextfiled">
                <option value="">-- Select Category -- </option>
                <?php 
			 
			  $sel3="SELECT  * FROM  $_table23  ";
		$result3=mysql_query($sel3,$link) or die (mysql_error());
$i=1;

while($fetch_sr_data3=mysql_fetch_array($result3)){ 
            
$c_id=$fetch_sr_data3[id];
$category=$fetch_sr_data3[category];



?>
                <option value="<?php echo $c_id?>"  <?php  if($country_id_upd==$c_id){ echo "Selected";}?>><?php echo $category?></option>
                <?php  }?>
              </select>
            </span></td>
            <td></td>
          </tr>
          
          <tr> 
            <td height="19"></td>
            <td>Description </td>
            <td></td>
            <td valign="top"class="error"><textarea id="textarea1" name="message" style="height: 170px; width: 500px;">

<?php echo $message;?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19"></td>
            <td></td>
            <td></td>
            <td valign="top"class="error"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          
          <tr> 
            <td height="36"></td>
            <td><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td>&nbsp;</td>
            <td width="119" valign="top"><span class="style12">
              <label></label>
              <input name="Button" type="button" class="red_button" onclick="addRow('table1','row1')" value="Add Image" />
              </span>
                <table width="750" border="0" cellspacing="0" cellpadding="2" id="table1">
                  <center>
                    <tr>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                      <th><div align="left"></div></th>
                      <th>&nbsp;</th>
                    </tr>
                  </center>
                  <tr id="row1"> </tr>
                </table>
              <input type='hidden' value='set'name='pasalog' />
                <span class="style12"> (upload only jpg,jpeg,gif,png)</span></td>
            <td></td>
          </tr>
          
          <tr> 
            <td height="36"></td>
            <td><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td>&nbsp;</td>
            <td><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="36"></td>
            <td><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td>&nbsp;</td>
            <td><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          
          <tr> 
            <td height="25"></td>
            <td></td>
            <td>&nbsp;</td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td height="25" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td width="88" height="25" valign="top"><input name="Reset" type="reset" class="button_withbg" id="button" value="Reset" /></td>
                  <td width="296" valign="top"><input name="step1" type="submit" class="button_withbg" id="step1" value="<?php echo $do?>SubProduct" /></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="53"></td>
            <td></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="19"></td>
            <td colspan="2" align="left" valign="top" class="red_title"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="13"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
    </form>
    <table width="94%" align="center" cellpadding="0"  cellspacing="0" class="Box">
    </table></td>
  </tr>
</table>
</body>
</html>
<?php 
 $action=$_GET['action'];
if($action=='Create'){
$image=$_POST['image'];
$image2=$_POST['image2'];
$image3=$_POST['image3'];
$image4=$_POST['image4'];
$image5=$_POST['image5'];
$image6=$_POST['image6'];
$image7=$_POST['image7'];
$image8=$_POST['image8'];

define ("MAX_SIZE","134443400"); 
function getExtension($str) 
{        
 $i = strrpos($str,".");      
    if (!$i) { return ""; }        
	 $l = strlen($str) - $i;         
	 $ext = substr($str,$i+1,$l);         
	 return $ext; }
$errors=0;
  {
  //print_r($_FILES['image']['name']);
$arcnt=count($_FILES['image']['name']);
$limit_size=50000;
 for($i=0;$i<$arcnt;$i++)
 {
$image=$_FILES['image']['name'][$i];
if ($image)  	{
$image = stripslashes($_FILES['image']['name'][$i]);
$extension = getExtension($image); 		$extension = strtolower($extension);
 if (($extension != "jpg")&& ($extension != "jpeg")&& ($extension != "gif")&& ($extension != "png"))  		{
 
 $msg="Please Specifies  Only Images";  


			$errors=1; 		} 		else 		{
//$size=filesize($_FILES['image']['tmp_name']);
 $size1=$_FILES['image']['size'][$i];
 
}
}
if ($size > MAX_SIZE*1024){	echo '<h1>You have exceeded the size limit!</h1>';	$errors=1;}
$size1=$_FILES['image']['size'][$i];
$dbimagename[].=$i.time().'.'.$extension;
$image_name[$key9]=$i.time().'.'.$extension;
$newname="../image/".$image_name[$key9];

$copied = copy($_FILES['image']['tmp_name'][$i], $newname);if (!$copied)
 {	
echo "Upload only jpg,jpeg,doc,text,gif";	
 $errors=1;}}}
 
 
 }
 

if(isset($_POST['step1'])&& !$errors){
$country=$_POST['country'];
 $city1=$_POST['city'];
if(!get_magic_quotes_gpc()){
$city=addslashes($city1);
 }else{
 $city=$city1;
 }	
 $category=$_POST['category'];
 $image=$_POST['image'];
$pname=$_POST['pname'];
$name=$_POST['name'];

$message=$_POST['message'];
$image=$_POST['image'];
$filesize=$_POST['filesize'];
$image2=$_POST['image2'];
$image3=$_POST['image3'];
$image4=$_POST['image4'];
$image5=$_POST['image5'];
$image6=$_POST['image6'];
$image7=$_POST['image7'];
$image8=$_POST['image8'];
$propertycity=$_POST['propertycity'];
$createdon=$serverdate;		
	$sizearr=$_FILES['image']['size'];
	$arcntdb=count($_FILES['image']['name']);
 	$kylin = $_FILES['image']['name'];
	
	
 for($k=0;$k<$arcntdb;$k++)
 {
$dbase_insert = "insert into $_table55(category,image,filesize,details,createddate)values('$category','$dbimagename[$k]','$sizearr[$k]','$details','$serverdate')";
			$dbase_inserted = mysql_query($dbase_insert,$link);
$message=base64_encode('city_success');
header("location:subproduct_add1.php?mes=$message&$random");

}
} // end for submit
// end for action 
?>

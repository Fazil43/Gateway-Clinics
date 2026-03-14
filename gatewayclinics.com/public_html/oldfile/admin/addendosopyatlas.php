<?php 
error_reporting(0);
@ob_start();
@session_start();
include("maindb.php");?>
<?php




 include("../connection/connection.php");





?><?php

$gettingproductnameid=$_GET['nid'];

$decodedproductnameid=base64_decode($gettingproductnameid);



 $sel="SELECT  * FROM  $_table98 where id='$decodedproductnameid' ";

		$result=mysql_query($sel,$link) or die (mysql_error());

		

if($fetch_sr_data=mysql_fetch_array($result)){ 

            

$c_id=$fetch_sr_data[id];

$details=$fetch_sr_data[details];
}

if(!$gettingproductnameid){

				$do="Create";

				}else{

				$do="Update";

				}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Add PostDetails</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
   	<link rel="stylesheet" href="css/responsive-tables.css">
    <script language="javascript" src="city.js"></script>
    <script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<script language="javascript">

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
    <link rel="stylesheet" href="docs/css/bootstrap-3.2.0.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/bootstrap-example.css" type="text/css">
        <link rel="stylesheet" href="docs/css/prettify.css" type="text/css">

        <script type="text/javascript" src="docs/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="docs/js/bootstrap-3.2.0.min.js"></script>
        <script type="text/javascript" src="docs/js/prettify.js"></script>

        <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="dist/js/bootstrap-multiselect1.js"></script>
<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
        <script type="text/javascript">
            $(document).ready(function() {
                window.prettyPrint() && prettyPrint();
            });
        </script>
<style type="text/css">
.demo-ad-top {	margin:20px 0;
}
</style><script language="javascript">

function inamodel_validate(theval)

{

if(theval.details.value=="")

{

alert("Enter the Details");

theval.details.focus();

return (false);

}
}

</script><script>
$(document).ready(function(){
	var increment=2;
  $("#addButton").click(function(){
		
	  if(increment > 50)
	  {
		alert(increment);
		return false;
	  }
	  // two methods
	  // first memthod...we can write div element
		var maincontent="<label>Textbox #"+increment+" : </label>Product Name:<input type ='textbox' name='pname[]"+increment+"' id='textbox"+increment+"'/>Product Code:<input type ='textbox' name='pcode[]"+increment+"' id='textbox"+increment+"'/>Mrp Price:<input type ='textbox' name='pprice[]"+increment+"' id='textbox"+increment+"'/>";
		var fun="<div id='TextBoxDiv"+increment+"'>"+maincontent+"</div>";
		//$("#TextBoxesGroup").append(fun);
    
	//second method 
	// here jquery through create div element
	
	  var newTextBoxDiv = $(document.createElement('div')).attr('id', 'TextBoxDiv' +increment);
	  newTextBoxDiv.after('').html(maincontent);	  
	 $(newTextBoxDiv).appendTo("#TextBoxesGroup");
	
	increment++;
  });
  $("#removeButton").click(function () {
		    if(increment==1){
		        alert("No more textbox to remove");
		        return false;
		    }   
	        increment--;
			
	        $("#TextBoxDiv" + increment).remove();
		});
		
		$("#getButtonValue").click(function () {
		
			var msg = '';
			for(i=1; i<increment; i++){
				msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
			}
		   	alert(msg);
		});
		
});
</script><script type="text/javascript" src="jquery.js"></script>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
<style type="text/css">
<!--
.style1 {font-family: Arial;

	font-size: 12px;
}
.style1 {font-family: Arial;
	font-size: 12px;
}
.style2 {font-family: Arial; font-size: 12px; font-weight: bold; }
.style4 {	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;
}
.style3 {color: #CC3300}
.style5 {	color: #FFFFFF;

	background-color: #FFFFFF;
}
.style5 {color: #CC3300}
-->
</style>
</head>
<body>

	
	<!-- Header -->
	<div id="header">
		<div class="shell">
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
		<div align="center">Welcome <?php echo $_SESSION['SESS_USER_NAME'];?>
		  <form action="addendosopyatlas.php?action=<?php echo $do?>" method="post" enctype="multipart/form-data" name="form1" onsubmit="return inamodel_validate(this); " onreset="resetform()"  id="form1">
		    <table width="600" border="0" align="center">
		      <tr>
		        <td width="327">&nbsp;</td>
		        <td width="26" valign="top">&nbsp;</td>
		        <td width="233">&nbsp;</td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td valign="top">&nbsp;</td>
		        <td><?php include("Message.php");?></td>
	          </tr>
		      <input name="updated_id" type="hidden" value="<?php echo $decodedproductnameid?>" />
		      <input name="username" type="hidden" value="<?php echo $SESS_USER_NAME;?>" />
		      <tr>
		        <td>Details</td>
		        <td valign="top">&nbsp;</td>
		        <td><textarea id="textarea1" name="details" style="height: 170px; width: 500px;">

<?php echo $details;?></textarea><script language="JavaScript1.2" type="text/javascript">
  generate_wysiwyg('textarea1');
                </script></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td valign="top">:</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2">&nbsp;</td>
		        <td><input type="submit" name="Submit" id="Submit" value="<?php echo $do;?>" /></td>
	          </tr>
	        </table>
		    <p>
		      <label></label>
	        </p>
		    <p>&nbsp;</p>
	      </form>
		  <script>

$(document).ready(function(){
  $("input[name$='status']").click(function(){
  var value = $(this).val();
  if(value=='Individual') {
    $("#Individual_box").show();
     $("#Company_box").hide();
  }
  else if(value=='Company') {
   $("#Company_box").show();
    $("#Individual_box").hide();
   }
  });
  $("#Individual_box").show();
  $("#Company_box").hide();
});

          </script>
		  <br />
		  <br />
		  <div class="demo-ad-top">
		    <script type="text/javascript"><!--
google_ad_client = "pub-6948325743993832";
/* post-ad */
google_ad_slot = "4743378107";
google_ad_width = 336;
google_ad_height = 280;
//-->
            </script>
		    <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ad.js">
            </script>
	      </div>
	  </div>
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
if($action=='Create'){

if(isset($_POST['Submit'])){

$details1=$_POST['details'];
if(!get_magic_quotes_gpc()){
$details=addslashes($details1);
 }else{
 $details=$details1;
 }
 
 
 
$propertycity=$_POST['propertycity'];
$createdon=$serverdate;		
	
	
  $insert="insert into $_table98 (details,createdon) values('$details','$createdon')";
$step1result=mysql_query($insert,$link) or die(mysql_error());
$message=base64_encode('city_success');
header("location:addendosopyatlas.php?mes=$message&$random");


} // end for submit

}// end for action 

if($action=='Update'){

if(isset($_POST['Submit'])){

$details1=$_POST['details'];
if(!get_magic_quotes_gpc()){
$details=addslashes($details1);
 }else{
 $details=$details1;
 }
 
 
 
$propertycity=$_POST['propertycity'];
$createdon=$serverdate;		
	$newsid=$_POST['updated_id'];
	
  $Insql="update $_table98 set details='$details' where id='$newsid'";
$step1result=mysql_query($Insql,$link) or die(mysql_error());
$message=base64_encode('city_success');
header("location:addendosopyatlas.php?mes=$message&$random");


} // end for submit

}// end for action 


?>

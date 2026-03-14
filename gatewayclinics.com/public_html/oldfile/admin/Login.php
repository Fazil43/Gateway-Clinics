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
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/get-files.js" type="text/javascript"></script>
	<!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/grey.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
<script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

<style type="text/css">
.style1 {font-family: Arial;

	font-size: 12px;
}
.style3 {
	color: #FFFFFF;

	background-color: #FFFFFF;
}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;
}
</style>><script language="javascript">

function inamodel_validate(theval)

{

if(theval.category.value=="")

{

alert("Enter the Category Name");

theval.category.focus();

return (false);

}

}

</script><link href="loginmodule.css" rel="stylesheet" type="text/css" />
<link href="../css/bschool.css" rel="stylesheet" type="text/css" />
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
	document.getElementById('subcategory').options.length = 0;	// Empty city select box
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
	var obj = document.getElementById('subcategory');
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
var textbox  = row_no+'.<input type="file" size = "20" maxlength= "30" name=filename[]>   ';}   
var textarea = '<textarea id=textarea1 name="name[]"></textarea>'; 
/* 
var textbox3 = ' ';
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(1);  
newCell.innerHTML = textarea;  
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


<script type='text/javascript'> function confirmChecks(someForm) {   var inputList = someForm.getElementsByTagName('input');   var aCheckboxIsChecked = false;   for (var i=0; i < inputList.length; i++) {     if (inputList[i].type.toLowerCase() == 'checkbox' && inputList[i].checked) {       aCheckboxIsChecked = true;       break;     }   }    if (aCheckboxIsChecked) {     var proceed = confirm('Really delete those things?');     if (!proceed) {       return false;     }   }   return true; } </script> 

<script>

function confirmDelete(delUrl) {

  if (confirm("Are you sure you want to delete")) {

    document.location = delUrl;

  }

}

</script><SCRIPT LANGUAGE="JavaScript">

<!-- 	

// by Nannette Thacker

// http://www.shiningstar.net

// This script checks and unchecks boxes on a form

// Checks and unchecks unlimited number in the group...

// Pass the Checkbox group name...

// call buttons as so:

// <input type=button name="CheckAll"   value="Check All"

	//onClick="checkAll(document.myform.chkbx)">

// <input type=button name="UnCheckAll" value="Uncheck All"

	//onClick="uncheckAll(document.myform.chkbx)">

// -->



<!-- Begin

function checkAll(field)

{

for (i = 0; i < field.length; i++)

	field[i].checked = true ;

}



function uncheckAll(field)

{

for (i = 0; i < field.length; i++)

	field[i].checked = false ;

}

//  End -->

</script><script type="text/javascript" src="check.js"></script>

<script language="javascript" >

function resetform()

{

document.news.reset;

}











</script><script language="JavaScript" type="text/javascript" src="wysiwyg.js">
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
	document.getElementById('subcategory').options.length = 0;	// Empty city select box
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
	var obj = document.getElementById('subcategory');
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
var textbox  = row_no+'.<input type="file" size = "20" maxlength= "30" name=filename[]>   ';}   
var textarea = '<textarea id=textarea1 name="name[]"></textarea>'; 
/* 
var textbox3 = ' ';
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(1);  
newCell.innerHTML = textarea;  
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
#news .lightgrey_outline tr .error {
	color: #900;
}
-->
</style>
</head>


<body>

	<header id="header"></header> 
	<!-- end of header bar -->
	
	<section id="secondary_bar">

	</section><!-- end of secondary bar -->
	
<aside id="sidebar" class="column"></aside>
<!-- end of sidebar --><form id="loginForm" name="loginForm" method="post" action="login-exec.php">
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
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form></body>

</html>
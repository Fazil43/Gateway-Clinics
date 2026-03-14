<?php 
error_reporting(0);
@ob_start();
 @session_start();
//include("auth.php");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <script language="javascript">  
row_no=0; 
function addRow(tbl,row){  
//alert(row);
row_no++;  
//if (row_no<=20){ 
if (row_no<=3452){  
if (row_no>=3452){  
var textbox  = row_no+'.)';}  
if (row_no<3452){  
var textbox  = row_no+'.Add Email.<input type="text" size = "20" maxlength= "30" value="<?php echo $foodname;?>" name="remail[]">   ';}   


/*
var checkbox = ''; */

var tbl = document.getElementById(tbl);  
var rowIndex = document.getElementById(row).value;  
var newRow = tbl.insertRow(row_no); 
var newCell = newRow.insertCell(0);  
newCell.innerHTML = textbox; 
var newCell = newRow.insertCell(1);  
newCell.innerHTML = textbox2;  
var newCell = newRow.insertCell(2);  
newCell.innerHTML = textbox3;  
var newCell = newRow.insertCell(3);  

newCell.innerHTML = checkbox;  
}  
if (row_no>3452){  
alert ("Too Many Items. Limit of 1.");  
}  
} 
</script>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
</head>

<body>     
            <tr>
              <td height="19"></td>
              <td width="690" valign="top"><span class="style12">
              <label></label>
                <input name="Button" type="button" class="button_withbg" onClick="addRow('table1','row1')" value="<?php echo $do?>Emailid" />
                </span>
                <table width="500" border="0" cellspacing="0" cellpadding="2" id="table1">
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
                <input type='hidden' value='set'name='step1' /></td>
              <td width="113">&nbsp;</td>
            </tr>
            
</body>
</html>
<?php
error_reporting(0);
@ob_start();
?><?php
  // if submitted form process and send mail
  if($_POST['Submit']=="Send")
{
	
	$Fullname= $_POST['Fullname'];
	$Email = $_POST['Email'];
	$emailaddress = $_POST['Email'];
	$Mobile=$_POST['Mobile'];
$Address=
$Address1=$_POST['Address'];
if(!get_magic_quotes_gpc()){
$Address=addslashes($Address1);
 }else{
 $Address=$Address1;
 }



$Complaint1=$_POST['Complaint'];
if(!get_magic_quotes_gpc()){
$Complaint=addslashes($Complaint1);
 }else{
 $Complaint=$Complaint1;
 }

	$req = $_POST['req']; 
	$emailaddress = explode(",",$Email);

for ($start=0; $start < count($emailaddress); $start++) {

 $to3=$emailaddress[$start];	
 $to3='mohanrajbict@gmail.com';

$Email=$_REQUEST["Email"];
//$to1="Thanks we received your emailid at $email";
$subject = 'Enquiry For Gateway Clinics';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
// Additional headers
$headers .= 'From: '.$Email. "\n";

// To send HTML mail, the Content-type header must be set

 $headers .= "<style type=text/css>
<!--

-->
</style>
</head>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>


       <span style='font-size: 18pt; color: #ffffff; font-family: BankGothic Md BT'>Enquiry</span></td>
           <table width=100% border=0 cellpadding=0 cellspacing=0>
              <!--DWLayoutTable-->
              <tr> 
                <td width=625 height=230 valign=top class=body1>
                <p> <strong> Enquiry details: </strong><br>
                    <br>
				   Name : $Fullname<br/>
                   Email : $Email<br/>
                   Phone Number : $Mobile<br/>
                   Address : $Address<br/>                  
                   Complaint : $Complaint<br/>
                    <br>
                  </p>
                  
                    <br>
                    <br>
                  </p></td>
              </tr>
            </table></td>
          <td></td>
        </tr>
        <tr> 
          <td height=70></td>
          
          <td colspan=4 valign=top><table width=100% border=0 cellpadding=0 cellspacing=0>
              <!--DWLayoutTable-->
              
            </table></td>
          <td></td>
        </tr>
       
            </table></td>
        </tr>
    </table></td>
    <td></td>
  </tr>
</table>";// user end mail form end 
                  

//$to1=$_POST['email'];

$to1 = "$Email";
$subject1 = "Acknowledgement";
$message1 = "we received your emailid we will get back to you Shortly!!.";
$from1 = "saravanabca1988@gmail.com";
$headers1 = "From: $from1";
mail($to1,$subject1,$message1,$headers1);
//echo "Mail Sent.";



  
	
	// Mail it
      mail($to3,$subject,$message,$headers);
	header("location:contact-form-thank-you.html");




  
  }
  }
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact us</title>
    
<!-- define some style elements-->
<style>
h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px;
    font-weight : bold;
}
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
</head>	
</head>

<body>
<h1>Contact us</h1>
<form method="POST" name="contactform"   action="new.php"> 
<p>
<label for='name'>Patient Name:</label> <br>
<input type="text" name="Fullname">
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="Email"> <br>
</p>

<p>
<label for='email'>Mobile Number:</label> <br>
<input type="text" name="Mobile"> <br>
</p<p>
<label for='email'>Address:</label> <br>
<textarea  name="Address"> </textarea><br>
</p>


<p>
<label for='message'>My Complaint:</label> <br>
<textarea name="Complaint"></textarea>
</p>
<input type="submit" name="Submit" value="Send"><br>
</form>

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<!--
Sample code from:
http://www.html-form-guide.com/contact-form/php-email-contact-form.html
-->


</body>
</html>
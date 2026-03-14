<?php
require 'phpmailer/PHPMailerAutoload.php';
include 'sms/sms.php';

$name = $_POST['fname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$requirement= $_POST['requirement'];

$domain = 'http://pentagreen.in/';

$customer = '9791221122';
$vistor = $phone;
$inway = "9585024700";
$customer_text ='Enquiry Received from your Website '.$domain. ' Check your email for further details - Inway';
$vistor_text ='Thank you for your Enquiry on '.$domain. ' We will get back to you shortly. Wishing you a great day.';
$inway_text ='Enquiry Received from your Website '.$domain. ' Check your email for further details - Inway';

// call mail object
$mail = new PHPMailer(); 

//use if smtp 

$mail->isSMTP(); // telling the class to use SMTP
/*$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';*/
$mail->SMTPAuth   = true;                  // enable SMTP authentication
//$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "mail.123online.in";      // sets  the SMTP server
$mail->Port       = 26;                   // set the SMTP port for the GMAIL server
$mail->Username   = "demo@123online.in";  //  username
$mail->Password   = "WbuXId]2r!vq";            //  password


//default php mail function
//$mail->isMail(); 
$mail->isHTML(true);


$mail->setFrom($email, $name);
$mail->addAddress('viewexports@yahoo.co.in', 'Penta Green');	
$mail->addBCC('ijas@inwayhosting.com', 'inway'); 
$mail->Subject = "Enquiry: " . $name;
$message = "<p>Enquiry Received from your Website ".$domain. " <br> name:" . $name. " <br> Phone: ".$phone." <br> Email: " . $email."</p>"; 
$message .="<p>".$requirement."</p>";
$mail->msgHTML($message);


if(!$mail->send()) {
	echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Email sending Failed '.$mail->ErrorInfo.'</div>';
} else {
	$mail->clearAddresses();
	$mail->setFrom('no-reply@aztechtools.com','no reply');
	$mail->addAddress($email, $name);	
	$mail->Subject = "Thanks: Enquiry Received:";
	$message = "<p>Thank You! " . $name. " You enquiry from your Website ".$domain. " received <br> and we will get back to you on your  Phone: ".$phone." or  Email: " . $email." shortly</p>"; 
	$mail->msgHTML($message);
	$mail->send();
	
	$sms = new sms();

	$customer_log = $sms->send($customer, $customer_text);
	$vistor_log = $sms->send($vistor, $vistor_text);
	$inway_log = $sms->send($inway, $inway_text);
	echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Email Sent Successfully</p>';
}
	
?>
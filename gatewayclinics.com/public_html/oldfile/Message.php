<?php
$decodedmessage=base64_decode($_GET['mes']);

switch($decodedmessage){

case "faq_news" :
echo "Information sent sucessfully !!";
break;
}
?>
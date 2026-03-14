<?php
$decodedmessage=base64_decode($_GET['mes']);

switch($decodedmessage){

case "admincreated4" :
echo "Admin Registration Details Created Successfully !!";
break;
case "category_success" :
echo "  Created Successfully !!";
break;
case "category_updated" :
echo "  Updated Successfully !!";
break;
case "product_success" :
echo "  Created Successfully !!";
break;
case "product_updated" :
echo "  Updated Successfully !!";
break;

case "news_success" :
echo "  Created Successfully !!";
break;
case "news_updated" :
echo "  Updated Successfully !!";
break;
case "faq_details" :
echo "  Created Successfully !!";
break;
case "faq_updated" :
echo "  Updated Successfully !!";
break;

case "down_success" :
echo " Information Created Successfully !!";
break;
case "product_updated" :
echo "  Updated Successfully !!";
break;
}
?>
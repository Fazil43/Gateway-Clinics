<?php
error_reporting(0);
//include('db.php');
//session_start();
//$session_id='1'; //$session id
$path = "uploads/";
$actual_image_name="";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	include_once 'includes/getExtension.php';
	$imagename = $_FILES['photoimg']['name'];
	$size = $_FILES['photoimg']['size'];
					
	if(strlen($imagename))
	{
		$ext = strtolower(getExtension($imagename));
		if(in_array($ext,$valid_formats))
		{
			if($size<(1024*1024))
			{
				$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
				$uploadedfile = $_FILES['photoimg']['tmp_name'];
				include 'includes/compressImage.php';	
											 
				$widthArray = array(200,100,50);
				foreach($widthArray as $newwidth)
				{
				$filename=compressImage($ext,$uploadedfile,$path,$actual_image_name,$newwidth);
				echo "<img src='".$filename."' class='img'> <br/>";
				echo "<b>Width:</b> ".$newwidth."px  <br/><b>File Name:</br> ".$filename."<br/><br/>";
				}								
				if(move_uploaded_file($uploadedfile, $path.$actual_image_name))
				{	
				//mysqli_query($db,"INSERT INTO user_uploads(image_name,user_id_fk,created) VALUES('$image_name','$session_id','$time')");
				echo "<img src='".$path.$actual_image_name."'  class='preview'><br/>";
				echo "<b>Original Image</b>  <br/><b>File Name:</br> ".$filename."<br/><br/>";
				}
				else
				echo "Fail upload folder with read access.";
			}
			else
			echo "Image file size max 1 MB";					
		}
		else
		echo "Invalid file format..";	
	}
	else
	echo "Please select image..!";
	exit;
}
?>
<?php include "includes/header.php";
if(isset($_SESSION['Admin_id']) && isset($_SESSION['Admin_mail']))
{
?>
<script type="text/javascript">
function checkInt(obj)
{
	if(obj.value*1 - obj.value*1!=0)
		{obj.value="";}
	
	if(obj.value.indexOf(" ",0)!=-1)
		{
		obj.value="";
		alert ("No Spaces Allowed");	
		obj.focus();
		obj.value="";
		}
}
</script>
<style>
tr { 
  border: solid;
  border-width: 1px 0;
}
</style>
<script type="text/javascript">
function updateprojects()
{
frm=document.project;
if(frm.title1.value=="")
{
alert("Enter Gallery Name");
frm.title1.focus();
return false;
}

var edit="<?php echo $_GET[ac]; ?>";
if(edit!="edit")

if(frm.image1.value=="")
{
alert("Upload Image");
frm.image1.focus();
return false;
}
if(frm.priority.value=="")
{
alert("Select Priority");
frm.priority.focus();
return false;
}


var edit="<?php echo $_GET[ac]; ?>";
if(edit!="edit")

				if(frm.image1.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image1.value))
				{
				alert("Upload Image File in Image");
				frm.image1.focus();
				return false;                                                
				}
				}
				
				if(frm.image2.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image2.value))
				{
				alert("Upload Image File in Image1");
				frm.image2.focus();
				return false;                                                
				}
				}
				
				if(frm.image3.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image3.value))
				{
				alert("Upload Image File in Image2");
				frm.image3.focus();
				return false;                                                
				}
				}
				
				if(frm.image4.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image4.value))
				{
				alert("Upload Image File in Image3");
				frm.image4.focus();
				return false;                                                
				}
				}
				
				if(frm.image5.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image5.value))
				{
				alert("Upload Image File in Image4");
				frm.image5.focus();
				return false;                                                
				}
				}
				
				
				if(frm.image6.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image6.value))
				{
				alert("Upload Image File in Image5");
				frm.image6.focus();
				return false;                                                
				}
				}
				
				if(frm.image7.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image7.value))
				{
				alert("Upload Image File in Image6");
				frm.image7.focus();
				return false;                                                
				}
				}
				
				if(frm.image8.value!="")
				{    
				if(!/(\.gif|\.GIF|\.jpg|\.JPG|\.png|\.PNG|\.jpeg|\.JPEG)$/i.test(frm.image8.value))
				{
				alert("Upload Image File in Image7");
				frm.image8.focus();
				return false;                                                
				}
				}

				
				alert("Updated Successfully");
				
}

</script>
<?php
switch($_GET["s"])
{
	case 1:
		$msg	=	"<div style='color:red; padding-top:20px;'>Image Upload Failed</div>";
		break;
	case 2:
		$msg    =	 "<div style='color:red; padding-top:20px;'>Image Filesize Within 3MB</div>";
		break;
	case 3:
		$msg	=	"<div style='color:red; padding-top:20px;'>Invalid Image Format</div>";
		break;
	case 04:
		$msg	=	"<div style='color:green; padding-top:20px;'>Addedd Successfully</div>";
	case 5:
		$msg	=	"<div style='color:green; padding-top:20px;'>Updated Successfully</div>";
	case 06:
		$msg	=	"<div style='color:green; padding-top:20px;'>Deleted Successfully</div>";

}
?>
<?php extract($_REQUEST); {                 /*request starts*/  
$path1 = "event1/";
$path2 = "event2/";
$path3 = "event3/";
$path4 = "event4/";
$path5 = "event5/";
$path6 = "event6/";
$path7 = "event7/";
$path8 = "event8/";
$valid_formats1 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats2 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats3 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats4 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats5 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats6 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats7 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats8 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");

	   /* inserting datas into db while submitting form */
        if($ac=="ins")
        {
		
	  $title1=$_POST['title1'];
	  $title2=$_POST['title2'];
	  $title3=$_POST['title3'];
	  $title4=$_POST['title4'];
	  $title5=$_POST['title5'];
	  $title6=$_POST['title6'];
	  $title7=$_POST['title7'];
	  $title8=$_POST['title8'];
	   $priority=$_POST['priority'];
	  $ins_qry=mysql_query("INSERT INTO event(event_title1, event_title2, event_title3, event_title4, event_title5, event_title6, event_title7, event_title8, event_priority,   	event_createddatetime, event_status) values ('$title1', '$title2', '$title3', '$title4', '$title5', '$title6', '$title7', '$title8', '$priority', now(), 'A')");
	  include_once 'includes/getExtension.php';
/*image 1 */	  
$imagename1 = $_FILES['image1']['name'];
$size1 = $_FILES['image1']['size'];
if(strlen($imagename1))
{
$ext1 = strtolower(getExtension1($imagename1));
if(in_array($ext1,$valid_formats1))
{
if($size<(3145728))
			{
$actual_image_name1 = time().$session_id.".".$ext1;
$uploadedfile1 = $_FILES['image1']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage1.php';

$widthArray1 = array(250,500); //You can change dimension here.
foreach($widthArray1 as $newwidth1)
{
$filename1=compressImage1($ext1,$uploadedfile1,$path1,$actual_image_name1,$newwidth1);
}
//Original Image
if(move_uploaded_file($uploadedfile1, $path1.$actual_image_name1))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image1='$actual_image_name1' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}
/*image 1 end */

/*image 2 */	  
$imagename2 = $_FILES['image2']['name'];
$size2 = $_FILES['image2']['size'];
if(strlen($imagename2))
{
$ext2 = strtolower(getExtension2($imagename2));
if(in_array($ext2,$valid_formats2))
{
if($size<(3145728))
			{
$actual_image_name2 = time().$session_id.".".$ext2;
$uploadedfile2 = $_FILES['image2']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage2.php';

$widthArray2 = array(250,500); //You can change dimension here.
foreach($widthArray2 as $newwidth2)
{
$filename2=compressImage2($ext2,$uploadedfile2,$path2,$actual_image_name2,$newwidth2);
}
//Original Image
if(move_uploaded_file($uploadedfile2, $path2.$actual_image_name2))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image2='$actual_image_name2' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 2 end */

/*image 3 */	  
$imagename3 = $_FILES['image3']['name'];
$size3 = $_FILES['image3']['size'];
if(strlen($imagename3))
{
$ext3 = strtolower(getExtension3($imagename3));
if(in_array($ext3,$valid_formats3))
{
if($size<(3145728))
			{
$actual_image_name3 = time().$session_id.".".$ext3;
$uploadedfile3 = $_FILES['image3']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage3.php';

$widthArray3 = array(250,500); //You can change dimension here.
foreach($widthArray3 as $newwidth3)
{
$filename3=compressImage3($ext3,$uploadedfile3,$path3,$actual_image_name3,$newwidth3);
}
//Original Image
if(move_uploaded_file($uploadedfile3, $path3.$actual_image_name3))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image3='$actual_image_name3' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 3 end */

/*image 4 */	  
$imagename4 = $_FILES['image4']['name'];
$size4 = $_FILES['image4']['size'];
if(strlen($imagename4))
{
$ext4 = strtolower(getExtension4($imagename4));
if(in_array($ext4,$valid_formats4))
{
if($size<(3145728))
			{
$actual_image_name4 = time().$session_id.".".$ext4;
$uploadedfile4 = $_FILES['image4']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage4.php';

$widthArray4 = array(250,500); //You can change dimension here.
foreach($widthArray4 as $newwidth4)
{
$filename4=compressImage4($ext4,$uploadedfile4,$path4,$actual_image_name4,$newwidth4);
}
//Original Image
if(move_uploaded_file($uploadedfile4, $path4.$actual_image_name4))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image4='$actual_image_name4' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 4 end */

/*image 5 */	  
$imagename5 = $_FILES['image5']['name'];
$size5 = $_FILES['image5']['size'];
if(strlen($imagename5))
{
$ext5 = strtolower(getExtension5($imagename5));
if(in_array($ext5,$valid_formats5))
{
if($size<(3145728))
			{
$actual_image_name5 = time().$session_id.".".$ext5;
$uploadedfile5 = $_FILES['image5']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage5.php';

$widthArray5 = array(250,500); //You can change dimension here.
foreach($widthArray5 as $newwidth5)
{
$filename5=compressImage5($ext5,$uploadedfile5,$path5,$actual_image_name5,$newwidth5);
}
//Original Image
if(move_uploaded_file($uploadedfile5, $path5.$actual_image_name5))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image5='$actual_image_name5' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 5 end */



/*image 6 */	  
$imagename6 = $_FILES['image6']['name'];
$size6 = $_FILES['image6']['size'];
if(strlen($imagename6))
{
$ext6 = strtolower(getExtension6($imagename6));
if(in_array($ext6,$valid_formats6))
{
if($size<(3145728))
			{
$actual_image_name6 = time().$session_id.".".$ext6;
$uploadedfile6 = $_FILES['image6']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage6.php';

$widthArray6 = array(250,500); //You can change dimension here.
foreach($widthArray6 as $newwidth6)
{
$filename6=compressImage6($ext6,$uploadedfile6,$path6,$actual_image_name6,$newwidth6);
}
//Original Image
if(move_uploaded_file($uploadedfile6, $path6.$actual_image_name6))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image6='$actual_image_name6' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 6 end */


/*image 7 */	  
$imagename7 = $_FILES['image7']['name'];
$size7 = $_FILES['image7']['size'];
if(strlen($imagename7))
{
$ext7 = strtolower(getExtension7($imagename7));
if(in_array($ext7,$valid_formats7))
{
if($size<(3145728))
			{
$actual_image_name7 = time().$session_id.".".$ext7;
$uploadedfile7 = $_FILES['image7']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage7.php';

$widthArray7 = array(250,500); //You can change dimension here.
foreach($widthArray7 as $newwidth7)
{
$filename7=compressImage7($ext7,$uploadedfile7,$path7,$actual_image_name7,$newwidth7);
}
//Original Image
if(move_uploaded_file($uploadedfile7, $path7.$actual_image_name7))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image7='$actual_image_name7' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 7 end */


/*image 8 */	  
$imagename8 = $_FILES['image8']['name'];
$size8 = $_FILES['image8']['size'];
if(strlen($imagename8))
{
$ext8 = strtolower(getExtension8($imagename8));
if(in_array($ext8,$valid_formats8))
{
if($size<(3145728))
			{
$actual_image_name8 = time().$session_id.".".$ext8;
$uploadedfile8 = $_FILES['image8']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage8.php';

$widthArray8 = array(250,500); //You can change dimension here.
foreach($widthArray8 as $newwidth8)
{
$filename8=compressImage8($ext8,$uploadedfile8,$path8,$actual_image_name8,$newwidth8);
}
//Original Image
if(move_uploaded_file($uploadedfile8, $path8.$actual_image_name8))
		{	
		$sel_maxid_qry="SELECT MAX(event_id) as event_id FROM event"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		$maxid=$rows['event_id'];	
	    $update_path_query==mysql_query("UPDATE event SET event_image8='$actual_image_name8' WHERE event_id='$maxid'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 8 end */

echo "<script>document.location.href='event.php?s=04';</script>";	
}
		/* inserting datas into db while submitting form ends */
        ?>         


<?php if($ac !== edit) { ?>
<div class="head">Gallery >> Add</div>
<!--form add-->
    <div class="cmn_frm">
    <form action="" method="post" name="project" id="project" enctype="multipart/form-data" onSubmit="javascript: return validationprojects(this);">

        <div class="cmn_rw">
            <div class="fl col1">
            <label> Gallery Name *</label>
            <div class="tbox design-center">
            <input type="text" name="title1" id="title1" maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image *  <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image1" id="image1" />
            </div>
          
            </div>            
               </div>
               
            <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 1</label>
            <div class="tbox design-center">
            <input type="text" name="title2" id="title2"  maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 1   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image2" id="image2"  />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 2</label>
            <div class="tbox design-center">
            <input type="text" name="title3" id="title3"  maxlength="70"  />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 2   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image3" id="image3" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 3</label>
            <div class="tbox design-center">
            <input type="text" name="title4" id="title4"  maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 3   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image4" id="image4" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 4</label>
            <div class="tbox design-center">
            <input type="text" name="title5" id="title5"   maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 4   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image5" id="image5" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 5</label>
            <div class="tbox design-center">
            <input type="text" name="title6" id="title6"  maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 5   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image6" id="image6" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 6 </label>
            <div class="tbox design-center">
            <input type="text" name="title7" id="title7" maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 6   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image7" id="image7" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 7</label>
            <div class="tbox design-center">
            <input type="text" name="title8" id="title8"  maxlength="70" />
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 7   <small>(Maximum 3  MB )</small></label>
            <div class="fileup design-center">
            <input type="file" name="image8" id="image8" />
            </div>
          
            </div>            
               </div>
               <div class="cmn_rw">
            <div class="fl col1">
            <label> Priority *</label>
           
          <div class="tbox design-center">
            <select name="priority" id="priority">
            <option value="">--Select Priority--</option>
            <option value="1">High</option>
            <option value="2">Medium</option>
            <option value="3">Low</option>
            </select>
            </div>
           
          
            </div> 
                        
               </div>
       <div class="cmn_rw" style="margin:20px 0px;"> 
        <center><input name="" id="" type="submit" value="Submit"/>&nbsp;<input name="reset" id="reset" type="reset" value="Reset"/></center>
        </div>
    </form>
    </div>
<!--form add end-->
<? } ?>
<?php
$path1 = "event1/";
$path2 = "event2/";
$path3 = "event3/";
$path4 = "event4/";
$path5 = "event5/";
$path6 = "event6/";
$path7 = "event7/";
$path8 = "event8/";
$valid_formats1 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats2 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats3 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats4 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats5 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats6 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats7 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
$valid_formats8 = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
if($ac=="update")
{
//echo "UPDATE country SET country_name='$country', country_craeteddatetime=now() where country_id='$id'";  exit;
       $title1=$_POST['title1'];
	  $title2=$_POST['title2'];
	  $title3=$_POST['title3'];
	  $title4=$_POST['title4'];
	  $title5=$_POST['title5'];
	  $title6=$_POST['title6'];
	  $title7=$_POST['title7'];
	  $title8=$_POST['title8'];
	  $priority=$_POST['priority'];
	
$sel_qry=mysql_query("UPDATE event SET event_title1='$title1', event_title2='$title2', event_title3='$title3', event_title4='$title4', event_title5='$title5', event_title6='$title6', event_title7='$title7', event_title8='$title8', event_priority='$priority' where event_id='$id'"); 
 include_once 'includes/getExtension.php';
/*image 1 */	  
$imagename1 = $_FILES['image1']['name'];
$size1 = $_FILES['image1']['size'];
if(strlen($imagename1))
{
$ext1 = strtolower(getExtension1($imagename1));
if(in_array($ext1,$valid_formats1))
{
if($size<(3145728))
			{
$actual_image_name1 = time().$session_id.".".$ext1;
$uploadedfile1 = $_FILES['image1']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage1.php';

$widthArray1 = array(250,500); //You can change dimension here.
foreach($widthArray1 as $newwidth1)
{
$filename1=compressImage1($ext1,$uploadedfile1,$path1,$actual_image_name1,$newwidth1);
}
//Original Image
if(move_uploaded_file($uploadedfile1, $path1.$actual_image_name1))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event1/$rows[event_image1]"))
		{
		unlink("event1/$rows[event_image1]");
		}
		if(file_exists("event1/500_$rows[event_image1]"))
		{
		unlink("event1/500_$rows[event_image1]");
		}
		if(file_exists("event1/250_$rows[event_image1]"))
		{
		unlink("event1/250_$rows[event_image1]");
		}
		echo "UPDATE event SET event_image1='$actual_image_name1' WHERE event_id='$id'";
	    $update_path_query==mysql_query("UPDATE event SET event_image1='$actual_image_name1' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}
/*image 1 end */

/*image 2 */	  
$imagename2 = $_FILES['image2']['name'];
$size2 = $_FILES['image2']['size'];
if(strlen($imagename2))
{
$ext2 = strtolower(getExtension2($imagename2));
if(in_array($ext2,$valid_formats2))
{
if($size<(3145728))
			{
$actual_image_name2 = time().$session_id.".".$ext2;
$uploadedfile2 = $_FILES['image2']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage2.php';

$widthArray2 = array(250,500); //You can change dimension here.
foreach($widthArray2 as $newwidth2)
{
$filename2=compressImage2($ext2,$uploadedfile2,$path2,$actual_image_name2,$newwidth2);
}
//Original Image
if(move_uploaded_file($uploadedfile2, $path2.$actual_image_name2))
		{	
	    $maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event2/$rows[event_image2]"))
		{
		unlink("event2/$rows[event_image2]");
		}
		if(file_exists("event2/500_$rows[event_image2]"))
		{
		unlink("event2/500_$rows[event_image2]");
		}
		if(file_exists("event2/250_$rows[event_image2]"))
		{
		unlink("event2/250_$rows[event_image2]");
		}
		
	    $update_path_query==mysql_query("UPDATE event SET event_image2='$actual_image_name2' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 2 end */

/*image 3 */	  
$imagename3 = $_FILES['image3']['name'];
$size3 = $_FILES['image3']['size'];
if(strlen($imagename3))
{
$ext3 = strtolower(getExtension3($imagename3));
if(in_array($ext3,$valid_formats3))
{
if($size<(3145728))
			{
$actual_image_name3 = time().$session_id.".".$ext3;
$uploadedfile3 = $_FILES['image3']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage3.php';

$widthArray3 = array(250,500); //You can change dimension here.
foreach($widthArray3 as $newwidth3)
{
$filename3=compressImage3($ext3,$uploadedfile3,$path3,$actual_image_name3,$newwidth3);
}
//Original Image
if(move_uploaded_file($uploadedfile3, $path3.$actual_image_name3))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event3/$rows[event_image3]"))
		{
		unlink("event3/$rows[event_image3]");
		}
		if(file_exists("event3/500_$rows[event_image3]"))
		{
		unlink("event3/500_$rows[event_image3]");
		}
		if(file_exists("event3/250_$rows[event_image3]"))
		{
		unlink("event3/250_$rows[event_image3]");
		}
	    $update_path_query==mysql_query("UPDATE event SET event_image3='$actual_image_name3' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 3 end */

/*image 4 */	  
$imagename4 = $_FILES['image4']['name'];
$size4 = $_FILES['image4']['size'];
if(strlen($imagename4))
{
$ext4 = strtolower(getExtension4($imagename4));
if(in_array($ext4,$valid_formats4))
{
if($size<(3145728))
			{
$actual_image_name4 = time().$session_id.".".$ext4;
$uploadedfile4 = $_FILES['image4']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage4.php';

$widthArray4 = array(250,500); //You can change dimension here.
foreach($widthArray4 as $newwidth4)
{
$filename4=compressImage4($ext4,$uploadedfile4,$path4,$actual_image_name4,$newwidth4);
}
//Original Image
if(move_uploaded_file($uploadedfile4, $path4.$actual_image_name4))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event4/$rows[event_image4]"))
		{
		unlink("event4/$rows[event_image4]");
		}	
		if(file_exists("event4/500_$rows[event_image4]"))
		{
		unlink("event4/500_$rows[event_image4]");
		}	
		if(file_exists("event4/250_$rows[event_image4]"))
		{
		unlink("event4/250_$rows[event_image4]");
		}	
	    $update_path_query==mysql_query("UPDATE event SET event_image4='$actual_image_name4' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 4 end */

/*image 5 */	  
$imagename5 = $_FILES['image5']['name'];
$size5 = $_FILES['image5']['size'];
if(strlen($imagename5))
{
$ext5 = strtolower(getExtension5($imagename5));
if(in_array($ext5,$valid_formats5))
{
if($size<(3145728))
			{
$actual_image_name5 = time().$session_id.".".$ext5;
$uploadedfile5 = $_FILES['image5']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage5.php';

$widthArray5 = array(250,500); //You can change dimension here.
foreach($widthArray5 as $newwidth5)
{
$filename5=compressImage5($ext5,$uploadedfile5,$path5,$actual_image_name5,$newwidth5);
}
//Original Image
if(move_uploaded_file($uploadedfile5, $path5.$actual_image_name5))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event5/$rows[event_image5]"))
		{
		unlink("event5/$rows[event_image5]");
		}
		if(file_exists("event5/500_$rows[event_image5]"))
		{
		unlink("event5/500_$rows[event_image5]");
		}
		if(file_exists("event5/250_$rows[event_image5]"))
		{
		unlink("event5/250_$rows[event_image5]");
		}
	    $update_path_query==mysql_query("UPDATE event SET event_image5='$actual_image_name5' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 5 end */



/*image 6 */	  
$imagename6 = $_FILES['image6']['name'];
$size6 = $_FILES['image6']['size'];
if(strlen($imagename6))
{
$ext6 = strtolower(getExtension6($imagename6));
if(in_array($ext6,$valid_formats6))
{
if($size<(3145728))
			{
$actual_image_name6 = time().$session_id.".".$ext6;
$uploadedfile6 = $_FILES['image6']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage6.php';

$widthArray6 = array(250,500); //You can change dimension here.
foreach($widthArray6 as $newwidth6)
{
$filename6=compressImage6($ext6,$uploadedfile6,$path6,$actual_image_name6,$newwidth6);
}
//Original Image
if(move_uploaded_file($uploadedfile6, $path6.$actual_image_name6))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event6/$rows[event_image6]"))
		{
		unlink("event6/$rows[event_image6]");
		}
		if(file_exists("event6/500_$rows[event_image6]"))
		{
		unlink("event6/500_$rows[event_image6]");
		}
		if(file_exists("event6/250_$rows[event_image6]"))
		{
		unlink("event6/250_$rows[event_image6]");
		}	
	    $update_path_query==mysql_query("UPDATE event SET event_image6='$actual_image_name6' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 6 end */


/*image 7 */	  
$imagename7 = $_FILES['image7']['name'];
$size7 = $_FILES['image7']['size'];
if(strlen($imagename7))
{
$ext7 = strtolower(getExtension7($imagename7));
if(in_array($ext7,$valid_formats7))
{
if($size<(3145728))
			{
$actual_image_name7 = time().$session_id.".".$ext7;
$uploadedfile7 = $_FILES['image7']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage7.php';

$widthArray7 = array(250,500); //You can change dimension here.
foreach($widthArray7 as $newwidth7)
{
$filename7=compressImage7($ext7,$uploadedfile7,$path7,$actual_image_name7,$newwidth7);
}
//Original Image
if(move_uploaded_file($uploadedfile7, $path7.$actual_image_name7))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event7/$rows[event_image7]"))
		{
		unlink("event7/$rows[event_image7]");
		}
		if(file_exists("event7/500_$rows[event_image7]"))
		{
		unlink("event7/500_$rows[event_image7]");
		}
		if(file_exists("event7/250_$rows[event_image7]"))
		{
		unlink("event7/250_$rows[event_image7]");
		}
	    $update_path_query==mysql_query("UPDATE event SET event_image7='$actual_image_name7' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 7 end */


/*image 8 */	  
$imagename8 = $_FILES['image8']['name'];
$size8 = $_FILES['image8']['size'];
if(strlen($imagename8))
{
$ext8 = strtolower(getExtension8($imagename8));
if(in_array($ext8,$valid_formats8))
{
if($size<(3145728))
{
$actual_image_name8 = time().$session_id.".".$ext8;
$uploadedfile8 = $_FILES['image8']['tmp_name'];

//Re-sizing image. 
include 'includes/compressImage8.php';

$widthArray8 = array(250,500); //You can change dimension here.
foreach($widthArray8 as $newwidth8)
{
$filename8=compressImage8($ext8,$uploadedfile8,$path8,$actual_image_name8,$newwidth8);
}
//Original Image
if(move_uploaded_file($uploadedfile8, $path8.$actual_image_name8))
		{	
		$maxid=$id;
		$sel_maxid_qry="SELECT * FROM event WHERE event_id='$maxid'"; 
		$sel_maxid_res=mysql_query($sel_maxid_qry);
		$rows=mysql_fetch_array($sel_maxid_res);
		if(file_exists("event8/$rows[event_image8]"))
		{
		unlink("event8/$rows[event_image8]");
		}
		if(file_exists("event8/500_$rows[event_image8]"))
		{
		unlink("event8/500_$rows[event_image8]");
		}
		if(file_exists("event8/250_$rows[event_image8]"))
		{
		unlink("event8/250_$rows[event_image8]");
		}	
	    $update_path_query==mysql_query("UPDATE event SET event_image8='$actual_image_name8' WHERE event_id='$id'"); 
		}

else
echo "<script>document.location.href='event.php?s=1';</script>";
}
else
echo "<script>document.location.href='event.php?s=2';</script>";	
}
else
echo "<script>document.location.href='event.php?s=3';</script>";
}

/*image 8 end */  
echo "<script>document.location.href='event.php?s=5';</script>";
}

?>
        
         
<?php if($ac == edit) 
{
 $select="SELECT *  FROM event WHERE event_id='$id'"; 
$query=mysql_query($select);
$rows=mysql_fetch_array($query);
?>
<!--form edit-->
<div class="cmn_frm">
<div class="head">Gallery >> Edit</div>
    <form action="" method="post" name="project" id="project" enctype="multipart/form-data" onSubmit="javascript: return updateprojects(this);">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
          <div class="cmn_rw">
            <div class="fl col1">
            <label> Gallery Name *</label>
            <div class="tbox design-center">
            <input type="text" name="title1" id="title1" value="<?php echo $rows['event_title1'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image  *  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image1" id="image1" /><?php if($rows[event_image1]!="") { ?><img src="event1/<?= $rows[event_image1]; ?>" /> <?php
			}
			?>
            </div>
          
            </div>            
               </div>
             
           <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 1</label>
            <div class="tbox design-center">
            <input type="text" name="title2" id="title2" value="<?php echo $rows['event_title2'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 1  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image2" id="image2" /><?php if($rows[event_image2]!="") { ?><img src="event2/<?= $rows[event_image2]; ?>" /> <?php
			}
			?>
            </div>
            </div>            
            </div>
            
           <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 2</label>
            <div class="tbox design-center">
            <input type="text" name="title3" id="title3" value="<?php echo $rows['event_title3'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 2  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image3" id="image3" /><?php if($rows[event_image3]!="") { ?><img src="event3/<?= $rows[event_image3]; ?>" /> <?php
			}
			?>
            </div>
            </div>            
            </div> 
           <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 3</label>
            <div class="tbox design-center">
            <input type="text" name="title4" id="title4" value="<?php echo $rows['event_title4'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 3  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image4" id="image4" /><?php if($rows[event_image4]!="") { ?><img src="event4/<?= $rows[event_image4]; ?>" /> <?php
			}
			?>
            </div>
          
            </div>            
               </div> 
                 
                <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 4</label>
            <div class="tbox design-center">
            <input type="text" name="title5" id="title5" value="<?php echo $rows['event_title5'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 4  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image5" id="image5" /><?php if($rows[event_image5]!="") { ?><img src="event5/<?= $rows[event_image5]; ?>" /> <?php
			}
			?>
            </div>
          
            </div>            
               </div>
                 <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 5</label>
            <div class="tbox design-center">
            <input type="text" name="title6" id="title6" value="<?php echo $rows['event_title6'];?>" maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 5 <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image6" id="image6" /><?php if($rows[event_image6]!="") { ?><img src="event6/<?= $rows[event_image6]; ?>" /> <?php
			}
			?>
            </div>
            </div>            
            </div>
              
            <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 6</label>
            <div class="tbox design-center">
            <input type="text" name="title7" id="title7" value="<?php echo $rows['event_title7'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 6 <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image7" id="image7" />
			<?php 
			if($rows[event_image7]!="") 
			{ 
			?>
            <img src="event7/<?= $rows[event_image7]; ?>" /> 
			<?php
			}
			?>
            </div>
            </div>            
            </div>
               
               
            <div class="cmn_rw">
            <div class="fl col1">
            <label> Title 7</label>
            <div class="tbox design-center">
            <input type="text" name="title8" id="title8" value="<?php echo $rows['event_title8'];?>"  maxlength="70"/>
            </div>
          
            </div> 
            <div class="fl col1">
            <label> Image 7  <small>(Maximum 3 MB)</small></label>
            <div class="fileup design-center">
            <input type="file" name="image8" id="image8" /><?php if($rows[event_image8]!="") { ?><img src="event8/<?= $rows[event_image8]; ?>" /> <?php
			}
			?>
            </div>
          
            </div>            
               </div>
     <div class="cmn_rw">
            <div class="fl col1">
            <label> Priority *</label>
           
          <div class="tbox design-center">
            <select name="priority" id="priority">
            <option value="">--Select Priority--</option>
            <option value="1"<?php if($rows['event_priority']=="1") { echo "selected"; }?>>High</option>
            <option value="2"<?php if($rows['event_priority']=="2") { echo "selected"; }?>>Medium</option>
            <option value="3"<?php if($rows['event_priority']=="3") { echo "selected"; }?>>Low</option>
            </select>
            </div>
            </div>             
            </div>
            <div class="cmn_rw" style="margin:20px 0px;"> 
            <center><input name="" id="" type="submit" value="Submit"/>&nbsp;<input name="reset" id="reset" type="reset" value="Reset"/>&nbsp;<input type="button" name="cancel" id="cancel" onClick="window.location.href='event.php'" value="Cancel" /></center>
            </div>
    </form>
    </div>
<!--form edit ends-->
<?php } ?>


<?php if($ac !== edit) { ?>   
<!--resulting table-->
<form action="delete-projects1.php" class="cmn_tbl" method="post" name="data_table" id="" onSubmit="javascript: return validationproject(this);"> 
    <table class="tbl_outer" cellpadding="0" cellspacing="0">
    	<tr class="rw_head">
        	<td class="cell_1">Select All <input type="checkbox" name="" id="check_all" value="" /></td>
            <td class="cell_2"> Event Name</td>
             <td class="cell_2"> Image </td>
            
                 <td class="cell_2"> Priority </td>   
            <td class="cell_4">Edit</td></tr>            
<!-- looping starts here -->
<?php 
$query = mysql_query("SELECT * FROM event order by event_priority asc"); // 2. perform a query
$num_rows=mysql_num_rows($query);
if($num_rows>0)
{
$color="1";
while($row = mysql_fetch_array($query)) {
if($color==1){
?>
<!--end of looping-->        
    	<tr>
        	<td class="cell_1"><input type="checkbox" value="<?php echo $row['event_id']; ?>" name="data[]" id="data"></td>
         
            <td class="cell_3"><?php echo $row['event_title1']; ?></td>
             <td class="cell_3"><img src="event1/<?php echo $row['event_image1'];?>"  width="50" height="50" /></td>
      
           <td class="cell_3"><?php if($row['event_priority']=="1") { echo "High"; } elseif($row['event_priority']=="2") { echo "Medium"; } else { echo "Low"; }  ?></td>
              
            <td class="cell_4"><a href=""><img src="images/edit.png" alt="Edit" title="Edit" /></a></td>
         </tr>
          <?php
		  $color="2"; 
				}
				else
				{
				?>
				    	<tr class="rw_bg">
                        	<td class="cell_1"><input type="checkbox" value="<?php echo $row['event_id']; ?>" name="data[]" id="data"></td>
          <td class="cell_3"><?php echo $row['event_title1']; ?></td>
             <td class="cell_3"><img src="event1/<?php echo $row['event_image1']; ?>"  width="50" height="50" /></td>
      
          
               <td class="cell_3"><?php if($row['event_priority']=="1") { echo "High"; } elseif($row['event_priority']=="2") { echo "Medium"; } else { echo "Low"; }  ?></td>
            <td class="cell_4"><a href=""><img src="images/edit.png" alt="Edit" title="Edit" /></a></td>
         </tr>
				<?
				$color="1";
                }} } else { ?>
                <tr class="rw_bg">
                <td colspan="6" style="text-align:center; font-weight:bold">No record found</td>
                </tr>
                
                 <? }  unset($row); // unset the query after perform ?>
    </table>
    <!--delete all-->
    <div class="btm_links">
    <input type="submit" class="fl delete-all" name="submit" id="submit" value="Delete" />
    </div>
    <!--end of delete all-->
</form>   
<!--end of resulting table-->
<? } ?>

    
    <? }                  /*request ends*/  ?>
    
<?php include_once 'includes/footer.php';
        }
        else
        {
        echo '<meta http-equiv="refresh" content="0;url=index.php?s=-1">';
        exit;
        }
        ?>